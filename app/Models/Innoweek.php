<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Innoweek extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'phone',
        'email',
        'address',
        'description_en',
        'description_ru',
        'description_uz',
        'telegram',
        'facebook',
        'you_tube',
        'instagram',
        'is_active',
    ];
}
