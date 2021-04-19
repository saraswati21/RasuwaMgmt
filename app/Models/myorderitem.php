<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myorderitem extends Model
{
    use HasFactory;
    protected $primaryKey = 'OrderItemId';
    public $timestamps = false;
}
