<?php

namespace App\Http\Controllers;

use App\Models\TemaModel;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master.tema');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_tema' => 'required',
            'url_tema' => 'required',
            'thumbnail_tema' => 'required',
            'jenis' => 'required',
        ]);

        $path = public_path('images/thumbnail-tema/');
        if ($request->hasFile('thumbnail_tema') && $request->file('thumbnail_tema')->isValid()) {
            $file = $request->file('thumbnail_tema');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
        }
        $query = TemaModel::create([
            'nama_tema' => $request->nama_tema,
            'url_tema' => $request->url_tema,
            'thumbnail_tema' => $fileName,
            'jenis' => $request->jenis,
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = TemaModel::where('id', $id)->first();

        return response()->json(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = TemaModel::where('id', $id)->delete();

        if ($query) {
            return response()->json(['success' => true]);
        }
    }

    public function get()
    {
        $data = TemaModel::all();

        return response()->json(compact('data'));
    }

    public function UpdateTema(Request $request, string $id)
    {
        $request->validate([
            'nama_tema_edit' => 'required',
            'url_tema_edit' => 'required',
            'jenis_edit' => 'required',
        ]);

        $fileName = $request->thumbnailbefore_name;
        $path = public_path('images/thumbnail-tema/');
        if ($request->hasFile('thumbnail_tema_edit') && $request->file('thumbnail_tema_edit')->isValid()) {
            if (file_exists($path . $fileName)) {
                unlink($path .  $fileName);
            }
            $file = $request->file('thumbnail_tema_edit');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path,  $fileName);
        }
        $query = TemaModel::where('id', $id)->update([
            'nama_tema' => $request->nama_tema_edit,
            'url_tema' => $request->url_tema_edit,
            'thumbnail_tema' => $fileName,
            'jenis' => $request->jenis_edit,
        ]);

        if ($query) {
            return response()->json(['code' => 1]);
        } else {
            return response()->json(['code' => 0]);
        }
    }
}
