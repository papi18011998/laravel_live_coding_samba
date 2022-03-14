<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class Departement extends Model
{
    use HasFactory;
    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function communes(){
        return $this->hasMany(Commune::class);
    }
}
