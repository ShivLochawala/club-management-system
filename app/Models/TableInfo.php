<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableInfo extends Model
{
    use HasFactory;
    public $table = "table_infos";
    public $timestamps = false;
}
