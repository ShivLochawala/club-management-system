<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; // or null

    public $incrementing = false;
    public $timestamps = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
}
