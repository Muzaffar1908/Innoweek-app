<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cources extends Model
{
    use HasFactory;

    public function card()
    {
        return $this->belongsTo(Student_cards_courses::class,'id',"cours_id");
    }
    public function user()
    {
        return $this->belongsTo(User::class,'ins_id',"id");
    }
    public function cources()
    {
        return $this->belongsTo(Student_buy_course::class,'cours_id',"id");
    }
    public function teacher(){
        return $this->hasOne(User::class,'id',"ins_id");
    }
    public function includes(){
        return $this->hasMany(Cources_includes::class,'id',"cours_id");
    }

    public function category_en(){
        return $this->hasOne(Category_en::class,'id',"cat_id");
    }
    public function category_ru(){
        return $this->hasOne(Category_ru::class,'id',"cat_id");
    }
    public function category_uz(){
        return $this->hasOne(Category_uz::class,'id',"cat_id");
    }
    public function students(){
        return $this->hasOne(Student_buy_course::class,'cours_id',"id");
    }
    public function sharxlar(){
        return $this->hasMany(Courses_sharxlar::class,'cours_id',"id");
    }
    public function video(){
        return $this->hasMany(Video_audio_books::class,'cours_id',"id");
    }
}
