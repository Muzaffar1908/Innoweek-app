<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

     protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en'
    ];

    public static function scopeProfessionList()
    {
        $lang = \App::getLocale();
        return  self::query()->select('id', 'name_'.$lang.' as name')->get();
    }
}
