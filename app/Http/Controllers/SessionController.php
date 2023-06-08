<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    function index(){
        return view("sesi/login");
    }
    function login(Request $request){

        $request->input('email');
        $request->input('password');

        $request->validate([
            'email' => 'required',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            if(Auth::User()->status_user == 1){
                $redirectUrl = 'home';
                if(Auth::User()->role_id == 1){
                    $redirectUrl = 'dashboard';
                }else if(Auth::User()->role_id == 2){
                    $redirectUrl = 'pengawas';
                }else if(Auth::User()->role_id == 3){
                    $redirectUrl = 'anggota';
                };
                return response()->json(['status' => 1, 'redirectUrl' => $redirectUrl]);
            }else{
                $errorMessage = '<span class="span-text-2">Nama pengguna belum dikonfirmasi</span><span> mohon hubungi pihak Koperasi.</span>';
                return response()->json(['status' => 0, 'error' => $errorMessage]);
            }
        }else{
            $errorMessage = '<span class="span-text-1">Nama pengguna atau kata sandi salah.</span>';
            return response()->json(['status' => 0, 'error' => $errorMessage]);
        }

    }

    function logout(Request $request){
        Auth::logout();
        return redirect('home');
    }

    function create(Request $request){
        
        $request->input('nama');
        $request->input('email');
        $request->input('no_ktp');
        $request->input('masa_berlaku_ktp');
        $request->input('jenis_kelamin');
        $request->input('tempat_lahir');
        $request->input('alamat_ktp');
        $request->input('alamat_tak_sesuai_ktp');
        $request->input('no_telepon');
        $request->input('no_telepon_rumah');
        $request->input('status_tempat_tinggal');
        $request->input('menempati_sejak');
        $request->input('pendidikan_terakhir');
        $request->input('status_perkawinan');
        $request->input('nama_pasangan');
        $request->input('jumlah_anak');
        $request->input('nama_ibu_kandung');
        $request->input('npwp_pribadi');
        $request->input('nama_ahli_waris');
        $request->input('hub_ahli_waris');
        $request->input('no_telp_ext_kantor');
        $request->input('nik');
        $request->input('no_rek_bni');
        $request->input('jabatan');
        $request->input('tgl_masuk_perusahaan');
        $request->input('status_karyawan');

        $validator = $request->validate([
            'nama' => 'required',
            'email'=>'required|email',
            'no_ktp' => 'required',
            'masa_berlaku_ktp' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'alamat_ktp' => 'required',
            'alamat_tak_sesuai_ktp' => 'required',
            'no_telepon' => 'required',
            'no_telepon_rumah' => 'required',
            'status_tempat_tinggal' => 'required',
            'menempati_sejak' => 'required',
            'pendidikan_terakhir' => 'required',
            'status_perkawinan' => 'required',
            'nama_ibu_kandung' => 'required',
            'npwp_pribadi' => 'required',
            'nama_ahli_waris' => 'required',
            'no_telp_ext_kantor' => 'required',
            'hub_ahli_waris' => 'required',
            'nik' => 'required',
            'no_rek_bni' => 'required',
            'jabatan' => 'required',
            'tgl_masuk_perusahaan' => 'required',
            'status_karyawan' => 'required',
        ]);

        // if($request->nama){

        $user = new User([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_ktp' => $request->no_ktp,
            'masa_berlaku_ktp' => $request->masa_berlaku_ktp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_tanggal_lahir' => $request->tempat_lahir,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat' => $request->alamat_tak_sesuai_ktp,
            'no_telp' => $request->no_telepon,
            'no_telp_rumah' => $request->no_telepon_rumah,
            'status_tempat_tinggal' => $request->status_tempat_tinggal,
            'tinggal_sejak' => $request->menempati_sejak,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'status_kawin' => $request->status_perkawinan,
            'nama_pasangan' => $request->nama_pasangan,
            'jumlah_anak' => $request->jumlah_anak,
            'npwp_pribadi' => $request->npwp_pribadi,
            'nama_ahli_waris' => $request->nama_ahli_waris,
            'hubungan_ahli_waris' => $request->hub_ahli_waris,
            'no_telp_kantor' => $request->no_telp_ext_kantor,
            'nik' => $request->nik,
            'no_rek' => $request->no_rek_bni,
            'jabatan' => $request->jabatan,
            'tgl_mulai_bekerja' => $request->tgl_masuk_perusahaan,
            'status_karyawan' => $request->status_karyawan,
            'password' => Hash::make('123456'),
            'role_id' => '3',
            'status_anggota' => '0',
            'status_user' => '0',
        ]);
        $user->save(); 
        
        $errorMessage = '<span>Suksess.</span>';
        return response()->json(['status' => 0, 'error' => $errorMessage]);

 
    }
}
