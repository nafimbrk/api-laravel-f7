<?php

namespace App\Http\Controllers;

use App\Http\Resources\PegawaiResource;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return response()->json([
            'status' => true,
            'message' => 'berhasil get data',
            'data' => $pegawai
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pegawai = Pegawai::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'berhasil create data',
            'data' => $pegawai
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pegawai = Pegawai::find($id);
        return response()->json([
            'status' => true,
            'message' => 'berhasil show data',
            'data' => $pegawai
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    public function update2(Request $request)
    {
        $pegawai = Pegawai::where('nip', $request->nip);
        $pegawai->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'berhasil update data',
            'data' => $pegawai
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function destroy2(Request $request)
    {
        $pegawai = Pegawai::where('nip', $request->nip);
        $pegawai->delete();
        return response()->json([
            'status' => true,
            'message' => 'berhasil delete data'
        ], 200);
    }
}
