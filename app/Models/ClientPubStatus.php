<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPubStatus extends Model
{
    use HasFactory;
    public $table = "client_pub_status";
    public $timestamps = false;
}
