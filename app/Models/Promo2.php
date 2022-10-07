<?php

namespace App\Models;

use App\Models\Archive\Archive;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'promo_url_uz',
        'promo_url_ru',
        'promo_url_en',
        'is_active',
    ];

    public function userTable2()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function archiveTable2()
    {
        return $this->belongsTo(Archive::class, 'archive_id');
    }
}
