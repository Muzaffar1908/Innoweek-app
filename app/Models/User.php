<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Archive\Archive;
use App\Models\Archive\Speakers;
use App\Models\UserTicket;
use App\Models\News\Galeries;
use App\Models\News\News;
use App\Models\News\NewsCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//For importing traits form package
Use MIMAXUZ\LRoles\Traits\HasPermissions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'password',
        'gender',
        'birth_date',
        'user_image',
        'address',
        'balance',
        'email',
        'phone',
        'roll',
        'provider_name',
        'provider_id',
        'country_id',
        'profession_id',
        'organization',
        'is_active',
        'is_blocked',
    ];

    public function users()
    {
        return $this->hasMany(NewsCategory::class,'user_id','id');
    }


    public function archive()
    {
        return $this->hasMany(Archive::class, 'user_id','id');
    }

    public function conference()
    {
        return $this->hasMany(Conference::class, 'user_id', 'id');
    }
    public function speaker()
    {
        return $this->hasMany(Speakers::class, 'user_id', 'id');
    }

    public function userticket()
    {
        return $this->hasMany(UserTicket::class, 'user_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(Galeries::class, 'user_id', 'id');
    }

    public function partner()
    {
        return $this->hasMany(Partner::class, 'user_id', 'id');
    }

    public function promo()
    {
        return $this->hasMany(Partner::class, 'user_id', 'id');
    }

    public function promo2()
    {
        return $this->hasMany(Partner::class, 'user_id', 'id');
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
