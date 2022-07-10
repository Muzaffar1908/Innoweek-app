<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses_sharxlar extends Model
{
    use HasFactory;
    public function cources()
    {
        return $this->belongsTo(Courses_sharxlar::class,'cours_id',"id");
    }
}
