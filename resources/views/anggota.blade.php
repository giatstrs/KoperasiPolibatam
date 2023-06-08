<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>       
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Mahasiswa</title>
</head>
<body>
    <div id="nav" class="nav-info close">
        <div class="nav-item">
            <i class="fa-solid fa-wheat-awn"></i>
            <span>Koperasi Polibatam</span>
        </div>
        <div id="data" class="data animate__animated ">
            <div class="left-data">
                <div class="left-data-upper">
                    <div class="profile">
                        <img src="image/profil.webp" alt="">
                    </div>
                    <div class="profile-info">
                        <span>{{ Auth()->User()->nama }}</span>
                        <span>No : {{ Auth()->User()->no_anggota }}</span>
                        <div class="state">
                            <i class="fa-solid fa-toggle-on active"></i>
                            <span>Active</span>
                            <!-- <i class="fa-solid fa-toggle-off inactive"></i>
                            <span>Inactive/span> -->
                        </div>
                    </div>
                </div>
                <div class="left-data-lower">
                    <h3>Data Pribadi</h3>
                    <div class="general-info">
                        <span>Email</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->email }}</span>
                    </div>
                    <div class="general-info">
                        <span>Tanggal bergabung</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->tanggal_bergabung }}</span>
                    </div>
                    <div class="general-info">
                        <span>No KTP</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->no_ktp }}</span>
                    </div>
                    <div class="general-info">
                        <span>Masa Berlaku KTP</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->masa_berlaku_ktp }}</span>
                    </div>
                    <div class="general-info">
                        <span>Jenis Kelamin</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->jenis_kelamin }}</span>
                    </div>
                    <div class="general-info">
                        <span>Tempat &amp; Tgl. Lahir</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->tempat_tanggal_lahir }}</span>
                    </div>
                    <div class="general-info">
                        <span>Alamat(sesuai KTP)</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->alamat_ktp }}</span>
                    </div>
                    <div class="spesial-general-info">
                        <div>
                            <span>Alamat Tempat tinggal</span>
                            <span>(jika tidak sesuai KTP)</span>
                        </div>
                        <span class="line-1">:</span>
                        <span class="line-2">{{ Auth()->User()->alamat }}</span>
                    </div>
                    <div class="general-info">
                        <span>No. Telepon</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->no_telp }}</span>
                    </div>
                    <div class="general-info">
                        <span>No. Telepon Rumah</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->no_telp_rumah }}</span>
                    </div>
                    <div class="general-info">
                        <span>Status Tempat Tinggal</span>
                        <span>:</span>
                        <span>{{ Auth()->User()->status_tempat_tinggal }}</span>
                    </div>
                                      
                </div>
            </div>
            <div class="middle-data">
                <div class="general-info">
                    <span>Menempati Alamat Sejak</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->tinggal_sejak }}</span>
                </div> 
                <div class="general-info">
                    <span>Pendidikan Terakhir</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->pendidikan_terakhir }}</span>
                </div>
                <div class="general-info">
                    <span>Status Perkawinan</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->status_kawin }}</span>
                </div>
                <div class="general-info">
                    <span>Nama Istri/Suami</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->nama_pasangan }}</span>
                </div>
                <div class="general-info">
                    <span>Jumlah Anak</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->jumlah_anak }}</span>
                </div>
                <div class="general-info">
                    <span>Nama Ibu Kandung</span>
                    <span class="line-1">:</span>
                    <span class="line-2">{{ Auth()->User()->nama_ibu_kandung }}</span>
                </div>
                <div class="general-info">
                    <span>NPWP Pribadi</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->npwp_pribadi }}</span>
                </div>
                <div class="general-info">
                    <span>Nama Ahli Waris</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->nama_ahli_waris }}</span>
                </div>
                <div class="general-info">
                    <span>Hubungan Ahli Waris</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->hubungan_ahli_waris }}</span>
                </div>
                <h3>Data Pekerjaan</h3>
                <div class="general-info">
                    <span>No. Telp ext Kantor</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->no_telp_kantor }}</span>
                </div>
                <div class="general-info">
                    <span>N.I.K</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->nik }}</span>
                </div>
                <div class="general-info">
                    <span>Nomor Rekening BNI 46</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->no_rek }}</span>
                </div>
                <div class="general-info">
                    <span>Divisi/Bagian/Jabatan</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->jabatan }}</span>
                </div>
                <div class="general-info">
                    <span>Tgl. Masuk ke Perusahaan</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->tgl_mulai_bekerja }}</span>
                </div>
                <div class="general-info">
                    <span>Status Karyawan</span>
                    <span>:</span>
                    <span>{{ Auth()->User()->status_karyawan }}</span>
                </div>
            </div>
            <div class="right-data">
                <h3>Tanda Tangan</h3>
                <img src="image/ttd.png" alt="">
                <div class="note">
                    <span>Catatan :</span>
                    <span>
                        <i>Bersedia membayar Simpanan Pokok sebesar Rp. 100,000,- dan memenuhi semua ketentuan yang tertera dalam 
                        Anggaran Dasar, Anggaran Rumah Tangga, Peraturan Khusus dan kebijakan-kebijakan lainnya yang ada di koperasi polibatam</i>
                    </span>
                    <span>
                        Regards - KPB Polibatam
                    </span>
                </div>
                <div>
                    <button class="butt-bantuan" name="bantuan" id="bantuan">
                        <i class="fa-solid fa-inbox"></i>
                        <span>Bantuan</span>
                    </button>
                </div>
            </div>
        </div>
        <div id="menu" class="drop-menu">
            <i id="toggle" class="fa-solid fa-chevron-down toggle"></i>
        </div>
    </div>
    <div id="container" class="container">
        <div class="header">
            <div class="info-profile">
                <img src="image/profil.webp" alt="">
                <div class="more-info">
                    <span>{{ Auth()->User()->nama }}</span>
                    <span>No : {{ Auth()->User()->no_anggota }}</span>
                    <button class="log-out" id="log-out" type="button" >
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log Out</span>
                    </button>
                    
                </div>
            </div>
            <div class="info-tabungan">
                <div class="saldo">
                    <span>Simpanan Per bulan :</span>
                    <span>Rp 100.000,00</span>
                </div>
                <div class="saldo">
                    <span>Lama Bergabung :</span>
                    <span>40 Bulan</span>
                </div>
                <div class="saldo">
                    <span>Saldo Per 27-03-2023 :</span>
                    <span>Rp 4.000.000,00</span>
                </div>
                <div class="saldo">
                    <span>Pinjaman :</span>
                    <button type="button" id="btn_info" class="btn_info">Info</button>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="title">
                <h3>Riwayat Tabungan</h3>
            </div>
            <div class="info-tabel">

            </div>
        </div>
    </div>

    <!-- Modal log out -->
    <div class="modal-keluar" id="modal-keluar">
        <div id="modal-content-keluar" class="modal-content-keluar">
            <div>
                <div class="header_modal">
                    <span>Pesan Konfirmasi</span>
                </div>
                <div class="pesan">
                    <span>Anda yakin ingin meninggalkan halaman?</span>
                </div>
            </div>
            <div class="footer_modal">
                <button type="button" class="btn_close" id="btn-close">
                    <span>Batalkan</span>
                </button>
                <button type="button" class="btn_keluar" id="btn-keluar" onclick="getElementById('logout').submit();">
                    <span>Yakin</span>
                </button>
                <form action="home/logout" id="logout" method="post">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Pinjaman -->
    <div class="modal-pinjaman" id="modal-pinjaman">
        <div id="modal-content-pinjaman" class="modal-content-pinjaman">
            <div class="main-content-pinjaman">
                <div class="header_pinjaman">
                    <span>Ajukan Pinjaman</span>
                </div>
                <div class="content_pinjaman">
                    <div class="info-pribadi">
                        <div class="info-left">
                            <div class="input-peminjaman">
                                <span>Nama Pemohon</span>
                                <span>:</span>
                                <input class="form-control form-input-data" type="text" value="{{ Auth()->User()->nama }}" name="nama_pemohon" id="" disabled>
                            </div>
                            
                            <div class="input-peminjaman">
                                <span>Jenis Pinjaman</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select name="jenis_pinjaman" id="jenis_pinjaman">
                                        <option hidden>Pilih Jenis Pinjaman</option>
                                        <option value="1">Pinjaman Mendesak</option>
                                        <option value="2">Pinjaman Biasa</option>
                                        <option value="3">Pinjaman Khusus</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="info-right">
                            <div class="input-peminjaman">
                                <span>No Anggota</span>
                                <span>:</span>
                                <input class="form-control form-input-data" value="{{ Auth()->User()->no_anggota }}" type="text" name="no_anggota" id="" disabled>
                            </div>
                            <div class="input-peminjaman">
                                <span>No KTP</span>
                                <span>:</span>
                                <input class="form-control form-input-data"  value="{{ Auth()->User()->no_ktp }}" type="text" name="nik" id="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="info-peminjaman peminjaman-home" id="peminjaman-home">
                        <img src="image/poli.jpg" alt="" >
                        <span>Pilih Pinjaman yang anda butuhkan</span>
                    </div>
                    <div class="info-peminjaman peminjaman-urgent" id="peminjaman-urgent">
                        <div class="title-pinjaman">
                            <span><b>Pinjaman Mendesak(Urgent)</b></span>
                        </div>
                        <div class="pesan-catatan">
                            <div class="pesan-text">
                                <span>1. </span>
                                <span>Tidak dikenakan <b><i>biaya apapun (bebas biaya admin dan bunga)</i></b></span>
                            </div>
                            <div class="pesan-text">
                                <span>2. </span>
                                <span>Pinjaman ini untuk <b>(Pilih salah satu)</b>:</span>
                            </div>
                            <div class="pesan-text pesan-radio">
                                <div class="alasan-pinjam">
                                    <input type="radio" name="alasan_pinjam" >
                                    <span>Kematian keluarga (Suami/Istri/Anak Kandung/Orang Tua Kandung/Mertua)</span>
                                </div>
                                <div class="alasan-pinjam">
                                    <input type="radio" name="alasan_pinjam">
                                    <span>Rawat inap 3 hari atau lebih (Suami/Istri/Anak Kandung)</span>
                                </div>
                                <div class="alasan-pinjam">
                                    <input type="radio" name="alasan_pinjam">
                                    <span>Rawat inap karena mendapat musibah kecelakaan lalu lintas yang serius (Suami/Istri/Anak Kandung)</span>
                                </div>
                            </div>
                            <div class="pesan-text">
                                <span>3. </span>
                                <span>Data pendukung berupa kuitansi asli dari rumah sakit atau surat keterangan kematian dari RT/RW serta fotokopi kartu keluarga harus diserahkan kepada  KPb paling lambat 5 hari setelah masuk kerja.</span>
                            </div>
                            <div class="pesan-text">
                                <span>4. </span>
                                <span>Apabila ketentuan pada item <b>no.3</b> tidak dipenuhi, maka secara otomatis bantuan ini dianggap pinjaman normal</span>
                            </div>
                        </div>
                        <div class="bottom-pengajuan">
                            <div class="left-pengajuan">
                                <div class="input-pengajuan">
                                    <span>Nominal Pinjaman</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="nominal_pinjaman_urgent" id="nominal_pinjaman_urgent">
                                </div>
                                <div class="input-pengajuan">
                                    <span>Jumlah Bulan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-bulan" type="number" name="jlh_bulan_urgent" id="jlh_bulan_urgent">
                                    <span class="bulan">Bulan</span>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Angsuran Per Bulan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="angsuran_urgent" id="angsuran_urgent" disabled>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Alamat Email</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="text" name="email_urgent" id="email_urgent">
                                </div>
                                <div class="input-pengajuan">
                                    <span>No Rek Pencairan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="bagian_urgent" id="bagian_urgent">
                                </div>
                            </div>
                            <div class="right-pengajuan">
                                <div class="input-pengajuan">
                                    <span>File Pendukung</span>
                                    <span>:</span>
                                    <input class="form-control form-input-file" type="file">
                                </div>    
                                <div class="input-pengajuan">
                                    <textarea name="alasan_urgent" id="alasan_urgent" class="form-control form-textarea-data alasan_urgent" placeholder="Alasan Peminjaman" required></textarea>
                                </div>                           
                            </div>
                        </div>    
                    </div>
                    <div class="info-peminjaman peminjaman-biasa" id="peminjaman-biasa">
                        <div class="title-pinjaman">
                            <span><b>Pinjaman Konsumtif Biasa</b></span>
                        </div>
                        <div class="pesan-catatan">
                            <div class="pesan-text">
                                <span>1. </span>
                                <span>Formulir ini ditujukan untuk pinjaman  3jt s/d 10 juta yang akan diangsur maksimal 2 tahun</span>
                            </div>
                            <div class="pesan-text">
                                <span>2. </span>
                                <span>Formulir ini wajib dilengkapi dengan ijazah asli dan transkrip nilai asli.</span>
                            </div>
                        </div>
                        <div class="bottom-pengajuan">
                            <div class="left-pengajuan">
                                <div class="input-pengajuan">
                                    <span>Nominal Pinjaman</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="nominal_pinjaman_biasa" id="nominal_pinjaman_biasa">
                                </div>
                                <div class="input-pengajuan">
                                    <span>Jumlah Bulan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-bulan" type="number" name="jlh_bulan_biasa" id="jlh_bulan_biasa">
                                    <span class="bulan">Bulan</span>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Angsuran Per Bulan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="angsuran_biasa" id="angsuran_biasa" disabled>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Alamat Email</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" value="{{ Auth()->User()->email }}" type="text" name="email_biasa" id="email_biasa">
                                </div>
                                <div class="input-pengajuan">
                                    <span>No Rek Pencairan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" value="{{ Auth()->User()->no_rek }}" type="number" name="bagian_biasa" id="bagian_biasa">
                                </div>
                                <div class="input-pengajuan">
                                    <span>Transkip Nilai</span>
                                    <span>:</span>
                                    <input class="form-control form-input-file" type="file">
                                </div>  
                                <div class="input-pengajuan">
                                    <span>Ijazah</span>
                                    <span>:</span>
                                    <input class="form-control form-input-file" type="file">
                                </div>  
                                
                            </div>
                            <div class="right-pengajuan">
                                <div class="input-pengajuan">
                                    <span>Bunga(0,9%)</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="bunga_biasa" id="bunga_biasa" disabled>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Biaya Admin(2%)</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="biaya_admin_biasa" id="biaya_admin_biasa" disabled>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Total Pencairan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="total_pencairan_biasa" id="total_pencairan_biasa" disabled>
                                </div>  
                                <div class="input-pengajuan">
                                    <textarea name="alasan_biasa" id="alasan_biasa" class="form-control form-textarea-data alasan_biasa" placeholder="Alasan Peminjaman" required></textarea>
                                </div>                           
                            </div>
                        </div> 
                    </div>
                    <div class="info-peminjaman peminjaman-khusus" id="peminjaman-khusus">
                        <div class="title-pinjaman">
                            <span><b>Pinjaman Konsumtif Khusus</b></span>
                        </div>
                        <div class="pesan-catatan">
                            <div class="pesan-text">
                                <span>1. </span>
                                <span>Formulir ini ditujukan untuk pinjaman >10 s/d 300 juta (sesuai kondisi kas KPB) yang akan diangsur maksimal 72 bulan</span>
                            </div>
                            <div class="pesan-text">
                                <span>2. </span>
                                <span>Formulir ini wajib dilengkapi dengan ijazah asli dan transkrip nilai asli serta jaminan lain yang senilai dengan besaran pinjaman (misalnya BPKB motor/mobil, dan sebagainya).</span>
                            </div>
                        </div>
                        <div class="bottom-pengajuan">
                            <div class="left-pengajuan">
                                <div class="input-pengajuan">
                                    <span>Nominal Pinjaman</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="nominal_pinjaman_khusus" id="nominal_pinjaman_khusus">
                                </div>
                                <div class="input-pengajuan">
                                    <span>Jumlah Bulan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-bulan" type="number" name="jlh_bulan_khusus" id="jlh_bulan_khusus">
                                    <span class="bulan">Bulan</span>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Alamat Email</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="text" value="{{ Auth()->User()->email }}" name="email_khusus" id="email_khusus">
                                </div>
                                <div class="input-pengajuan">
                                    <span>No Rek Pencairan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" value="{{ Auth()->User()->no_rek }}" name="bagian_khusus" id="bagian_khusus">
                                </div>
                                <div class="input-pengajuan">
                                    <span>Transkip Nilai</span>
                                    <span>:</span>
                                    <input class="form-control form-input-file" type="file">
                                </div>  
                                <div class="input-pengajuan">
                                    <span>Ijazah</span>
                                    <span>:</span>
                                    <input class="form-control form-input-file" type="file">
                                </div>  
                                <div class="input-pengajuan">
                                    <span>Jaminan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-file" type="file">
                                </div>  
                            </div>
                            <div class="right-pengajuan">
                                <div class="input-pengajuan">
                                    <span>Angsuran Per Bulan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="angsuran_khusus" id="angsuran_khusus" disabled>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Bunga(0,9%)</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="bunga_khusus" id="bunga_khusus" disabled>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Biaya Admin(2%)</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="biaya_admin_khusus" id="biaya_admin_khusus" disabled>
                                </div>
                                <div class="input-pengajuan">
                                    <span>Total Pencairan</span>
                                    <span>:</span>
                                    <input class="form-control form-input-pengajuan" type="number" name="total_pencairan_khusus" id="total_pencairan_khusus" disabled>
                                </div>  
                                <div class="input-pengajuan">
                                    <textarea name="alasan_khusus" id="alasan_khusus" class="form-control form-textarea-data alasan_khusus" placeholder="Alasan Peminjaman" required></textarea>
                                </div>                           
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="footer_pinjaman">
                <button type="button" class="btn_tutup_pinjaman" id="btn-tutup-pinjaman">
                    <span>Tutup</span>
                </button>
                <button type="button" class="btn_ajukan_pinjaman" id="btn-ajukan-pinjaman">
                    <span>Ajukan</span>
                </button>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" >

        jumlah_bulan_urgent = document.getElementById("jlh_bulan_urgent")
        nominal_pinjaman_urgent = document.getElementById("nominal_pinjaman_urgent")
        angsuran_urgent = document.getElementById("angsuran_urgent")

        jumlah_bulan_urgent.addEventListener("focusout",()=>{
            if(jumlah_bulan_urgent.value > 12){
                jumlah_bulan_urgent.value = 12
            }
            if(nominal_pinjaman_urgent.value > 0 && jumlah_bulan_urgent.value > 0){
                angsuran_urgent.value = nominal_pinjaman_urgent.value / jumlah_bulan_urgent.value
            }   
        })
        nominal_pinjaman_urgent.addEventListener("focusout",()=>{
            if(nominal_pinjaman_urgent.value > 3000000){
                nominal_pinjaman_urgent.value = 3000000;
            }
            if(nominal_pinjaman_urgent.value > 0 && jumlah_bulan_urgent.value > 0){
                angsuran_urgent.value = nominal_pinjaman_urgent.value / jumlah_bulan_urgent.value
            }   
        })

        jumlah_bulan_biasa = document.getElementById("jlh_bulan_biasa")
        nominal_pinjaman_biasa = document.getElementById("nominal_pinjaman_biasa")
        angsuran_biasa = document.getElementById("angsuran_biasa")
        total_pencairan_biasa = document.getElementById("total_pencairan_biasa")
        biaya_admin_biasa = document.getElementById("biaya_admin_biasa")
        bunga_biasa = document.getElementById("bunga_biasa")


        jumlah_bulan_biasa.addEventListener("focusout",()=>{
            if(jumlah_bulan_biasa.value > 24){
                jumlah_bulan_biasa.value = 24
            }
            if(nominal_pinjaman_biasa.value > 0 && jumlah_bulan_biasa.value > 0){
                let total = nominal_pinjaman_biasa.value / jumlah_bulan_biasa.value
                let bunga = (0.9/100) * total
                bunga_biasa.value = bunga
                angsuran_biasa.value = total + bunga
            }   
        })
        nominal_pinjaman_biasa.addEventListener("focusout",()=>{
            if(nominal_pinjaman_biasa.value < 3000000){
                nominal_pinjaman_biasa.value = 3000000;
            }else if(nominal_pinjaman_biasa.value > 10000000){
                nominal_pinjaman_biasa.value = 10000000;
            }
            if(nominal_pinjaman_biasa.value > 0 && jumlah_bulan_biasa.value > 0){
                let total = nominal_pinjaman_biasa.value / jumlah_bulan_biasa.value
                let bunga = (0.9/100) * total
                bunga_biasa.value = bunga
                angsuran_biasa.value = total + bunga
            }  
            if(nominal_pinjaman_biasa.value > 0){
                total_pencairan_biasa.value = (49/50) *  nominal_pinjaman_biasa.value
                biaya_admin_biasa.value = (1/50) *  nominal_pinjaman_biasa.value
            }  
        })

        jumlah_bulan_khusus = document.getElementById("jlh_bulan_khusus")
        nominal_pinjaman_khusus = document.getElementById("nominal_pinjaman_khusus")
        angsuran_khusus = document.getElementById("angsuran_khusus")
        total_pencairan_khusus = document.getElementById("total_pencairan_khusus")
        biaya_admin_khusus = document.getElementById("biaya_admin_khusus")
        bunga_khusus = document.getElementById("bunga_khusus")

        jumlah_bulan_khusus.addEventListener("focusout",()=>{
            if(jumlah_bulan_khusus.value > 72){
                jumlah_bulan_khusus.value = 72
            }
            if(nominal_pinjaman_khusus.value > 0 && jumlah_bulan_khusus.value > 0){
                let total = nominal_pinjaman_khusus.value / jumlah_bulan_khusus.value
                let bunga = (0.9/100) * total
                bunga_khusus.value = bunga
                angsuran_khusus.value = total + bunga
            }   
        })
        nominal_pinjaman_khusus.addEventListener("focusout",()=>{
            if(nominal_pinjaman_khusus.value < 10000000){
                nominal_pinjaman_khusus.value = 10000000;
            }else if(nominal_pinjaman_khusus.value > 300000000){
                nominal_pinjaman_khusus.value = 300000000;
            }
            if(nominal_pinjaman_khusus.value > 0 && jumlah_bulan_khusus.value > 0){
                let total = nominal_pinjaman_khusus.value / jumlah_bulan_khusus.value
                let bunga = (0.9/100) * total
                bunga_khusus.value = bunga
                angsuran_khusus.value = total + bunga
            }  
            if(nominal_pinjaman_khusus.value > 0){
                total_pencairan_khusus.value = (49/50) *  nominal_pinjaman_khusus.value
                biaya_admin_khusus.value = (1/50) *  nominal_pinjaman_khusus.value
            }  
        })

        pinjaman_urgent = document.getElementById("peminjaman-urgent")
        pinjaman_biasa = document.getElementById("peminjaman-biasa")
        pinjaman_khusus = document.getElementById("peminjaman-khusus")
        pinjaman_home = document.getElementById("peminjaman-home")

        jenis_pinjaman = document.getElementById("jenis_pinjaman");

        jenis_pinjaman.addEventListener("change",(e)=>{
            // alert(jenis_pinjaman.value)
            if(jenis_pinjaman.value == '1'){
                pinjaman_urgent.style.display = 'flex';
                pinjaman_biasa.style.display = 'none';
                pinjaman_khusus.style.display = 'none';
                pinjaman_home.style.display = 'none';
1            }else if(jenis_pinjaman.value == '2'){
                pinjaman_urgent.style.display = 'none';
                pinjaman_biasa.style.display = 'flex';
                pinjaman_khusus.style.display = 'none';
                pinjaman_home.style.display = 'none';
            }else if(jenis_pinjaman.value == '3'){
                pinjaman_urgent.style.display = 'none';
                pinjaman_biasa.style.display = 'none';
                pinjaman_khusus.style.display = 'flex';
                pinjaman_home.style.display = 'none';
            }
        })

        let butt_submit = document.getElementById("btn-ajukan-pinjaman");
            
        butt_submit.addEventListener("click",()=>{
            if(jenis_pinjaman.value == '1'){
                let inputs = form_tunggal.querySelectorAll('input, select, textarea');  

            }else if(jenis_pinjaman.value == '2'){

            }else if(jenis_pinjaman.value == '3'){

            }
        })

    </script>
</body>
</html>