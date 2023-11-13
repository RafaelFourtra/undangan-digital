<?php

namespace App\Http\Controllers;

use App\Models\MusikModel;
use Illuminate\Http\Request;

class MusikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master.musik');
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
        $request->validate([
            'judul' => 'required',
            'penyanyi' => 'required',
            'musik' => 'required|mimetypes:audio/*'
        ]);

        $path = public_path('musik/');
        if ($request->hasFile('musik') && $request->file('musik')->isValid()) {
            $file = $request->file('musik');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
        }

        $query = MusikModel::create([
            'judul' => $request->judul,
            'penyanyi' => $request->penyanyi,
            'musik' => $fileName
        ]);

        if ($query) {
            return response()->json(['code' => 1]);
        } else {
            return response()->json(['code' => 0]);
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
        $query = MusikModel::where('id', $id)->delete();

        if ($query) {
            return response()->json(['success' => true]);
        }
    }

    public function get()
    {
        $data = MusikModel::all();

        return response()->json(compact('data'));
    }
}
