<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eduhub extends Model
{

    protected $fillable=[
        'tell', 'email','facebook','instagram',
        'you_tube','google_play','app_story','adress','office_open','office_close','awards_count'

    ];
    use HasFactory;
}
