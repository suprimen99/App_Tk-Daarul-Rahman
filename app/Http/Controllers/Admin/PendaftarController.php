<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Middleware\siswa as MiddlewareSiswa;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


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
        //
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
        $siswa = Siswa::find($id);
        return response()->json([
            'status' => 200,
            'data' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_siswa' => 'required',
                'foto' => 'nullable|image|mimes:png,jpg,jpeg',
                'usia' => 'required',
                'alamat' => 'required',
                'jeniskelamin' => '',
                'notelpon' => 'required',
                'akte' => 'required',
                'nik' => 'required',
                'status' => '',
                'kelas' => '',
                'nama_orangtua' => '',
                'user_id' => '',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }

        $siswa = Siswa::findOrFail($id);

        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->usia = $request->usia;
        $siswa->jeniskelamin = $request->jeniskelamin;
        $siswa->notelpon = $request->notelpon;
        $siswa->akte = $request->akte;
        $siswa->alamat = $request->alamat;
        $siswa->nik = $request->nik;
        $siswa->nama_orangtua = $request->nama_orangtua;
        $siswa->kelas = $request->kelas;
        $siswa->status = $request->status;
        $siswa->user_id = $request->user_id;
        $siswa->save();

        return response()->json([
            'status' => 200,
            'message' => 'Data siswa berhasil diperbarui'
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
