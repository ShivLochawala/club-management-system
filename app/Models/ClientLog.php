<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientLog extends Model
{
    use HasFactory;
    public $table = "client_logs";
    public $timestamps = false;
}
