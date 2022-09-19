<?php

namespace App\Models;
use App\Models\Archive\Archive;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    public function galleryTable()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function galleyarchiveTable()
    {
        return $this->belongsTo(Archive::class, 'archive_id');
    }

}
