<?php

namespace App\Models\Archive;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'yera',
        'descriptio_en',
        'descriptio_ru',
        'descriptio_uz',
        'is_active',
    ];
}
