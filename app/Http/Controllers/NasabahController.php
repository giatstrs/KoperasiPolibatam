<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';

use App\Http\Controllers\Controller;
use App\Models\nasabah;
use App\Models\simpanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class NasabahController extends Controller
{
    public function index(){

        $data = nasabah::all();
        return view('nasabah',[
            'data' => $data,
        ]);
    }

    public function array(){

        $nasabah = nasabah::where('status_user', 1)
                      ->where('role_id', 3)
                      ->select('nama', 'no_anggota', 'no_ktp', 'email', 'no_telp', 'status_anggota', 'id')
                      ->get()
                      ->toArray();
        return response()->json($nasabah);
        
    }

    public function array_filtered(Request $request){
        $search = $request->input('searchWord');

        $nasabah = nasabah::where('status_user', 1)
                          ->where('role_id', 3)
                          ->where(function ($query) use ($search) {
                                $query->where('nama', 'LIKE', '%'.$search.'%');
                            })
                          ->select('nama', 'no_anggota', 'no_ktp', 'email', 'no_telp', 'status_anggota', 'id')
                          ->get()
                          ->toArray();

        return response()->json($nasabah);
    }
    public function read(Request $request)
    {
        $where = array('id' => $request->input('id'));
        $post = nasabah::where($where)->first(); 

        return response()->json($post);
    }

    public function create(Request $request)
    {
        $request->input('add_nama');
        $request->input('add_email');
        $request->input('add_password');
        $request->input('add_no_ktp');
        $request->input('add_masa_berlaku_ktp');
        $request->input('add_jenis_kelamin');
        $request->input('add_tempat_lahir');
        $request->input('add_alamat_ktp');
        $request->input('add_alamat_tak_sesuai_ktp');
        $request->input('add_no_telepon');
        $request->input('add_no_telepon_rumah');
        $request->input('add_status_tempat_tinggal');
        $request->input('add_menempati_sejak');
        $request->input('add_pendidikan_terakhir');
        $request->input('add_status_perkawinan');
        $request->input('add_nama_pasangan');
        $request->input('add_jumlah_anak');
        $request->input('add_nama_ibu_kandung');
        $request->input('add_npwp_pribadi');
        $request->input('add_nama_ahli_waris');
        $request->input('add_hub_ahli_waris');
        $request->input('add_no_telp_ext_kantor');
        $request->input('add_nik');
        $request->input('add_no_rek_bni');
        $request->input('add_jabatan');
        $request->input('add_tgl_masuk_perusahaan');
        $request->input('add_status_karyawan');

        $validator = $request->validate([
            'add_nama' => 'required',
            'add_email'=>'required|email',
            'add_password'=>'required',
            'add_no_ktp' => 'required',
            'add_masa_berlaku_ktp' => 'required',
            'add_jenis_kelamin' => 'required',
            'add_tempat_lahir' => 'required',
            'add_alamat_ktp' => 'required',
            'add_alamat_tak_sesuai_ktp' => 'required',
            'add_no_telepon' => 'required',
            'add_no_telepon_rumah' => 'required',
            'add_status_tempat_tinggal' => 'required',
            'add_menempati_sejak' => 'required',
            'add_pendidikan_terakhir' => 'required',
            'add_status_perkawinan' => 'required',
            'add_nama_ibu_kandung' => 'required',
            'add_npwp_pribadi' => 'required',
            'add_nama_ahli_waris' => 'required',
            'add_no_telp_ext_kantor' => 'required',
            'add_hub_ahli_waris' => 'required',
            'add_nik' => 'required',
            'add_no_rek_bni' => 'required',
            'add_jabatan' => 'required',
            'add_tgl_masuk_perusahaan' => 'required',
            'add_status_karyawan' => 'required',
        ]);
        $nasabah = new User([
            'nama' => $request->add_nama,
            'email' => $request->add_email,
            'no_ktp' => $request->add_no_ktp,
            'masa_berlaku_ktp' => $request->add_masa_berlaku_ktp,
            'jenis_kelamin' => $request->add_jenis_kelamin,
            'tempat_tanggal_lahir' => $request->add_tempat_lahir,
            'alamat_ktp' => $request->add_alamat_ktp,
            'alamat' => $request->add_alamat_tak_sesuai_ktp,
            'no_telp' => $request->add_no_telepon,
            'no_telp_rumah' => $request->add_no_telepon_rumah,
            'status_tempat_tinggal' => $request->add_status_tempat_tinggal,
            'tinggal_sejak' => $request->add_menempati_sejak,
            'pendidikan_terakhir' => $request->add_pendidikan_terakhir,
            'status_kawin' => $request->add_status_perkawinan,
            'nama_pasangan' => $request->add_nama_pasangan,
            'jumlah_anak' => $request->add_jumlah_anak,
            'npwp_pribadi' => $request->add_npwp_pribadi,
            'nama_ahli_waris' => $request->add_nama_ahli_waris,
            'hubungan_ahli_waris' => $request->add_hub_ahli_waris,
            'no_telp_kantor' => $request->add_no_telp_ext_kantor,
            'nik' => $request->add_nik,
            'no_rek' => $request->add_no_rek_bni,
            'jabatan' => $request->add_jabatan,
            'tgl_mulai_bekerja' => $request->add_tgl_masuk_perusahaan,
            'status_karyawan' => $request->add_status_karyawan,
            'password' => Hash::make($request->add_password),
            'role_id' => '3',
            'status_anggota' => '1',
            'status_user' => '1',
        ]);
        $nasabah->save();

        return response()->json([
            'status' => true,
            'info' => 'Success'
        ], 201);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
    
        $nasabah = User::findOrFail($id);
        
        $nasabah->nama = $request->input('input_nama');
        $nasabah->no_anggota = $request->input('input_no_anggota');
        $nasabah->email = $request->input('input_email');
        $nasabah->no_ktp = $request->input('input_no_ktp');
        $nasabah->masa_berlaku_ktp = $request->input('input_masa_berlaku_ktp');
        $nasabah->jenis_kelamin = $request->input('input_jenis_kelamin');
        $nasabah->tempat_tanggal_lahir = $request->input('input_tempat_lahir');
        $nasabah->alamat_ktp = $request->input('input_alamat_ktp');
        $nasabah->alamat = $request->input('input_alamat_tak_sesuai_ktp');
        $nasabah->no_telp = $request->input('input_no_telepon');
        $nasabah->no_telp_rumah = $request->input('input_no_telepon_rumah');
        $nasabah->status_tempat_tinggal = $request->input('input_status_tempat_tinggal');
        $nasabah->tinggal_sejak = $request->input('input_menempati_sejak');
        $nasabah->pendidikan_terakhir = $request->input('input_pendidikan_terakhir');
        $nasabah->status_kawin = $request->input('input_status_perkawinan');
        $nasabah->nama_pasangan = $request->input('input_nama_pasangan');
        $nasabah->jumlah_anak = $request->input('input_jumlah_anak');
        $nasabah->nama_ibu_kandung = $request->input('input_nama_ibu_kandung');
        $nasabah->npwp_pribadi = $request->input('input_npwp_pribadi');
        $nasabah->nama_ahli_waris = $request->input('input_nama_ahli_waris');
        $nasabah->hubungan_ahli_waris = $request->input('input_hub_ahli_waris');
        $nasabah->no_telp_kantor = $request->input('input_no_telp_ext_kantor');
        $nasabah->nik = $request->input('input_nik');
        $nasabah->no_rek = $request->input('input_no_rek_bni');
        $nasabah->jabatan = $request->input('input_jabatan');
        $nasabah->tgl_mulai_bekerja = $request->input('input_tgl_masuk_perusahaan');
        $nasabah->status_karyawan = $request->input('input_status_karyawan');
        $nasabah->status_anggota = $request->input('input_status_anggota');
        
        $nasabah->save();
        
        return response()->json([
            'status' => true,
            'info' => 'Success'
        ]);
        
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        User::where('id', $id)->delete();
        return response()->json([
            'status' => true,
            'info' => 'Success'
        ]);
    }

    public function simpanan(Request $request){

        $id = $request->input('id');
        $data = DB::table('simpanans')
                ->where('user_id', $id)
                ->get()
                ->toArray(); 

        return response()->json($data);
        
    }

    public function read_file(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $allowed_ext = ['xlsx','xls'];
            $checking = explode(".",$fileName);
            $file_expl = end($checking);
            if(in_array($file_expl,$allowed_ext)){
                $tempPath = $file->getRealPath();
                $spreedsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($tempPath);
                $data = $spreedsheet->getActiveSheet()->toArray();
        
                $tmp = "";
                $rownumber = 0;
                foreach($data as $row){
                    
                    if ($rownumber >= 4){
                        $tmp.="<tr>";
                        $tmp.="<td>".$row['0']."</td>";
                        $tmp.="<td>".$row['1']."</td>";
                        $tmp.="<td>".$row['2']."</td>";
                        $tmp.="<td>".$row['3']."</td>";
                        $tmp.="<td>".$row['4']."</td>";
                        $tmp.="<td>".$row['5']."</td>";
                        $tmp.="<td>".$row['6']."</td>";
                        $tmp.="<td>".$row['7']."</td>";
                        $tmp.="<td>".$row['8']."</td>";
                        $tmp.="<td>".$row['9']."</td>";
                        $tmp.="<td>".$row['10']."</td>";
                        $tmp.="<td>".$row['11']."</td>";
                        $tmp.="<td>".$row['12']."</td>";
                        $tmp.="<td>".$row['13']."</td>";
                        $tmp.="</tr>";
        
                    }
                    $rownumber++;
                }
                return "
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No.&nbsp;Anggota</th>
                            <th>Nama&nbsp;Lengkap</th>
                            <th>Umur</th>
                            <th>L/W</th>
                            <th>Foto&nbsp;Profil</th>
                            <th>Pekerjaan</th>
                            <th>Alamat</th>
                            <th>NIK&nbsp;KTP</th>
                            <th>Email</th>
                            <th>Tanggal&nbsp;Bergabung</th>
                            <th>Tanda&nbsp;Tangan</th>
                            <th>Tanggal&nbsp;Berhenti</th>
                            <th>Sebab&nbsp;Dipecat</th>
                        </tr>
                    </thead>
                    <tbody class='body_tabel'>
                        $tmp
                    </tbody>
                </table>
                    ";

            }else{
                return "<div class='message-error'><span>File yang anda pilih Tidak Valid</span></div>";
            }
        }else{
            return "<div class='message-error'><span>Tidak ada File</span></div>";
        }
    }

    public function delete_simpanan(Request $request)
    {
        $id = $request->input('id');
        $simpanan = simpanan::where('id', $id)->first();
        $user_id = $simpanan->user_id;

        $simpanan->delete();

        return response()->json(['user_id' => $user_id]);

    }
    public function tambah_simpanan(Request $request)
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
}
