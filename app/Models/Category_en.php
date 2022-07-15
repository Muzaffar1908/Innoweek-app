<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_en extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->belongsTo(Cources::class,"cat_id",'id');
    }
    protected $fillable=[
        'name', 'icon','color'
    ];
}
