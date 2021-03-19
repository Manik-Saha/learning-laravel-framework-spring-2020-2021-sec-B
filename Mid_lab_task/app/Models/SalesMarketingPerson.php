<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesMarketingPerson extends Model
{
    //use HasFactory;
    protected $table = 'sales_marketing';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
}
