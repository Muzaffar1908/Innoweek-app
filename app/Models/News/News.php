<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cat_id',
        'title_uz',
        'title_ru',
        'title_en',
        'user_image',
        'description_en',
        'description_ru',
        'description_uz',
        'is_active',
        'tags',
    ];
}
