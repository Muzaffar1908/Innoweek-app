<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_tip extends Model
{
    use HasFactory;
    public function video(){
        return $this->hasMany(Video_audio_books::class,'uroven',"id");
    }
}
