<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class PageSeo extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['page_title' , 'meta_description' , 'open_graph_title' , 'open_graph_description'];

}
