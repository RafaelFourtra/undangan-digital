<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MempelaiModel extends Model
{
    use HasFactory;

    protected $table = 'mempelai_t';
    protected $guarded = [];
}
