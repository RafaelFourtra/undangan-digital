<?php

namespace App\Http\Controllers;

use App\Models\QuotesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuotesController extends Controller
{
    //
    public function quotes()
    {
        $user = Auth::user();
        $idUser = $user->id;
    
        $data = QuotesModel::where('user_id', $idUser)->first();
        return view('undangan/quotes', compact('data'));
    }

    public function quotesStore(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;
        $checkData = QuotesModel::where('user_id', $idUser)->first();


        if ($checkData != null) {
            $query = QuotesModel::where('user_id', $idUser)->update([
                'quotes' => $request->quotes,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        } else {
            $query = QuotesModel::create([
                'user_id' => $idUser,
                'quotes' => $request->quotes,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        }
    }
}
