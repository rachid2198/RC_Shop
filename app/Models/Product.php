<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Property;
use App\Models\Subcategory;
use App\Events\ProductAdded;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    protected static function boot(){
        parent::boot();
        static::created(function ($product) {
            Event::dispatch(new ProductAdded($product, $product->category));
        });
    }

    protected $fillable=['nom','description','prix','prix_vente','stock','stock_fictif',
    'url_video','fichier_technique','category_id','subcategory_id','finalcategory_id','brand_id','image_principal','featured','offer'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function registerMediaCollections(): void{
        $this->addMediaCollection('images');
    }

    public function scopeSortBy($query, $column, $order = 'asc')
    {
        return $query->orderBy($column, $order);
    }
}
