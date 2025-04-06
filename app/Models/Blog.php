<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    // Table name (optional if it follows Laravel's naming convention)
    protected $table = 'blog';

    // Fillable fields for mass assignment
    protected $fillable = [
        'blog_title',
        'blog_content',
        'featered_image',
        'category',
        'tags',
        'publish_date',
        'status',
        'url_slug',
        'seo_title',
        'seo_discreption',
        'author_name',
        'Excerpt',
    ];

    // Optionally define casts (e.g. for status as boolean)
    protected $casts = [
        'status' => 'boolean',
        'publish_date' => 'date',
    ];
}
