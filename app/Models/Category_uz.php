<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_uz extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsTo(Cources::class, 'id', "cat_id");
    }
    protected $fillable = [
        'name', 'icon', 'color'
    ];
}
