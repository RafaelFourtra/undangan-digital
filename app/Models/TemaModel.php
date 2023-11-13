<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TemaModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tema_m';
    protected $fillable = ['nama_tema', 'thumbnail_tema', 'url_tema', 'jenis'];
}
