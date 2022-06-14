<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Translatable;
<<<<<<< HEAD
    protected $translatable = ['category_name', 'category_text','slug', 'meta_title','meta_description', 'meta_keywords' ,'top_h1','bottom_h2','bottom_text'];
=======
    protected $translatable = ['category_name', 'category_text','slug', 'meta_title','meta_description', 'meta_keywords' ,'top_h1','top_text','bottom_h2','bottom_text'];
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
}
