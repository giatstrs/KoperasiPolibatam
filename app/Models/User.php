<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama', 'no_anggota', 'tgl_bergabung', 'no_ktp', 'masa_berlaku_ktp', 'jenis_kelamin', 'tempat_tanggal_lahir', 'alamat_ktp', 'alamat', 'no_telp', 'no_telp_rumah',
        'status_tempat_tinggal', 'tinggal_sejak', 'pendidikan_terakhir', 'status_kawin', 'nama_pasangan', 'jumlah_anak', 'nama_ibu_kandung', 'npwp_pribadi', 'nama_ahli_waris',
        'hubungan_ahli_waris', 'no_telp_kantor', 'nik', 'no_rek', 'jabatan', 'tgl_mulai_bekerja', 'status_karyawan','role_id','email','password','status_user','status_anggota','nama_ibu_kandung',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
