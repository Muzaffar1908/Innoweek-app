<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushNotification extends Model
{
    use HasFactory;

    protected $fillable = [
      'image',
      'text_uz',
      'text_ru',
      'text_en',
      'is_active',
    ];
}
