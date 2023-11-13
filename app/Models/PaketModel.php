<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaketModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'paket_m';
    protected $fillable = ['paket', 'harga'];
}
