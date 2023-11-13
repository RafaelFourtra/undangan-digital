<?php

namespace Database\Seeders;

use App\Models\PaymentVendorModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentVendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paket = [
            ['paymentvendor' => 'BCA'],
            ['paymentvendor' => 'BNI'],
            ['paymentvendor' => 'BRI'],
            ['paymentvendor' => 'BSI'],
            ['paymentvendor' => 'Bank Aceh'],
            ['paymentvendor' => 'Bank Aladin'],
            ['paymentvendor' => 'Bank BTN'],
            ['paymentvendor' => 'Bank BJB'],
            ['paymentvendor' => 'Bank Jateng'],
            ['paymentvendor' => 'Bank Mega'],
            ['paymentvendor' => 'Bank Muamalat'],
            ['paymentvendor' => 'Bank Sumut'],
            ['paymentvendor' => 'Mandiri'],
            ['paymentvendor' => 'Dana'],
            ['paymentvendor' => 'GoPay'],
            ['paymentvendor' => 'Hana Bank'],
            ['paymentvendor' => 'JAGO'],
            ['paymentvendor' => 'Jenius'],
            ['paymentvendor' => 'LinkAja'],
            ['paymentvendor' => 'OVO'],
            ['paymentvendor' => 'Permata Bank'],
            ['paymentvendor' => 'ShopeePay'],
        ];
        foreach ($paket as $paketData) {
            PaymentVendorModel::create($paketData);
        }
    }
}
