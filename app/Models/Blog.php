<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['blog_type', 'category_id', 'blog_name', 'blog_shortdesc', 'blog_desc', 'blog_image', 'status', 'meta_title', 'meta_description'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
