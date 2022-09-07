<?php

namespace App\Models;

use App\Models\Archive\Archive;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTicket extends Model
{
    use HasFactory;
    public function usersTable()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
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
