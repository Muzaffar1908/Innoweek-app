<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_buy_course extends Model
{
    use HasFactory;

    public function cources()
    {
        return $this->belongsTo(Cources::class,'cours_id',"id");
    }
}
