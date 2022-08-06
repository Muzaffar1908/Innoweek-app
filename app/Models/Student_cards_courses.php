<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_cards_courses extends Model
{
    use HasFactory;
    public function cources(){
        return $this->hasOne(Cources::class,'id',"cours_id");
    }
}
