<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['service_name', 'service_type', 'service_slug', 'service_shortdesc', 'service_desc', 'service_image', 'service_icon', 'post_by', 'status', 'meta_title', 'meta_description'];
}
