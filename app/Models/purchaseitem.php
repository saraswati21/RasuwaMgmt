<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchaseitem extends Model
{
    use HasFactory;
    protected $primaryKey = 'purchaseItemId';
    public $timestamps = false;
}
