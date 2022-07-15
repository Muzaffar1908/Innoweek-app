<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cource_includes_row extends Model
{
    use HasFactory;

    public function discr()
    {
        return $this->belongsTo(Cources_discription::class,"disc_id",'id');
    }

}
