<?php

namespace Modules\About\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\About\Database\Factories\AboutFactory;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['title_ar', 'title_en', 'content_ar', 'content_en'];

    // protected static function newFactory(): AboutFactory
    // {
    //     //return AboutFactory::new();
    // }
}
