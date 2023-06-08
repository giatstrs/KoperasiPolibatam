@extends('layout.main')

@section('container')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylenasabah.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <div class="odes-text">Daftar Anggota</div>
    <div class="container mt-4" id="container-odes-text">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="button_tambah" id="tambah" name="tambah">
                            <i class="fa-solid fa-user-plus"></i>            
                            <span>&nbsp;Tambah</span>
                        </button>
                        <div class="search">
                            <i class="uil uil-search"></i>
                            <input spellcheck="false" type="text" id="search_nasabah" placeholder="Search">
                        </div>
                    </div>
                    <div class="card-body" id="card-body">
                        <table id="myTable" class="table table-borderless styled-table" border="0" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>No.&nbsp;Anggota</th>
                                    <th>No.&nbsp;KTP</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="body-table">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal pilihan -->
    <div class="modal_pilihan" id="modal_pilihan">
        <div class="modal_pilihan_content">
            <div class="pilihan_content_card" id="card-data-tunggal">
                <span class="pilihan_content_card_text" >Tambah Anggota</span>
                <i class="fa-solid fa-person fa-2xl icon-person"></i>
                <span class="pilihan_content_card_detail">Data Tunggal</span>
            </div>
            <div class="pilihan_content_card" id="card-data-kelompok">
                <span class="pilihan_content_card_text">Tambah Anggota</span>
                <i class="fa-solid fa-people-group fa-2xl"></i>
                <span class="pilihan_content_card_detail">Data Kelompok</span>
            </div>
        </div>
    </div>

    <!-- modal export file -->
    <div class="modal_export" id="modal_export">
        <div id="" class="modal_content">
            <div class="wrapper">
                <header>Choose Excel File</header>
                <form action="#" id="form" enctype="multipart/form-data" method="post">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <input class="file-input" type="file" id="file" name="file" hidden>
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>Browse File to Upload</p>
                </form>
                <section class="progress-area"></section>
                <section class="uploaded-area"></section>
                <div class="button_wrapper">
                    <button id="remove" class="button_remove" >Remove</button>
                    <button id="load" class="button_load" >Load</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal data kelompok -->
    <div class="modal_data" id="modal_data">
        <div id="" class="modal_content_data">
            <div class="top_modal">
                <span>Daftar Anggota</span>
            </div>
            <div class="context">
                <div class="upper_context">
                    
                </div>
                <div class="lower_context">
                    <button id="cancel" class="button_cancel">Cancel</button>
                    <button id="import" class="button_import">Import</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal data tunggal -->
    <div class="modal_data_tunggal" id="modal_data_tunggal">
        <div id="" class="modal_content_data">
            <div class="top_modal">
                <span>Formulir Daftar Anggota</span>
            </div>
            <div class="context">
                <form id="tambahdatatunggal" method="POST">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="data_form" id="data-detail-anggota">
                        <div class="input-data-left">
                            <div class="input-data">
                                <span>Nama</span>
                                <span>:</span>
                                <input type="text" name="add_nama" id="add_nama" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Email</span>
                                <span>:</span>
                                <input type="email" name="add_email" id="add_email" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Password</span>
                                <span>:</span>
                                <input type="text" name="add_password" id="add_password" class="form-control form-input-data"/>
                            </div>
                            <div class="input-data">
                                <span>No Anggota</span>
                                <span>:</span>
                                <input type="text" name="add_no_anggota" id="add_no_anggota" class="form-control form-input-data"/>
                            </div>
                            <div class="input-data">
                                <span>Nomor KTP</span>
                                <span>:</span>
                                <input type="number" name="add_no_ktp" id="add_no_ktp" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Masa Berlaku KTP</span>
                                <span>:</span>
                                <input type="text" name="add_masa_berlaku_ktp" id="add_masa_berlaku_ktp" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Jenis Kelamin</span>
                                <span>:</span>
                                <input type="radio" name="add_jenis_kelamin" value="laki_laki" required  checked='checked'/>
                                <label for="laki_laki">Laki-Laki</label>
                                <input type="radio" name="add_jenis_kelamin" value="perempuan"/>
                                <label for="perempuan">Perempuan</label>
                            </div>
                            <div class="input-data">
                                <span>Tempat & Tgl Lahir</span>
                                <span>:</span>
                                <input type="text" name="add_tempat_lahir" id="add_tempat_lahir" class="form-control form-input-data" required/>
                            </div>
                            <div class="spesial-input-data">
                                <div>
                                    <span>Alamat Sesuai KTP</span>
                                </div>
                                <span class="line-1">:</span>
                                <textarea name="add_alamat_ktp" id="add_alamat_ktp" class="form-control form-textarea-data" required></textarea>
                            </div>
                            <div class="spesial-input-data">
                                <div>
                                    <span>Alamat Tempat tinggal</span>
                                    <span>(jika tidak sesuai KTP)</span>
                                </div>
                                <span class="line-1">:</span>
                                <textarea name="add_alamat_tak_sesuai_ktp" id="add_alamat_tak_sesuai_ktp" class="form-control form-textarea-data" required></textarea>
                            </div>
                            <div class="input-data">
                                <span>No. Telepon</span>
                                <span>:</span>
                                <input type="number" name="add_no_telepon" id="add_no_telepon" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>No. Telepon Rumah</span>
                                <span>:</span>
                                <input type="number" name="add_no_telepon_rumah" id="add_no_telepon_rumah" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Status Tempat Tinggal</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select name="add_status_tempat_tinggal" id="add_status_tempat_tinggal">
                                        <option hidden>Pilih Status</option>
                                        <option value="milik_pribadi">Milik Pribadi</option>
                                        <option value="milik_orang_tua">Milik Orang Tua</option>
                                        <option value="milik_saudara">Milik Sanak/Saudara</option>
                                        <option value="sewa">Sewa/Kos</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-data-right">
                            <div class="input-data">
                                <span>Menempati Alamat Sejak</span>
                                <span>:</span>
                                <input type="datetime-local" name="add_menempati_sejak" id="add_menempati_sejak" class="form-control form-input-data input-date" required/>
                            </div>
                            <div class="input-data">
                                <span>Pendidikan Terakhir</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="add_pendidikan_terakhir" name="add_pendidikan_terakhir">
                                        <option hidden>Pilih Pendidikan</option>
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma_sederajat">SMA/K Sederajat</option>
                                        <option value="d3">Diploma - D3</option>
                                        <option value="d4">Diploma - D4</option>
                                        <option value="s1">Sarjana - S1</option>
                                        <option value="s2">Sarjana - S2</option>
                                        <option value="s3">Sarjana - S3</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-data">
                                <span>Status Perkawinan</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="add_status_perkawinan" name="add_status_perkawinan">
                                        <option hidden>Pilih Status</option>
                                        <option value="belum_menikah">Belum Menikah</option>
                                        <option value="sudah_menikah">Sudah Menikah</option>
                                        <option value="janda_duda">Janda/Duda</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>                            
                            </div>
                            <div class="input-data">
                                <span>Nama Istri/Suami</span>
                                <span>:</span>
                                <input type="text" name="add_nama_pasangan" id="add_nama_pasangan" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Jumlah Anak</span>
                                <span>:</span>
                                <input type="number" name="add_jumlah_anak" id="add_jumlah_anak" class="form-control form-input-data" required />
                            </div>
                            <div class="input-data">
                                <span>Nama Ibu Kandung</span>
                                <span>:</span>
                                <input type="text" name="add_nama_ibu_kandung" id="add_nama_ibu_kandung" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>NPWP Pribadi</span>
                                <span>:</span>
                                <input type="number" name="add_npwp_pribadi" id="add_npwp_pribadi" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Nama Ahli Waris</span>
                                <span>:</span>
                                <input type="text" name="add_nama_ahli_waris" id="add_nama_ahli_waris" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Hubungan Ahli Waris</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="add_hub_ahli_waris" name="add_hub_ahli_waris">
                                        <option hidden>Pilih Hubungan</option>
                                        <option value="kakek_nenek">Kakek/Nenek</option>
                                        <option value="orang_tua">Orang Tua</option>
                                        <option value="mertua">Mertua</option>
                                        <option value="paman_bibi">Paman/Bibi</option>
                                        <option value="ipar">Ipar</option>
                                        <option value="saudara_kandung">Saudara Kandung</option>
                                        <option value="sepupu">Sepupu</option>
                                        <option value="anak">Anak</option>
                                        <option value="keponakan">Keponakan</option>
                                        <option value="cucu_cicit">Cucu/Cicit</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="input-data">
                                <span>No. Telp ext Kantor</span>
                                <span>:</span>
                                <input type="number" name="add_no_telp_ext_kantor" id="add_no_telp_ext_kantor" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>N.I.K</span>
                                <span>:</span>
                                <input type="text" name="add_nik" id="add_nik" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>No Rekening BNI 46</span>
                                <span>:</span>
                                <input type="number" name="add_no_rek_bni" id="add_no_rek_bni" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Divisi/Bagian/Jabatan</span>
                                <span>:</span>
                                <input type="text" name="add_jabatan" id="add_jabatan" class="form-control form-input-data" required />
                            </div>
                            <div class="input-data">
                                <span>Tanggal Masuk Perusahaan</span>
                                <span>:</span>
                                <input type="datetime-local" name="add_tgl_masuk_perusahaan" id="add_tgl_masuk_perusahaan" class="form-control form-input-data input-date" required/>
                            </div>
                            <div class="input-data">
                                <span>Status Karyawan</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="add_status_karyawan" name="add_status_karyawan" required>
                                        <option hidden>Pilih Status</option>
                                        <option value="pegawai_tetap">Pegawai Tetap</option>
                                        <option value="pegawai_kontrak">Pegawai Kontrak</option>
                                        <option value="pegawai_harian">Pegawai Harian</option>
                                        <option value="training">Masa Training</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="lower_context">
                        <button type="button" id="cancel_data_tunggal" class="button_cancel_data_tunggal">Batalkan</button>
                        <button type="submit" id="confirm_data_tunggal" class="button_confirm_data_tunggal">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal view anggota -->
    <div class="modal_view_anggota" id="modal_view_anggota">
        <div id="" class="modal_content_data">
            <div class="top_modal">
                <span>Detail Informasi</span>
            </div>
            <div class="context">
                <form id="simpanviewdetailanggota">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="detail_data_anggota" id="detail_data_anggota" >
                        <div class="input-data-left">
                            <div class="data-profile">
                                <img src="image/profil.webp" alt="">
                                <img src="image/profil.webp" alt="" class="img-hover" >
                                <div class="data-profile-info">
                                    <span id="view_nama">Nama</span>
                                    <span id="view_no_anggota">No. Anggota</span>
                                    <div class="toggle-switch">
                                        <input class="toggle-input" id="view_status_anggota" type="checkbox" disabled>
                                        <label class="toggle-label" ></label>
                                    </div>
                                </div>
                            </div>
                            <div class="input-data view_data">
                                <span>Email</span>
                                <span>:</span>
                                <span id="view_email">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Password</span>
                                <span>:</span>
                                <span id="view_password">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Tanggal Bergabung</span>
                                <span>:</span>
                                <span id="view_tanggal_bergabung"></span>
                            </div>
                            <div class="input-data view_data">
                                <span>Nomor KTP</span>
                                <span>:</span>
                                <span id="view_no_ktp">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Masa Berlaku KTP</span>
                                <span>:</span>
                                <span id="view_masa_berlaku_ktp">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Jenis Kelamin</span>
                                <span>:</span>
                                <span id="view_jenis_kelamin">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Tempat & Tgl Lahir</span>
                                <span>:</span>
                                <span id="view_tempat_lahir">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Alamat Sesuai KTP</span>
                                <span>:</span>
                                <span id="view_alamat_tinggal_ktp">-</span>
                            </div>
                            <div class="spesial-input-data view_data">
                                <div>
                                    <span>Alamat Tempat tinggal</span>
                                    <span>(jika tidak sesuai KTP)</span>
                                </div>
                                <span class="line-1">:</span>
                                <span class="line-2" id="view_alamat_tinggal">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>No. Telepon</span>
                                <span>:</span>
                                <span id="view_no_telp">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>No. Telepon Rumah</span>
                                <span>:</span>
                                <span id="view_no_telp_rumah">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Status Tempat Tinggal</span>
                                <span>:</span>
                                <span id="view_status_tempat_tinggal">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Menempati Alamat Sejak</span>
                                <span>:</span>
                                <span id="view_menempati_sejak">-</span>
                            </div>
                        </div>
                        <div class="input-data-right">
                            <div class="input-data view_data">
                                <span>Pendidikan Terakhir</span>
                                <span>:</span>
                                <span id="view_pendidikan_terakhir" >-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Status Perkawinan</span>
                                <span>:</span>
                                <span id="view_status_perkawinan">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Nama Istri/Suami</span>
                                <span>:</span>
                                <span id="view_pasangan">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Jumlah Anak</span>
                                <span>:</span>
                                <span id="view_jumlah_anak">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Nama Ibu Kandung</span>
                                <span>:</span>
                                <span id="view_nama_ibu_kandung">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>NPWP Pribadi</span>
                                <span>:</span>
                                <span id="view_npwp_pribadi">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Nama Ahli Waris</span>
                                <span>:</span>
                                <span id="view_nama_ahli_waris">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Hubungan Ahli Waris</span>
                                <span>:</span>
                                <span id="view_hubungan_ahli_waris">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>No. Telp ext Kantor</span>
                                <span>:</span>
                                <span id="view_no_telp_kantor">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>N.I.K</span>
                                <span>:</span>
                                <span id="view_nik">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>No Rekening BNI 46</span>
                                <span>:</span>
                                <span id="view_no_rek_bni">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Divisi/Bagian/Jabatan</span>
                                <span>:</span>
                                <span id="view_divisi">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Tgl Masuk Perusahaan</span>
                                <span>:</span>
                                <span id="view_tgl_masuk_perusahaan">-</span>
                            </div>
                            <div class="input-data view_data">
                                <span>Status Karyawan</span>
                                <span>:</span>
                                <span id="view_status_karyawan">-</span>
                            </div>
                        </div>
                    </div>
                    <div class="form_detail_data_anggota" id="form_detail_data_anggota">
                        <div class="input-data-left">
                            <div class="data-profile">
                                <img src="image/profil.webp" alt="">
                                <img src="image/profil.webp" alt="" class="img-hover" >
                                <div class="data-profile-info">
                                    <input type="text" name="input_nama" id="input_nama" class="form-control form-input-data" required/>
                                    <input type="text" name="input_no_anggota" id="input_no_anggota" class="form-control form-input-data" />
                                    <div class="toggle-switch toggle-data">
                                        <input class="toggle-input" id="input_status_anggota" type="checkbox">
                                        <label class="toggle-label" for="input_status_anggota"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="input-data">
                                <span>Email</span>
                                <span>:</span>
                                <input type="email" name="input_email" id="input_email" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Password</span>
                                <span>:</span>
                                <input type="text" name="input_password" id="input_password" class="form-control form-input-data"/>
                            </div>
                            <div class="input-data">
                                <span>Nomor KTP</span>
                                <span>:</span>
                                <input type="number" name="input_no_ktp" id="input_no_ktp" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Masa Berlaku KTP</span>
                                <span>:</span>
                                <input type="text" name="input_masa_berlaku_ktp" id="input_masa_berlaku_ktp" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Jenis Kelamin</span>
                                <span>:</span>
                                <input type="radio" name="input_jenis_kelamin" value="laki_laki" required  checked='checked'/>
                                <label for="laki_laki">Laki-Laki</label>
                                <input type="radio" name="input_jenis_kelamin" value="perempuan"/>
                                <label for="perempuan">Perempuan</label>
                            </div>
                            <div class="input-data">
                                <span>Tempat & Tgl Lahir</span>
                                <span>:</span>
                                <input type="text" name="input_tempat_lahir" id="input_tempat_lahir" class="form-control form-input-data" required/>
                            </div>
                            <div class="spesial-input-data">
                                <div>
                                    <span>Alamat Sesuai KTP</span>
                                </div>
                                <span class="line-1">:</span>
                                <textarea name="input_alamat_ktp" id="input_alamat_ktp" class="form-control form-textarea-data" required></textarea>
                            </div>
                            <div class="spesial-input-data">
                                <div>
                                    <span>Alamat Tempat tinggal</span>
                                    <span>(jika tidak sesuai KTP)</span>
                                </div>
                                <span class="line-1">:</span>
                                <textarea name="input_alamat_tak_sesuai_ktp" id="input_alamat_tak_sesuai_ktp" class="form-control form-textarea-data" required></textarea>
                            </div>
                            <div class="input-data">
                                <span>No. Telepon</span>
                                <span>:</span>
                                <input type="number" name="input_no_telepon" id="input_no_telepon" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>No. Telepon Rumah</span>
                                <span>:</span>
                                <input type="number" name="input_no_telepon_rumah" id="input_no_telepon_rumah" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Status Tempat Tinggal</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select name="input_status_tempat_tinggal" id="input_status_tempat_tinggal">
                                        <option hidden>Pilih Status</option>
                                        <option value="milik_pribadi">Milik Pribadi</option>
                                        <option value="milik_orang_tua">Milik Orang Tua</option>
                                        <option value="milik_saudara">Milik Sanak/Saudara</option>
                                        <option value="sewa">Sewa/Kos</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-data-right">
                            <div class="input-data">
                                <span>Menempati Alamat Sejak</span>
                                <span>:</span>
                                <input type="datetime-local" name="input_menempati_sejak" id="input_menempati_sejak" class="form-control form-input-data input-date" required/>
                            </div>
                            <div class="input-data">
                                <span>Pendidikan Terakhir</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="input_pendidikan_terakhir" name="input_pendidikan_terakhir">
                                        <option hidden>Pilih Pendidikan</option>
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma_sederajat">SMA/K Sederajat</option>
                                        <option value="d3">Diploma - D3</option>
                                        <option value="d4">Diploma - D4</option>
                                        <option value="s1">Sarjana - S1</option>
                                        <option value="s2">Sarjana - S2</option>
                                        <option value="s3">Sarjana - S3</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-data">
                                <span>Status Perkawinan</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="input_status_perkawinan" name="input_status_perkawinan">
                                        <option hidden>Pilih Status</option>
                                        <option value="belum_menikah">Belum Menikah</option>
                                        <option value="sudah_menikah">Sudah Menikah</option>
                                        <option value="janda_duda">Janda/Duda</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>                            
                            </div>
                            <div class="input-data">
                                <span>Nama Istri/Suami</span>
                                <span>:</span>
                                <input type="text" name="input_nama_pasangan" id="input_nama_pasangan" class="form-control form-input-data"/>
                            </div>
                            <div class="input-data">
                                <span>Jumlah Anak</span>
                                <span>:</span>
                                <input type="number" name="input_jumlah_anak" id="input_jumlah_anak" class="form-control form-input-data" />
                            </div>
                            <div class="input-data">
                                <span>Nama Ibu Kandung</span>
                                <span>:</span>
                                <input type="text" name="input_nama_ibu_kandung" id="input_nama_ibu_kandung" class="form-control form-input-data" required />
                            </div>
                            <div class="input-data">
                                <span>NPWP Pribadi</span>
                                <span>:</span>
                                <input type="number" name="input_npwp_pribadi" id="input_npwp_pribadi" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Nama Ahli Waris</span>
                                <span>:</span>
                                <input type="text" name="input_nama_ahli_waris" id="input_nama_ahli_waris" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Hubungan Ahli Waris</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="input_hub_ahli_waris" name="input_hub_ahli_waris">
                                        <option hidden>Pilih Hubungan</option>
                                        <option value="kakek_nenek">Kakek/Nenek</option>
                                        <option value="orang_tua">Orang Tua</option>
                                        <option value="mertua">Mertua</option>
                                        <option value="paman_bibi">Paman/Bibi</option>
                                        <option value="ipar">Ipar</option>
                                        <option value="saudara_kandung">Saudara Kandung</option>
                                        <option value="sepupu">Sepupu</option>
                                        <option value="anak">Anak</option>
                                        <option value="keponakan">Keponakan</option>
                                        <option value="cucu_cicit">Cucu/Cicit</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="input-data">
                                <span>No. Telp ext Kantor</span>
                                <span>:</span>
                                <input type="number" name="input_no_telp_ext_kantor" id="input_no_telp_ext_kantor" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>N.I.K</span>
                                <span>:</span>
                                <input type="text" name="input_nik" id="input_nik" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>No Rekening BNI 46</span>
                                <span>:</span>
                                <input type="number" name="input_no_rek_bni" id="input_no_rek_bni" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Divisi/Bagian/Jabatan</span>
                                <span>:</span>
                                <input type="text" name="input_jabatan" id="input_jabatan" class="form-control form-input-data" required />
                            </div>
                            <div class="input-data">
                                <span>Tanggal Masuk Perusahaan</span>
                                <span>:</span>
                                <input type="datetime-local" name="input_tgl_masuk_perusahaan" id="input_tgl_masuk_perusahaan" class="form-control form-input-data input-date" required/>
                            </div>
                            <div class="input-data">
                                <span>Status Karyawan</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="input_status_karyawan" name="input_status_karyawan" required>
                                        <option hidden>Pilih Status</option>
                                        <option value="pegawai_tetap">Pegawai Tetap</option>
                                        <option value="pegawai_kontrak">Pegawai Kontrak</option>
                                        <option value="pegawai_harian">Pegawai Harian</option>
                                        <option value="training">Masa Training</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div> 
                            </div>
                            <input type="hidden" name="input_nasabah_id" id="input_nasabah_id"/>
                        </div>
                    </div>
                    <div class="lower_context input_lower_context">
                        <button type="button" id="tutup_detail_anggota" class="button_close_detail_anggota">Tutup</button>
                        <button type="button" id="ubah_detail_anggota" class="editNasabahBtn button_ubah_detail_anggota">Ubah</button>
                        <button type="submit" id="simpan_detail_anggota" class="button_simpan_detail_anggota">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal view simpanan anggota -->
    <div class="modal_view_simpanan_anggota" id="modal_view_simpanan_anggota">
        <div id="" class="modal_content_data_simpanan">
            <div class="top_modal top_modal_simpanan">
                <span>Informasi Simpanan</span>
            </div>
            <div class="content_simpanan">
                <div class="left_simpanan">
                    <div class="data-simpanan">
                        <div class="info-simpanan">
                            <span>Nama Nasabah</span>
                            <span>:</span>
                            <span id="simpanan_nama_nasabah">-</span>
                        </div>
                        <div class="info-simpanan">
                            <span>Saldo Simpanan</span>
                            <span>:</span>
                            <span>-</span>
                        </div>
                        <input type="hidden" value="" name="simpanan_id_nasabah" id="simpanan_id_nasabah">
                    </div>
                    <div class="data-form-simpanan">
                        <span class="title-form-simpanan">Tambah Data Simpanan</span>
                        <form id="tambahdatasimpanan" method="POST">
                            <div class="input-data-simpanan">
                                <span class="span-1">Tanggal Pembayaran :</span>
                                <input type="datetime-local" name="tanggal" id="tanggal" class="form-control form-input-data-simpanan input-date" required />
                            </div>
                            <div class="input-data-simpanan">
                                <span class="span-1">Jenis Simpanan :</span>
                                <div class="select-box ">
                                    <select name="jenis" id="jenis" class="form-input-data-simpanan">
                                        <option value="pokok">Simpanan Pokok</option>
                                        <option value="wajib">Simpanan Wajib</option>
                                        <option value="sukarela">Simpanan Sukarela</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="input-data-simpanan">
                                <span class="span-1">Nominal Simpanan :</span>
                                <input type="number" name="jumlah" id="jumlah" class="form-control form-input-data-simpanan" required />
                            </div>
                            <div class="input-data-simpanan">
                                <span class="span-1">Disetujui Oleh :</span>
                                <input type="text" name="pengelola" id="pengelola" value="{{ Auth()->User()->nama }}" class="form-control form-input-data-simpanan" disabled />
                            </div>
                            <div class="input-data-simpanan">
                                <button type="submit" class="button-tambah-simpanan">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right_simpanan">
                    <div class="card">
                        <div class="card-header header-simpanan">
                            <div class="filter-section">
                                <label>
                                    <input type="radio" class="filter-radio" name="filter-pinjaman" value="semua" checked="">
                                    <i class="fa-solid fa-check check-icon"></i>
                                    <span>Semua</span>
                                </label>
                                <label>
                                    <input type="radio" class="filter-radio" name="filter-pinjaman" value="wajib">
                                    <i class="fa-solid fa-check check-icon"></i>
                                    <span>Wajib</span>
                                </label>
                                <label>
                                    <input type="radio" class="filter-radio" name="filter-pinjaman" value="pokok">
                                    <i class="fa-solid fa-check check-icon"></i>
                                    <span>Pokok</span>
                                </label>
                                <label>
                                    <input type="radio" class="filter-radio" name="filter-pinjaman" value="sukarela">
                                    <i class="fa-solid fa-check check-icon"></i>
                                    <span>Sukarela</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-body body-simpanan" id="card-body">
                            <table id="myTableSimpanan" class="table table-borderless styled-table custom-table" border="0" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Simpanan</th>
                                        <th>Jumlah Simpanan</th>
                                        <th>Penerima</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="body-simpanan">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" id="tutup_simpanan_anggota" class="button_close_detail_anggota butt-close-simpanan">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal konfirmasi -->
    <div class="modal-konfirmasi" id="modal-konfirmasi">
        <div id="modal-content-konfirmasi" class="modal-content-konfirmasi">
            <div>
                <div class="header_modal">
                    <span class="pesan-span-title">Pesan Konfirmasi</span>
                </div>
                <div class="pesan">
                    <span class="pesan-span">Hapus data simpanan dari Sistem?</span>
                </div>
            </div>
            <div class="footer_modal">
                <button type="button" class="btn_close" id="btn-close-modal">
                    <span>Batalkan</span>
                </button>
                <button type="button" class="btn_keluar" id="btn-konfirmasi" >
                    <span>Yakin</span>
                </button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script type="text/javascript">

        let simpanan = [];
        let nasabah = []; 
        let body_simpanan = document.getElementById("body-simpanan");
        let body_table = document.getElementById("body-table");
        function get_simpanan(nasabah_id){
            modal_view_simpanan_anggota.style.display = "flex";
            $.ajax({
                url: '/nasabah/simpanan',
                method: 'GET',
                data:{
                    id : nasabah_id
                },
                dataType: 'json',
                beforeSend: function() {
                    body_simpanan.innerHTML = `<tr>
                                <td colspan="6" >
                                    <div class="loader-container">
                                        <div class="loader">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                        </div>
                                        <span class="loader-text">Loading</span>
                                    </div>
                                </td>
                            </tr>`;
                },
                success: function(response) {
                    let data = []
                    simpanan = response;
                    if(response.length>0){
                        let num = 1;
                        response.forEach(item => {
                            data.push( `<tr>
                                            <td>${num}</td>
                                            <td>${item.tanggal}</td>
                                            <td>${item.jenis}</td>
                                            <td>${item.saldo}</td>
                                            <td>${item.pengelola}</td>
                                            <td class="action">
                                                <button type="button" value='${item.id}' class="deleteSimpananBtn btn-delete">Hapus</button>
                                            </td>
                                        </tr>`
                            )
                            num++;
                        });
                        body_simpanan.innerHTML = data.join("");
                    }else{
                        body_simpanan.innerHTML = `<tr><td colspan="6" ><div class="search-val"><span>Tidak ada data Simpanan saat ini</span></div></td></tr>`;
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }

        //  View Data Simpanan Anggota
        $(document).on('click', '.viewSimpananBtn', function () {
            var nasabah_id = $(this).val();
            $.ajax({
                url: "/nasabah/read",
                method: "GET",
                dataType: "json",
                data: { id: nasabah_id },
                success: function (response) {
                    $("#simpanan_nama_nasabah").text(response.nama)
                    $("#simpanan_id_nasabah").val(nasabah_id)
                }
            });
            get_simpanan(nasabah_id)
        });

        $(document).on('click', '.filter-radio', function () {
            const filter_value = $(this).val();
            if(filter_value == 'semua'){
                if(simpanan.length > 0){
                    let data = []
                    let num = 1;
                    simpanan.forEach(item => {
                        data.push( `<tr>
                                        <td>${num}</td>
                                        <td>${item.tanggal}</td>
                                        <td>${item.jenis}</td>
                                        <td>${item.saldo}</td>
                                        <td>${item.pengelola}</td>
                                        <td class="action">
                                            <button type="button" value='${item.id}' class="deleteSimpananBtn btn-delete">Hapus</button>
                                        </td>
                                    </tr>`
                        )
                        num++;
                    });
                    body_simpanan.innerHTML = '';
                    body_simpanan.innerHTML = data.join("");
                }else{
                    body_simpanan.innerHTML = '';
                    body_simpanan.innerHTML = `<tr><td colspan="6" ><div class="search-val"><span>Tidak ada data Simpanan saat ini</span></div></td></tr>`;
                }
            }else if(filter_value == 'wajib'){
                let filteredSimpanan = simpanan.filter(item => item.jenis.toLowerCase().includes(filter_value));
                if(filteredSimpanan.length > 0){
                    let data = []
                    let num = 1;
                    filteredSimpanan.forEach(item => {
                        data.push( `<tr>
                                        <td>${num}</td>
                                        <td>${item.tanggal}</td>
                                        <td>${item.jenis}</td>
                                        <td>${item.saldo}</td>
                                        <td>${item.pengelola}</td>
                                        <td class="action">
                                            <button type="button" value='${item.id}' class="deleteSimpananBtn btn-delete">Hapus</button>
                                        </td>
                                    </tr>`
                        )
                        num++;
                    });
                    body_simpanan.innerHTML = '';
                    body_simpanan.innerHTML = data.join("");
                }else{
                    body_simpanan.innerHTML = '';
                    body_simpanan.innerHTML = `<tr><td colspan="6" ><div class="search-val"><span>Tidak ada data Simpanan saat ini</span></div></td></tr>`;
                }
            }else if(filter_value == 'pokok'){
                let filteredSimpanan = simpanan.filter(item => item.jenis.toLowerCase().includes(filter_value));
                if(filteredSimpanan.length > 0){
                    let data = []
                    let num = 1;
                    filteredSimpanan.forEach(item => {
                        data.push( `<tr>
                                        <td>${num}</td>
                                        <td>${item.tanggal}</td>
                                        <td>${item.jenis}</td>
                                        <td>${item.saldo}</td>
                                        <td>${item.pengelola}</td>
                                        <td class="action">
                                            <button type="button" value='${item.id}' class="deleteSimpananBtn btn-delete">Hapus</button>
                                        </td>
                                    </tr>`
                        )
                        num++;
                    });
                    body_simpanan.innerHTML = '';
                    body_simpanan.innerHTML = data.join("");
                }else{
                    body_simpanan.innerHTML = '';
                    body_simpanan.innerHTML = `<tr><td colspan="6" ><div class="search-val"><span>Tidak ada data Simpanan saat ini</span></div></td></tr>`;
                }
            }else if(filter_value == 'sukarela'){
                let filteredSimpanan = simpanan.filter(item => item.jenis.toLowerCase().includes(filter_value));
                if(filteredSimpanan.length > 0){
                    let data = []
                    let num = 1;
                    filteredSimpanan.forEach(item => {
                        data.push( `<tr>
                                        <td>${num}</td>
                                        <td>${item.tanggal}</td>
                                        <td>${item.jenis}</td>
                                        <td>${item.saldo}</td>
                                        <td>${item.pengelola}</td>
                                        <td class="action">
                                            <button type="button" value='${item.id}' class="deleteSimpananBtn btn-delete">Hapus</button>
                                        </td>
                                    </tr>`
                        )
                        num++;
                    });
                    body_simpanan.innerHTML = '';
                    body_simpanan.innerHTML = data.join("");
                }else{
                    body_simpanan.innerHTML = '';
                    body_simpanan.innerHTML = `<tr><td colspan="6" ><div class="search-val"><span>Tidak ada data Simpanan saat ini</span></div></td></tr>`;
                }
            }
        });

        function get_nasabah(){
            $.ajax({
                url: '/nasabah/array',
                method: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    body_table.innerHTML = `<tr>
                                <td colspan="7" >
                                    <div class="loader-container">
                                        <div class="loader">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                        </div>
                                        <span class="loader-text">Loading</span>
                                    </div>
                                </td>
                            </tr>`;
                },
                success: function(response) {
                    let data = []
                    nasabah = response;
                    if(nasabah.length>0){
                        nasabah.forEach(item => {
                            let toggleIcon = item.status_anggota === 1  ? "<i class='fa-solid fa-toggle-on active'></i>" : "<i class='fa-solid fa-toggle-off inactive'></i>";
                            data.push( `<tr class=''>
                                            <td>${item.nama}</td>
                                            <td>${item.no_anggota}</td>
                                            <td>${item.no_ktp}</td>
                                            <td>${item.email}</td>
                                            <td>${item.no_telp}</td>
                                            <td>${toggleIcon}</td>
                                            <td class='action'>
                                                <button type='button' value='${item.id}' class='viewNasabahBtn btn-view'>Info</button>
                                                <button type='button' value='${item.id}' class='viewSimpananBtn btn-simpanan'>Simpanan</button>
                                            </td>
                                        </tr>`
                            )
                        });
                        body_table.innerHTML = data.join("");
                    }else{
                        body_table.innerHTML = `<tr><td colspan="7" ><div class="search-val"><span>Tidak ada data pengguna saat ini</span></div></td></tr>`;
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }

        get_nasabah()

        let searchInp = document.getElementById("search_nasabah")
        searchInp.addEventListener("keyup", () => {
            let searchWord = searchInp.value.toLowerCase();
            let filteredNasabah = nasabah.filter(item => item.nama.toLowerCase().includes(searchWord));
            if(filteredNasabah.length > 0){
                let data = []
                filteredNasabah.forEach(item => {
                    let toggleIcon = item.status_anggota === 1  ? "<i class='fa-solid fa-toggle-on active'></i>" : "<i class='fa-solid fa-toggle-off inactive'></i>";
                    data.push( `<tr class=''>
                                    <td>${item.nama}</td>
                                    <td>${item.no_anggota}</td>
                                    <td>${item.no_ktp}</td>
                                    <td>${item.email}</td>
                                    <td>${item.no_telp}</td>
                                    <td>${toggleIcon}</td>
                                    <td class='action'>
                                        <button type='button' value='${item.id}' class='viewNasabahBtn btn-view'>Info</button>
                                        <button type='button' value='${item.id}' class='viewSimpananBtn btn-simpanan'>Simpanan</button>
                                    </td>
                                </tr>`
                    )
                });
                body_table.innerHTML = '';
                body_table.innerHTML = data.join("");
            }else{
                body_table.innerHTML = '';
                body_table.innerHTML = `<tr><td colspan="7" ><div class="search-val"><span>Oops! Nama Pengguna <i>"${searchWord}"</i> tidak ditemukan</span></div></td></tr>`;
            }
        });
        
        // Delete data simpanan
        $(document).on('click', '.deleteSimpananBtn', function (e) {
            e.preventDefault();
            modal_konfirmasi.style.display = 'flex';
            var simpanan_id = $(this).val();

            butt_konfirmasi.addEventListener("click", () => {
                $.ajax({
                    url: "/nasabah/simpanan/delete",
                    method: "POST",
                    dataType: "json",
                    data: {
                        'id': simpanan_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        $("input[name='filter-pinjaman'][value='semua']").prop("checked", true);
                        get_simpanan(response.user_id)
                        modal_konfirmasi.style.display = 'none';
                    }
                });
            })
        });

        // Tambah data simpanan
        $(document).on('submit', '#tambahdatasimpanan', function (e) {
            e.preventDefault();
            let formData = {
                'nasabah_id' : $("#simpanan_id_nasabah").val(),
                'jenis': $("#jenis").val(),
                'jumlah' : $("#jumlah").val(),
                'tanggal' : $("#tanggal").val(),
                'pengelola': $("#pengelola").val(),
            };
            $.ajax({
                url: "/nasabah/simpanan/tambah",
                method: "POST",
                dataType: "json",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('#tambahdatasimpanan')[0].reset();
                    get_simpanan($("#simpanan_id_nasabah").val())
                    $("input[name='filter-pinjaman'][value='semua']").prop("checked", true);
                }
            });

        });

    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script type="text/javascript" src="js/scriptnasabah.js"></script>

@endsection