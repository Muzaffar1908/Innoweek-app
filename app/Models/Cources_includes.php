<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cources_includes extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->belongsTo(Cources::class,'id',"cours_id");
    }
}
