<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerorder extends Model
{
    use HasFactory;
    protected $primaryKey = 'CustomerOrderID';
    const CREATED_AT = 'OrderDate';
    const UPDATED_AT = 'OrderUpdatedAT';
}
