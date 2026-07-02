<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class About extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name' , 'job_title' , 'quote' , 'left_text' , 'right_text' ,  'bio'];
    
}
