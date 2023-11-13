<?php

namespace App\Http\Controllers;

use App\Models\VidioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VidioController extends Controller
{
  public function vidio()
  {
    $user = Auth::user();
    $idUser = $user->id;

    $check = VidioModel::where('user_id', $idUser)->first();
    return view('undangan.vidio', compact('check'));
  }


  public function vidioStore(Request $request)
  {
    $request->validate([
      'vidio' => 'required|file|mimes:mp4|max:200000',
    ]);

    $user = Auth::user();
    $idUser = $user->id;

    $checkData = VidioModel::where('user_id', $idUser)->first();
    if ($checkData == null) {

      $path = public_path('video/prewedding/');
      if ($request->hasFile('vidio') && $request->file('vidio')->isValid()) {
        $file = $request->file('vidio');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($path,  $fileName);
      }

      $query = VidioModel::create([
        'user_id' => $idUser,
        'vidio' => $fileName,
      ]);

      if ($query) {
        return response()->json(['code' => 1]);
      } else {
        return response()->json(['code' => 0]);
      }
    } else {

      $fileName = $request->vidiobefore;
      $path = public_path('video/prewedding/');

      if ($request->hasFile('vidio') && $request->file('vidio')->isValid()) {
        if (file_exists($path . $fileName)) {
          unlink($path .  $fileName);
        }
        $file = $request->file('vidio');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($path,  $fileName);
      }

      $query = VidioModel::where('id', $idUser)->update([
        'vidio' => $request->fileName,
      ]);

      if ($query) {
        return response()->json(['code' => 1]);
      } else {
        return response()->json(['code' => 0]);
      }
    }
  }

  public function vidioDelete($id)
  {
    $data = VidioModel::where('id', $id)->first();
    $fileName = $data->vidio;
    $path = public_path('video/prewedding/');

    if (file_exists($path . $fileName)) {
      unlink($path .  $fileName);
    }

    $query = $data->delete();

    if ($query) {
      return response()->json(['code' => 1]);
    } else {
      return response()->json(['code' => 0]);
    }
  }
}
