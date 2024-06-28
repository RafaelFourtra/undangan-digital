<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiOrderRequest;
use App\Models\OrderModel;
use Faker\Core\DateTime;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;


use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    public function order(ApiOrderRequest $request): JsonResponse
    {
        $data = $request->validated();

        $checkData = OrderModel::where('user_id', $data['user_id'])
            ->where('expired', '<', now())
            ->where('status', '1')
            ->first();
        if ($checkData != null) {
            throw new HttpResponseException(response([
                "errors" => [
                    "message" => [
                        "Pesanan sebelumnya masih aktif"
                    ]
                ]
            ], 400));
        } else {
            OrderModel::create([
                'user_id' => $data['user_id'],
                'mempelaipria' => $data['mempelaipria'],
                'mempelaiwanita' => $data['mempelaiwanita'],
                'judulundangan' => $data['judulundangan'],
                'tglpernikahan' => $data['tanggalpernikahan'],
                'gmaps' => $data['gmaps'],
                'alamat' => $data['alamat'],
                'gedung' => $data['gedung'],
                'kota' => $data['kota'],
                'domain' => $data['domain'],
                'tanggal_order' => now(),
                'status' => '0',
            ]);
        }

        return response()->json(['message' => 'Order berhasil diproses'], 200);
    }
}
