<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer;

class customertype extends Model
{
    use HasFactory;
    protected $primaryKey = 'CustomerTypeID';
    public $timestamps = false;

}
