<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live360 extends Model
{
    use HasFactory;

    protected $fillable = [
      'youtobe_id_1',
      'youtobe_id_2',
      'youtobe_id_3',
      'youtobe_id_4',
      'is_active',
    ];
}
