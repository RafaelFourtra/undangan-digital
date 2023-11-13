<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'order_t';
    protected $fillable = ['user_id', 'admin_id', 'domain', 'paket', 'harga', 'expired', 'status', 'tanggal_order'];

    public function User(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}