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
        'stoped_at',
        'title_uz',
        'title_ru',
        'title_en',
        'live_url',
        'innoweek_video',
        'user_image',
        'description_en',
        'description_ru',
        'description_uz',
        'address_uz',
        'address_ru',
        'address_en',
        'is_active',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    //protected $dates = ['date','stopped_at', 'started_at'];


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
