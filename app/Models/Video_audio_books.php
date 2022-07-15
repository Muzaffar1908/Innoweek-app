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

}
