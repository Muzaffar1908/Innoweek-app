<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function cources(){
        return $this->hasMany(Cources::class,'ins_id',"id");
    }
    public function ins_about(){
        return $this->hasOne(Instructor_about::class,'user_id',"id");
    }


    public function link(){
        return $this->hasMany(User_link::class,'user_id',"id");
    }
    public function students(){
        return $this->hasMany(Student_buy_course::class,'user_id',"id");
    }
    public function cource_sharx()
    {
        return $this->belongsTo(Courses_sharxlar::class,'id',"user_id");
    }

    public function cources2()
    {
        return $this->belongsTo(Cources::class,'id',"ins_id");
    }

    public function ins_sharx()
    {
        return $this->belongsTo(Instructor_sharxlar::class,'id',"student_id");
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'uroven',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];



    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $attributes = [
        'img' => 'user.png',
    ];
}
