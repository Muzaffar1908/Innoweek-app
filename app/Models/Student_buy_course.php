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
    public function buy(){
        return $this->hasOne(Cources::class,'id',"cours_id");
    }
    public function sharx(){
        return $this->hasMany(Courses_sharxlar::class,'cours_id',"cours_id");
    }
    public function lesson(){
        return $this->hasMany(Video_audio_books::class,'cours_id',"cours_id");
    }
    public function watch(){
        return $this->hasMany(Watch_lesson::class,'cours_id',"cours_id");
    }


}
