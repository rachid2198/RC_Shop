<?php

namespace App\Listeners;

use App\Events\ProductAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductAddedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductAdded $event): void
    {
        $category = $event->category;
        $category->product_count = $category->product_count+1 ;
        $category->save();
    }
}
