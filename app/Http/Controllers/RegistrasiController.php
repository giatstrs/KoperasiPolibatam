<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nasabah;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index(){

        $data = nasabah::all();
        return view('registrasi',[
            'data' => $data,
        ]);

    }
    public function array_registrasi(Request $request){

        $nasabah = nasabah::where('status_user', 0)
                ->where('role_id', 3)
                ->select('nama','email', 'no_telp', 'id')
                ->get()
                ->toArray();
        return response()->json($nasabah);
    }
    public function confirm(Request $request){
        $id = $request->input('id');
    
        $nasabah = User::findOrFail($id);
        $nasabah->status_user = '1';
        $nasabah->save();
        
        return response()->json([
            'status' => true,
            'info' => 'Success'
        ]);
    }
}
