<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class DeliverySeoPage extends Model
{
    use Translatable;
    protected $translatable = ['meta_title','meta_description','meta_keywords'];
}
