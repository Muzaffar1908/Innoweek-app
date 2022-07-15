<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor_about extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'user_id',"id");
    }
    protected $fillable = [
        'text', 'ins_id'
    ];
}
