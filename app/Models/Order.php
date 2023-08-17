<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=['nom','prenom','num_tel','email','adresse','wilaya_id','total','prix_livraison','statut'];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
