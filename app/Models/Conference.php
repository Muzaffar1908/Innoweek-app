<?php

namespace App\Models;

use App\Models\Archive\Archive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'archive_id',
        'started_at',
        'title_uz',
        'title_ru',
        'title_en',
        'user_image',
        'description_en',
        'description_ru',
        'description_uz',
        'is_active',
    ];

    public function conferenceTable()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function archiveTable()
    {
        return $this->belongsTo(Archive::class, 'archive_id');
    }

    public function archive()
    {
        return $this->hasMany(Conference::class, 'archive_id', 'id');
    }
}
