<?php

namespace App\Http\Controllers;

use App\Models\GaleriModel;
use App\Models\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleriController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $idUser = $user->id;
        $qtyFotoMax = 0;
        $checkingPaket = OrderModel::where('user_id', $idUser)->first();
        if ($checkingPaket->paket === 'Paket 1') {
            $qtyFotoMax = 4;
        } elseif ($checkingPaket->paket === 'Paket 2') {
            $qtyFotoMax = 6;
        } elseif ($checkingPaket->paket === 'Paket 3') {
            $qtyFotoMax = 8;
        }
        return view('undangan/galeri', compact('qtyFotoMax'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'foto' => 'required',
        ]);

        $user = Auth::user();
        $idUser = $user->id;

        $checkingPaket = OrderModel::where('user_id', $idUser)->first();
        $qtyFotoMax = 0;
        if ($checkingPaket->paket === 'Paket 1') {
            $qtyFotoMax = 4;
        } elseif ($checkingPaket->paket === 'Paket 2') {
            $qtyFotoMax = 6;
        } elseif ($checkingPaket->paket === 'Paket 3') {
            $qtyFotoMax = 8;
        }

        $checkingGaleri = GaleriModel::where('user_id', $idUser)->count();

        if ($checkingGaleri < $qtyFotoMax) {
            $path = public_path('images/galeri/');
            if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
                $file = $request->file('foto');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $fileName);
            }
            $query = GaleriModel::create([
                'user_id' => $idUser,
                'foto' => $fileName,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        } else {
            return response()->json(['code' => 2]);
        }
    }

    public function edit(string $id)
    {
        $data = GaleriModel::where('id', $id)->first();

        return response()->json(compact('data'));
    }

    public function destroy(string $id)
    {
        $data = GaleriModel::where('id', $id)->first();
        $fileName = $data->foto;
        $path = public_path('images/galeri/');
        if (file_exists($path . $fileName)) {
            unlink($path .  $fileName);
        }

        $query = GaleriModel::where('id', $id)->delete();

        if ($query) {
            return response()->json(['success' => true]);
        }
    }

    public function get()
    {
        $user = Auth::user();
        $idUser = $user->id;

        $data = GaleriModel::where('user_id', $idUser)->get();

        return response()->json(compact('data'));
    }

    public function UpdateGaleri(Request $request, string $id)
    {
        $request->validate([
            'foto_name' => 'required',
        ]);

        $fileName = $request->foto_name;
        $path = public_path('images/galeri/');
        if ($request->hasFile('foto_edit') && $request->file('foto_edit')->isValid()) {
            if (file_exists($path . $fileName)) {
                unlink($path .  $fileName);
            }
            $file = $request->file('foto_edit');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path,  $fileName);
        }
        $query = GaleriModel::where('id', $id)->update([
            'foto' => $fileName,
        ]);

        if ($query) {
            return response()->json(['code' => 1]);
        } else {
            return response()->json(['code' => 0]);
        }
    }
}
