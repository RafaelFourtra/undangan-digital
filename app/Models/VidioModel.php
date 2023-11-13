<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VidioModel extends Model
{
    use HasFactory;

    protected $table = 'vidio_t';
    protected $guarded = [];
}
