<?php

namespace App\Http\Controllers;

use App\Models\CeritaCintaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CeritaCintaController extends Controller
{
    public function ceritacinta()
    {
        $user = Auth::user();
        $idUser = $user->id;

        $data = CeritaCintaModel::where('user_id', $idUser)->first();
    
        return view('undangan/ceritacinta', compact('data'));
    }

    public function ceritacintaStore(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;
        $checkData = CeritaCintaModel::where('user_id', $idUser)->first();


        if ($checkData != null) {

            $fileName = $request->cover1before;
            $path = public_path('images/ceritacinta/');
      
            if ($request->hasFile('cover1') && $request->file('cover1')->isValid()) {
              if (file_exists($path . $fileName)) {
                unlink($path .  $fileName);
              }
              $file = $request->file('cover1');
              $fileName = time() . '_' . $file->getClientOriginalName();
              $file->move($path,  $fileName);
            }
      
            $fileName2 = $request->cover2before;
      
            if ($request->hasFile('cover2') && $request->file('cover2')->isValid()) {
              if (file_exists($path . $fileName2)) {
                unlink($path .  $fileName2);
              }
              $file2 = $request->file('cover2');
              $fileName2 = time() . '_' . $file2->getClientOriginalName();
              $file2->move($path,  $fileName2);
            }

            $fileName3 = $request->cover3before;
      
            if ($request->hasFile('cover3') && $request->file('cover3')->isValid()) {
              if (file_exists($path . $fileName3)) {
                unlink($path .  $fileName3);
              }
              $file3 = $request->file('cover3');
              $fileName3 = time() . '_' . $file3->getClientOriginalName();
              $file3->move($path,  $fileName3);
            }
      
           

            $query = CeritaCintaModel::where('user_id', $idUser)->update([
                'judulcerita1' => $request->judulcerita1,
                'cerita1' => $request->cerita1,
                'judulcerita2' => $request->judulcerita2,
                'cerita2' => $request->cerita2,
                'judulcerita3' => $request->judulcerita3,
                'cerita3' => $request->cerita3,
                'cover1' => $fileName,
                'cover2' => $fileName2,
                'cover3' => $fileName3,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        } else {

            $path = public_path('images/ceritacinta/');

            if ($request->hasFile('cover1') && $request->file('cover1')->isValid()) {
                $file = $request->file('cover1');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path,  $fileName);
            }

            if ($request->hasFile('cover2') && $request->file('cover2')->isValid()) {
                $file2 = $request->file('cover2');
                $fileName2 = time() . '_' . $file2->getClientOriginalName();
                $file2->move($path, $fileName2);
            }

            
            if ($request->hasFile('cover3') && $request->file('cover3')->isValid()) {
                $file3 = $request->file('cover3');
                $fileName3 = time() . '_' . $file3->getClientOriginalName();
                $file3->move($path, $fileName3);
            }
            $query = CeritaCintaModel::create([
                'user_id' => $idUser,
                'judulcerita1' => $request->judulcerita1,
                'cerita1' => $request->cerita1,
                'judulcerita2' => $request->judulcerita2,
                'cerita2' => $request->cerita2,
                'judulcerita3' => $request->judulcerita3,
                'cerita3' => $request->cerita3,
                'cover1' => $fileName,
                'cover2' => $fileName2,
                'cover3' => $fileName3,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        }
    }
}
