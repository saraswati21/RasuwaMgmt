<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\account;

class accounttype extends Model
{
    use HasFactory;
    protected $primaryKey = 'AccountTypeID';
    public $timestamps = false;

}
