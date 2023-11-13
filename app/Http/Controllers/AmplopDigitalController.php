<?php

namespace App\Http\Controllers;

use App\Models\AmplopDigitalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmplopDigitalController extends Controller
{
    public function index()
    {
        return view('undangan.amplopdigital');
    }

    public function amplopdigitalStore(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;
        $checkData = AmplopDigitalModel::where('user_id', $idUser)->first();


        if ($checkData === null) {

            $request->validate([
                'namaakun' => 'required',
                'noakun' => 'required',
                'paymentvendor' => 'required',
            ]);

            $query = AmplopDigitalModel::create([
                'user_id' => $idUser,
                'namaakun' => $request->namaakun,
                'noakun' => $request->noakun,
                'paymentvendor' => $request->paymentvendor,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        } else {
            $request->validate([
                'namaakun' => 'required',
                'noakun' => 'required',
                'paymentvendor' => 'required',
            ]);


            $query = AmplopDigitalModel::where('user_id', $idUser)->update([
                'namaakun' => $request->namaakun,
                'noakun' => $request->noakun,
                'paymentvendor' => $request->paymentvendor,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        }
    }
}
