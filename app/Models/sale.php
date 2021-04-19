<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
    protected $primaryKey = 'SaleID';
    const CREATED_AT = 'DateOfPurchase';
    const UPDATED_AT = 'DateOfUpdate';
}
