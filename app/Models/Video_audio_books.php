<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_audio_books extends Model
{
    use HasFactory;
    public function course()
    {
        return $this->belongsTo(Cources::class,'cours_id',"id");
    }
    public function uroven()
    {
        return $this->belongsTo(Video_tip::class,'uroven',"id");
    }

    public function watch(){
        return $this->hasMany(Watch_lesson::class,'lesson_id',"id");
    }
    public function buy()
    {
        return $this->belongsTo(Student_buy_course::class,'cours_id',"cours_id");
    }



}
