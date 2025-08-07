<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faq';
    protected $fillable = ['question', 'answer', 'blog_id'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
