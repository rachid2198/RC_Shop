<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'image','product_count'];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}