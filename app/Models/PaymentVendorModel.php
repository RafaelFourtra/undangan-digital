<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentVendorModel extends Model
{
    use HasFactory;

    protected $table = 'paymentvendor_m';
    protected $guarded = [];
}
