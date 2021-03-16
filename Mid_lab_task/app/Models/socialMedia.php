<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialMedia extends Model
{
    protected $table = 'social_media_channel';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}
