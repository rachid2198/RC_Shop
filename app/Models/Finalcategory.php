<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalcategory extends Model
{
    use HasFactory;

    protected $fillable=['nom','subcategory_id'];
}
