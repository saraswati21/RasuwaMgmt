<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myorder extends Model
{
    use HasFactory;
    protected $primaryKey = 'MyOrderID';
    const CREATED_AT = 'OrderDate';
    const UPDATED_AT = 'OrderUpdatedAT';
}
