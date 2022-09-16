<?php

namespace App\Models\Archive;

use App\Models\News\Galeries;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'year',
        'description_en',
        'description_ru',
        'description_uz',
        'is_active',
    ];

    public function archiveTable()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function gallery()
    {
        return $this->hasMany(Galeries::class, 'archive_id', 'id');
    }

    public function partner()
    {
        return $this->hasMany(Partner::class, 'archive_id', 'id');
    }


}
