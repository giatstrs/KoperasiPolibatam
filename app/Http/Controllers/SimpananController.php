<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nasabah;
use App\Models\simpanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SimpananController extends Controller
{
    public function index(){

        return view('simpanan', []);
    }

    public function array(){

        $data = DB::table('simpanans')
                ->join('users', 'simpanans.user_id', '=', 'users.id')
                ->select('simpanans.*', 'users.nama')
                ->get()
                ->toArray();
        return response()->json($data);
        
    }

    public function nasabah_array(){

        $nasabah = nasabah::where('status_user', 1)
                      ->where('role_id', 3)
                      ->select('nama','id')
                      ->get()
                      ->toArray();
        return response()->json($nasabah);
        
    }
    public function create(Request $request)
    {
        $request->input('nasabah_id');
        $request->input('jenis');
        $request->input('jumlah');
        $request->input('tanggal');
        $request->input('pengelola');

        $request->validate([
            'jenis'=>'required',
            'jumlah'=> 'required',
            'tanggal'=> 'required',
        ]);
        $simpanan = new simpanan();
        $simpanan->user_id = $request->nasabah_id;
        $simpanan->jenis = $request->jenis;
        $simpanan->kode_transaksi = "KPB-";
        $simpanan->saldo = $request->jumlah;
        $simpanan->tanggal= $request->tanggal;
        $simpanan->pengelola = $request->pengelola;
        $simpanan->save();

        return response()->json([
            'status' => true,
            'info' => 'Success'
        ], 201);
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
        simpanan::where('id', $id)->delete();
        return response()->json([
            'status' => true,
            'info' => 'Success'
        ]);
    }

}
