<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // menyatakan field-field yang akan di input 
    // ke suatu tabel
    protected $fillable = [
        'author_id',
        'title',
        'content',
        'image_cover',
        'is_draft'
    ];
}
