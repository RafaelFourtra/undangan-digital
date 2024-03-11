<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TemaModel;
use App\Models\PaketModel;
use Illuminate\Http\Request;

class TemaMasterApiController extends Controller
{
    public function get()
    {
        $data = TemaModel::all();
        return response()->json(['data' => $data->toArray()], 200);
    }

    public function getPaket(){
        $tema = PaketModel::all();
        return response()->json(['data' => $tema -> toArray()], 200);
    }
}
