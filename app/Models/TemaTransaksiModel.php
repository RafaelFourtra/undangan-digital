<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemaTransaksiModel extends Model
{
    use HasFactory;

    protected $table = 'tema_t';
    protected $guarded = [];

    public function temaMaster() {
        return $this->belongsTo(TemaModel::class, 'tema_id', 'id');
    }
}
