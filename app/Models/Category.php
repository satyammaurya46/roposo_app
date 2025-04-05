<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name', 'master_category_name', 'slug'];

    // Get subcategories manually without FK
    public function subcategories()
    {
        return Subcategory::where('category_name', $this->category_name)->get();
    }
}
