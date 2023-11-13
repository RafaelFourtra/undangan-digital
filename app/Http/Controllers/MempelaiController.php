<?php

namespace App\Http\Controllers;

use App\Models\MempelaiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MempelaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $idUser = $user->id;

        $data = MempelaiModel::where('user_id', $idUser)->first();
        return view('undangan/mempelai', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $user = Auth::user();
        $idUser = $user->id;
        $checkDataMempelai = MempelaiModel::where('user_id', $idUser)->first();
      
        if ($checkDataMempelai != null) {
            $request->validate([
                'fotolaki' => 'mimes:jpeg,png',
                'namalengkaplaki' => 'required',
                'namalaki' => 'required',
                'namabapaklaki' => 'required',
                'namaibulaki' => 'required',
                'urutananak_laki' => 'required',
                'instagram_laki' => 'required',

                'fotoperempuan' => 'mimes:jpeg,png',
                'namalengkapperempuan' => 'required',
                'namaperempuan' => 'required',
                'namabapakperempuan' => 'required',
                'namaibuperempuan' => 'required',
                'urutananak_perempuan' => 'required',
                'instagram_perempuan' => 'required',
            ]);
            $fileName = $request->fotolakibefore;
            $path = public_path('images/mempelai/laki/');

            if ($request->hasFile('fotolaki') && $request->file('fotolaki')->isValid()) {
                if (file_exists($path . $fileName)) {
                    unlink($path .  $fileName);
                }
                $file = $request->file('fotolaki');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path,  $fileName);
            }

            $fileName2 = $request->fotoperempuanbefore;
            $path2 = public_path('images/mempelai/perempuan/');
            if ($request->hasFile('fotoperempuan') && $request->file('fotoperempuan')->isValid()) {
                if (file_exists($path2 . $fileName2)) {
                    unlink($path2 .  $fileName2);
                }
                $file2 = $request->file('fotoperempuan');
                $fileName2 = time() . '_' . $file2->getClientOriginalName();
                $file2->move($path2,  $fileName2);
            }

            $query = MempelaiModel::where('user_id', $idUser)->update([
                'fotolaki' => $fileName,
                'namalengkaplaki' => $request->namalengkaplaki,
                'namalaki' => $request->namalaki,
                'namabapaklaki' => $request->namabapaklaki,
                'namaibulaki' => $request->namaibulaki,
                'urutananak_laki' => $request->urutananak_laki,
                'instagram_laki' => $request->instagram_laki,

                'fotoperempuan' => $fileName2,
                'namalengkapperempuan' => $request->namalengkapperempuan,
                'namaperempuan' => $request->namaperempuan,
                'namabapakperempuan' => $request->namabapakperempuan,
                'namaibuperempuan' => $request->namaibuperempuan,
                'urutananak_perempuan' => $request->urutananak_perempuan,
                'instagram_perempuan' => $request->instagram_perempuan,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        } else {
            $request->validate([
                'fotolaki' => 'required|mimes:jpeg,png',
                'namalengkaplaki' => 'required',
                'namalaki' => 'required',
                'namabapaklaki' => 'required',
                'namaibulaki' => 'required',
                'urutananak_laki' => 'required',
                'instagram_laki' => 'required',

                'fotoperempuan' => 'required|mimes:jpeg,png',
                'namalengkapperempuan' => 'required',
                'namaperempuan' => 'required',
                'namabapakperempuan' => 'required',
                'namaibuperempuan' => 'required',
                'urutananak_perempuan' => 'required',
                'instagram_perempuan' => 'required',
            ]);
            $path = public_path('images/mempelai/laki');
            if ($request->hasFile('fotolaki') && $request->file('fotolaki')->isValid()) {
                $file = $request->file('fotolaki');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path,  $fileName);
            }
            $path2 = public_path('images/mempelai/perempuan');
            if ($request->hasFile('fotoperempuan') && $request->file('fotoperempuan')->isValid()) {
                $file2 = $request->file('fotoperempuan');
                $fileName2 = time() . '_' . $file2->getClientOriginalName();
                $file2->move($path2,  $fileName2);
            }
            $query = MempelaiModel::create([
                'user_id' => $idUser,
                'fotolaki' => $fileName,
                'namalengkaplaki' => $request->namalengkaplaki,
                'namalaki' => $request->namalaki,
                'namabapaklaki' => $request->namabapaklaki,
                'namaibulaki' => $request->namaibulaki,
                'urutananak_laki' => $request->urutananak_laki,
                'instagram_laki' => $request->instagram_laki,

                'fotoperempuan' => $fileName2,
                'namalengkapperempuan' => $request->namalengkapperempuan,
                'namaperempuan' => $request->namaperempuan,
                'namabapakperempuan' => $request->namabapakperempuan,
                'namaibuperempuan' => $request->namaibuperempuan,
                'urutananak_perempuan' => $request->urutananak_perempuan,
                'instagram_perempuan' => $request->instagram_perempuan,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
