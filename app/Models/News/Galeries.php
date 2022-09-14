<?php

namespace App\Models\News;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeries extends Model
{
    use HasFactory;
 protected $table='galeries';
    protected $fillable = [
        'image',
    ];


}
