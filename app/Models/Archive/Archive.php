<?php

namespace App\Models\Archive;

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

    public function archive()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
