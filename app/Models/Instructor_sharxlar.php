<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor_sharxlar extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasOne(User::class,'id',"student_id");
    }
}
