<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accoutant extends Model
{
    protected $table = 'acccoutant';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
}
