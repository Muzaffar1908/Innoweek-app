<?php

namespace App\Models;
use App\Models\Archive\Archive;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
      'url_uz',
      'url_ru',
      'url_en',
      'promo_date_uz',
      'promo_date_ru',
      'promo_date_en',
      'is_active',
    ];

    public function userTable()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function archiveTable()
    {
        return $this->belongsTo(Archive::class, 'archive_id');
    }

}
