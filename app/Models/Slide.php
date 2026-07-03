<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Slide extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title', 'subtitle' , 'content' , 'head_title'];



    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
