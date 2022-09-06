<?php

namespace App\Models\News;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'parent_id',
        'title_uz',
        'title_en',
        'title_ru',
        'is_active',
    ];

    public function usersTable()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function newss()
    {
        return $this->hasMany(News::class,'cat_id',);
    }
}
