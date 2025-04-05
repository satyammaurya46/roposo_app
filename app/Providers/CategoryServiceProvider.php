<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\MasterCategory;
use App\Models\Subcategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share categories & subcategories with all views
        View::composer('*', function ($view) { // Fetch all categories
            $mastercategories = MasterCategory::orderBy('master_category_name', 'asc')->get();
            // Fetch all categories
            $categories = Category::orderBy('category_name', 'asc')->get();
            // Fetch subcategories
            $subcategories = Subcategory::orderBy('subcategory_name', 'asc')->get();
            
            $view->with(compact('mastercategories', 'categories', 'subcategories'));
        });
    }
}
