<?php

namespace App\Http\Controllers;

use App\Models\InformasiAcaraModel;
use App\Models\MusikModel;
use App\Models\MusikTransaksiModel;
use App\Models\TemaModel;
use App\Models\TemaTransaksiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformasiAcaraController extends Controller
{
  public function tema()
  {
    $user = Auth::user();
    $idUser = $user->id;

    $tema = TemaModel::all();
    $checkChecked = TemaTransaksiModel::where('user_id', $idUser)->first();
    return view('undangan.tema', compact('tema', 'checkChecked'));
  }

  public function temaStore(Request $request)
  {
    $user = Auth::user();
    $idUser = $user->id;
    $checkDataTema = TemaTransaksiModel::where('user_id', $idUser)->first();


    if ($checkDataTema === null) {
      $query = TemaTransaksiModel::create([
        'user_id' => $idUser,
        'tema_id' => $request->selectedThemes,
      ]);

      if ($query) {
        return response()->json(['code' => 1]);
      } else {
        return response()->json(['code' => 0]);
      }
    } else {
      $query = TemaTransaksiModel::where('user_id', $idUser)->update([
        'tema_id' => $request->selectedThemes,
      ]);

      if ($query) {
        return response()->json(['code' => 1]);
      } else {
        return response()->json(['code' => 0]);
      }
    }
  }

  public function musik()
  {
    $user = Auth::user();
    $idUser = $user->id;

    $musik = MusikModel::all();
    $checkChecked = MusikTransaksiModel::where('user_id', $idUser)->first();
    return view('undangan.musik', compact('musik', 'checkChecked'));
  }

  public function musikSearch(Request $request)
  {
    $search = $request->input('query');;

    $query = MusikModel::query();

    if ($search) {
      $query->where(function ($subquery) use ($search) {
        $subquery->where('judul', 'LIKE', '%' . $search . '%')
          ->orWhere('penyanyi', 'LIKE', '%' . $search . '%');
      });
    }

    $data = $query->get();

    return response()->json(compact('data'));
  }

  public function musikStore(Request $request)
  {
    $user = Auth::user();
    $idUser = $user->id;
    $checkDataMusik = MusikTransaksiModel::where('user_id', $idUser)->first();

    $request->validate([
      'selectedMusic' => 'required',
    ]);

    if ($checkDataMusik === null) {
      $query = MusikTransaksiModel::create([
        'user_id' => $idUser,
        'musik_id' => $request->selectedMusic,
      ]); 

      if ($query) {
        return response()->json(['code' => 1]);
      } else {
        return response()->json(['code' => 0]);
      }
    } else {
      $query = MusikTransaksiModel::where('id', $idUser)->update([
        'musik_id' => $request->selectedMusic,
      ]);

      if ($query) {
        return response()->json(['code' => 1]);
      } else {
        return response()->json(['code' => 0]);
      }
    }
  }

  public function informasiacara()
  {
    $user = Auth::user();
    $idUser = $user->id;

    $data = InformasiAcaraModel::where('user_id', $idUser)->first();
    return view('undangan/informasiacara', compact('data'));
  }

  public function informasiacaraStore(Request $request)
  {
    $user = Auth::user();
    $idUser = $user->id;
    $checkDataInformasi = InformasiAcaraModel::where('user_id', $idUser)->first();


    if ($checkDataInformasi === null) {

      $request->validate([
        'sampul' => 'required|mimes:jpeg,png',
        'pembuka' => 'required|mimes:jpeg,png',
        'judulacara' => 'required',
        'deskripsi' => 'required',
        'tanggalpernikahan' => 'required',
        'jamakadnikah' => 'required',
        'lokasiakadnikah' => 'required',
      ]);

      $path = public_path('images/sampul/');

      if ($request->hasFile('sampul') && $request->file('sampul')->isValid()) {
        $file = $request->file('sampul');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($path,  $fileName);
      }

      $path2 = public_path('images/pembuka/');

      if ($request->hasFile('pembuka') && $request->file('pembuka')->isValid()) {
        $file2 = $request->file('pembuka');
        $fileName2 = time() . '_' . $file2->getClientOriginalName();
        $file2->move($path2,  $fileName2);
      }

      $query = InformasiAcaraModel::create([
        'sampul' => $fileName,
        'pembuka' => $fileName2,
        'user_id' => $idUser,
        'judulacara' => $request->judulacara,
        'deskripsi' => $request->deskripsi,
        'tanggalpernikahan' => $request->tanggalpernikahan,
        'jamresepsi' => $request->jamresepsi,
        'jamakadnikah' => $request->jamakadnikah,
        'lokasiresepsi' => $request->lokasiresepsi,
        'lokasiakadnikah' => $request->lokasiakadnikah,
        'livestream' => $request->livestream,
        'googlemapsresepsi' => $request->googlemapsresepsi,
        'googlemapspernikahan' => $request->googlemapspernikahan,

      ]);

      if ($query) {
        return response()->json(['code' => 1]);
      } else {
        return response()->json(['code' => 0]);
      }
    } else {
      $request->validate([
        'sampul' => 'mimes:jpeg,png',
        'pembuka' => 'mimes:jpeg,png',
        'judulacara' => 'required',
        'deskripsi' => 'required',
        'tanggalpernikahan' => 'required',
        'jamakadnikah' => 'required',
        'lokasiakadnikah' => 'required',
      ]);

      $fileName = $request->sampulbefore;
      $path = public_path('images/sampul/');

      if ($request->hasFile('sampul') && $request->file('sampul')->isValid()) {
        if (file_exists($path . $fileName)) {
          unlink($path .  $fileName);
        }
        $file = $request->file('sampul');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($path,  $fileName);
      }

      $fileName2 = $request->pembukabefore;
      $path2 = public_path('images/pembuka/');

      if ($request->hasFile('pembuka') && $request->file('pembuka')->isValid()) {
        if (file_exists($path2 . $fileName2)) {
          unlink($path2 .  $fileName2);
        }
        $file2 = $request->file('pembuka');
        $fileName2 = time() . '_' . $file2->getClientOriginalName();
        $file2->move($path2,  $fileName2);
      }


      $query = InformasiAcaraModel::where('user_id', $idUser)->update([
        'sampul' => $fileName,
        'pembuka' => $fileName2,
        'judulacara' => $request->judulacara,
        'deskripsi' => $request->deskripsi,
        'tanggalpernikahan' => $request->tanggalpernikahan,
        'jamresepsi' => $request->jamresepsi,
        'jamakadnikah' => $request->jamakadnikah,
        'lokasiresepsi' => $request->lokasiresepsi,
        'lokasiakadnikah' => $request->lokasiakadnikah,
        'livestream' => $request->livestream,
        'googlemapsresepsi' => $request->googlemapsresepsi,
        'googlemapspernikahan' => $request->googlemapspernikahan,
      ]);

      if ($query) {
        return response()->json(['code' => 1]);
      } else {
        return response()->json(['code' => 0]);
      }
    }
  }
}
