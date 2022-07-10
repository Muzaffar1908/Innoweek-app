<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_ru extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->belongsTo(Cources::class,'id',"cat_id");
    }
    protected $fillable=[
        'name', 'icon','color'
    ];
}
