<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
       'titlenumber_1',
       'titlenumber_2',
       'titlenumber_3',
       'countryname_1',
       'countryname_2',
       'countryname_3',
       'countryname_4',
       'countryname_5',
       'countryname_all',
       'countryson_1',
       'countryson_2',
       'countryson_3',
       'countryson_4',
       'countryson_5',
       'countryson_all',
       'titlenumber_4',
       'titlenumber_5',
       'titlenumber_6',
       'forum_1',
       'forum_2',
       'forum_3',
       'yarmarka_1',
       'yarmarka_2',
       'yarmarka_3',
       'is_active',
    ];
}
