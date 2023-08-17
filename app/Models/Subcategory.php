<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable=['nom','category_id','product_count'];

    public function subcategories()
    {
        return $this->hasMany(Finalcategory::class);
    }
}
