<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $primaryKey = 'purchaseID';
    const CREATED_AT = 'DateOfPurchase';
    const UPDATED_AT = 'DateOfUpdate';
}
