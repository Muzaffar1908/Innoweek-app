<?php

namespace App\Models;

use App\Models\Archive\Archive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'image_url',
    ];

    public function partnerTable()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function partnerarchiveTable()
    {
        return $this->belongsTo(Archive::class, 'archive_id');
    }
}
