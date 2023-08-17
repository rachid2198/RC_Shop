<?php

namespace App\Providers;

use App\Models\Category;
use App\Events\ProductAdded;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    protected $listen = [
        ProductAdded::class => [
            'App\Listeners\ProductAddedListener',
        ],
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.Layout', function ($view) {
            $categories = Category::all();

            $view->with(['categories' => $categories, 'cart' => session()->get('cart')]);
        });
    }
}