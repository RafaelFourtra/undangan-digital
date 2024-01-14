<?php

namespace App\Http\Controllers;

use App\Models\BukuTamuModel;
use App\Models\UcapanModel;
use App\Models\VisitorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->user()->hasRole('Customer')) {
            if ($request->ajax()) {
                $user = Auth::user();
                $idUser = $user->id;
                $tamu = BukuTamuModel::where('user_id', $idUser)->count();
                $hadir = BukuTamuModel::where('user_id', $idUser)->where('status', 'Hadir')->sum('jumlahkehadiran');
                $ucapan = UcapanModel::where('user_id', $idUser)->count();
                $visitor = VisitorModel::where('user_id', $idUser)->count();

                return response()->json([
                    'tamu' => $tamu,
                    'hadir' => $hadir,
                    'ucapan' => $ucapan,
                    'visitor' => $visitor
                ]);
            }

            // dd($getIP);
            return view('dashboard');
        } else if ($request->user()->hasRole('Super Admin') || $request->user()->hasRole('Admin')) {
            return redirect()->to('administrator/order');
        } else {
            abort(403, 'Anda Tidak Memiliki Akses');
        }
    }

    public function listUcapan()
    {
        $user = Auth::user();
        $idUser = $user->id;

        $data = UcapanModel::where('user_id', $idUser)->get();

        return response()->json(compact('data'));
    }
}
