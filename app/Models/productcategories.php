<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productcategories extends Model
{
    use HasFactory;
    protected $primaryKey = 'productCategoryID';
    public $timestamps = false;
}
