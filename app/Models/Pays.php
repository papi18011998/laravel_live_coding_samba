<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;
//    pour ne pas donner acces a un champ
//    protected $guarded =[''];
    protected $fillable = ['nom','indicatif'];
    public function regions(){
        return $this->hasMany(Region::class);
    }
}
