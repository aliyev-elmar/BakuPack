<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['category_name', 'category_text', 'meta_title','meta_description', 'meta_keywords' ,'top_h1','top_text','bottom_h2','bottom_text'];
}
