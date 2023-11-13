<?php

namespace App\Http\Controllers;

use App\Models\TemplatePesanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplatePesanController extends Controller
{
    public function UpdateTemplatePesan(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;

        $query = TemplatePesanModel::where('user_id', $idUser)->update([
            'title' => $request->title,
            'templatepesan' => $request->templatepesan,
        ]);

        if ($query) {
            return response()->json(['code' => 1]);
          } else {
            return response()->json(['code' => 0]);
          }
    }
}
