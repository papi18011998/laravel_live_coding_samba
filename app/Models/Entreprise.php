<?php

namespace App\Models;

use App\Models\Quartier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;
    protected $casts = [
        'organigramme' => 'boolean',
    ];
    protected $guarded = ['id'];
    public function  quartier(){
        return $this->belongsTo(Quartier::class);
    }
}
