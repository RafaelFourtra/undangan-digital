<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusikTransaksiModel extends Model
{
    use HasFactory;

    protected $table = 'musik_t';
    protected $guarded = [];

    public function musikMaster() {
        return $this->belongsTo(MusikModel::class, 'musik_id', 'id');
    }
}
