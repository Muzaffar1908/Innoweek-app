<?php

namespace App\Models\Archive;

use App\Models\News\NewsCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    use HasFactory;

    protected $fiallable = [
        'user_id',
        'archive_id',
        'image',
        'job',
        'full_name',
        'facebook_ur',
        'twitter_url',
        'youtube_url',
        'description_en',
        'description_uz',
        'description_ru',
    ];
    public function usersTable()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function archiveTable()
    {
        return $this->belongsTo(Archive::class,'archive_id');
    }
}
