<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ecommerce extends Model
{
    protected $table = 'ecommerce_channel';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}
