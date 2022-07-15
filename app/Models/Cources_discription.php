<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cources_discription extends Model
{
    use HasFactory;
    public function disc(){
        return $this->hasMany(Cource_includes_row::class,"disc_id",'id');
    }

}
