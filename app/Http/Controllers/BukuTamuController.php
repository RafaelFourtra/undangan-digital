<?php

namespace App\Http\Controllers;

use App\Models\BukuTamuModel;
use App\Models\TemplatePesanModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BukuTamuController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $idUser = $user->id;

        $groupTamu = BukuTamuModel::where('user_id', $idUser)->select('group')->get();
        $templatePesan = TemplatePesanModel::where('user_id', $idUser)->first();
        return view('undangan/bukutamu', compact('groupTamu', 'templatePesan'));
    }

    public function bukutamuStore(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;

        $request->validate([
            'nama' => 'required',
        ]);
        if($request->id_tamu == null){
            $no = BukuTamuModel::whereDate('created_at', Carbon::today())->count();
            $no++;
            $kode_tamu = 'AD' . $idUser . date('ymd') . str_pad($no, 3, 0, STR_PAD_LEFT);
            $query = BukuTamuModel::create([
                'user_id' => $idUser,
                'nama' => $request->nama,
                'group' => $request->group,
                'kode_tamu' => $kode_tamu,
                'whatsapp' => $request->whatsapp,
                'jumlah' => $request->jumlah,
            ]);
        } else {
            
        }
    

        if ($query) {
            return response()->json(['code' => 1]);
        } else {
            return response()->json(['code' => 0]);
        }
    }

    public function jumlahTamu()
    {
        $user = Auth::user();
        $idUser = $user->id;

        $jumlahTamu = BukuTamuModel::where('user_id', $idUser)->count();

        return json_encode(compact('jumlahTamu'));
    }

    public function getTamu(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;

        $nama = $request->namaSearch;
        $group = $request->groupSearch;

        $query = BukuTamuModel::query();

        if ($nama) {
            $query->where('nama', $nama);
        }

        if ($group) {
            $query->where('group', $group);
        }

        $data = $query->get();


        return json_encode(compact('data'));
    }

    public function edit($id)
    {
        $data = BukuTamuModel::where('id', $id)->first();

        return response()->json(compact('data'));
    }

    public function bukutamuUpdate(Request $request)
    {
        $query = BukuTamuModel::where('id', $request->id_tamu)->update([
            'nama' => $request->nama,
            'group' => $request->group,
            'whatsapp' => $request->whatsapp,
            'jumlah' => $request->jumlah,
        ]);
      
        if ($query) {
            return response()->json(['code' => 1]);
        } else {
            return response()->json(['code' => 0]);
        }
    }
}
