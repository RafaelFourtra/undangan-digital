<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProtokolModel extends Model
{
    use HasFactory;

    protected $table = 'protokol_t';
    protected $guarded = [];
}
