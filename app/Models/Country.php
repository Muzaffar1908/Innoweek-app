<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'code'
    ];

    public static function scopeCountryList()
    {
        $lang = \App::getLocale();
        return  self::query()->select('id', 'name_'.$lang.' as name')->get();
    }
}
