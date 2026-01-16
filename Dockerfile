FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    supervisor

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Fix git ownership issue
RUN git config --global --add safe.directory '*'

# Copy existing application directory contents
COPY . /var/www/html

# Copy existing application directory permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Create .env file if not exists (to prevent database connection during build)
RUN if [ ! -f .env ]; then cp .env.example .env; fi

# Temporarily disable database connection for composer install
RUN sed -i 's/DB_CONNECTION=mysql/DB_CONNECTION=sqlite/' .env && \
    sed -i 's/DB_DATABASE=.*/DB_DATABASE=\/tmp\/database.sqlite/' .env && \
    touch /tmp/database.sqlite

# Install/update dependencies (will run without database errors now)
RUN composer install --no-scripts --no-interaction --optimize-autoloader --no-dev --ignore-platform-reqs || \
    composer update --no-scripts --no-interaction --optimize-autoloader --no-dev --ignore-platform-reqs

# Restore database connection
RUN sed -i 's/DB_CONNECTION=sqlite/DB_CONNECTION=mysql/' .env && \
    sed -i 's|DB_DATABASE=/tmp/database.sqlite|DB_DATABASE=bakupack|' .env

# Copy nginx configuration
COPY docker/nginx/default.conf /etc/nginx/sites-available/default

# Copy supervisor configuration
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose port 80
EXPOSE 80

# Start supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
