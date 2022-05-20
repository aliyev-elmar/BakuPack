<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['category_name','category_text', 'meta_title','meta_description', 'meta_keywords' ,'h1_top','text_top','h2_bottom','text_bottom'];
}
