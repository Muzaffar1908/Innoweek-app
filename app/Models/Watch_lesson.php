<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch_lesson extends Model
{
    use HasFactory;
    public function video()
    {
        return $this->belongsTo(Video_audio_books::class,'lesson_id',"id");
    }
    public function buy()
    {
        return $this->belongsTo(Student_buy_course::class,'cours_id',"cours_id");
    }
}
