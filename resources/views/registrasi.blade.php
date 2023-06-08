@extends('layout.main')

@section('container')
    <link rel="stylesheet" href="css/styleregistrasi.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <div class="odes-text">Daftar Pengajuan Registrasi</div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="search">
                            <i class="uil uil-search"></i>
                            <input spellcheck="false" type="text" id="search_nasabah" placeholder="Search">
                        </div>
                    </div>
                    <div class="card-body" id="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal konfirmasi -->
    <div class="modal-konfirmasi" id="modal-konfirmasi">
        <div id="modal-content-konfirmasi" class="modal-content-konfirmasi">
            <div>
                <div class="header_modal">
                    <span>Pesan Konfirmasi</span>
                </div>
                <div class="pesan">
                    <span>Setujui Permintaan untuk bergabung?</span>
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

    <!-- modal view data -->
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
                    <div class="lower_context input_lower_context">
                        <button type="button" id="tutup_detail_anggota" class="button_close_detail_anggota">Tutup</button>
                        <button type="submit" id="konfirmasi_detail_anggota" class="button_konfirmasi_detail_anggota confirmAnggota">Terima</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        let nasabah = []; 
        let body_table = document.getElementById("card-body");

        function get_nasabah(){
            $.ajax({
                url: '/registrasi/array',
                method: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    body_table.innerHTML = `
                                    <div class="loader-container">
                                        <div class="loader">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                        </div>
                                        <span class="loader-text">Loading</span>
                                    </div>`;
                },
                success: function(response) {
                    let data = []
                    nasabah = response;
                    if(nasabah.length>0){
                        nasabah.forEach(item => {
                            data.push( `<div class="pengajuan-registrasi">
                                            <div class="info-pengajuan">
                                                <div class="bg-left">
                                                </div>
                                                <div class="pengajuan-detail">
                                                    <span>${item.nama}</span>
                                                    <span>${item.email}</span>
                                                    <span>${item.no_telp}</span>
                                                </div>
                                            </div>
                                            <div class="pengajuan-konfirmasi">
                                                <button  value="${item.id}" class="btn-pengajuan-view viewnasabah">
                                                    <span>Lihat</span>
                                                </button>
                                                <button  value="${item.id}" class="btn-pengajuan-konfirmasi confirmnasabah">
                                                    <span>Terima</span>
                                                </button>
                                            </div>
                                        </div>`
                            )
                        });
                        body_table.innerHTML = data.join("");
                    }else{
                        body_table.innerHTML = `<div class="search-val"><span>Tidak ada data registrasi saat ini</span></div>`;
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
                    data.push( `<div class="pengajuan-registrasi">
                                    <div class="info-pengajuan">
                                        <div class="bg-left">
                                        </div>
                                        <div class="pengajuan-detail">
                                            <span>${item.nama}</span>
                                            <span>${item.email}</span>
                                            <span>${item.no_telp}</span>
                                        </div>
                                    </div>
                                    <div class="pengajuan-konfirmasi">
                                        <button  value="${item.id}" class="btn-pengajuan-view viewnasabah">
                                            <span>Lihat</span>
                                        </button>
                                        <button  value="${item.id}" class="btn-pengajuan-konfirmasi confirmnasabah">
                                            <span>Terima</span>
                                        </button>
                                    </div>
                                </div>`
                    )
                });
                body_table.innerHTML = '';
                body_table.innerHTML = data.join("");
            }else{
                body_table.innerHTML = '';
                body_table.innerHTML = `<div class="search-val"><span>Oops! Nama Pengguna <i>"${searchWord}"</i> tidak ditemukan</span>`;
            }
        });

        let modal_konfirmasi = document.getElementById('modal-konfirmasi');
        let butt_close_modal = document.getElementById('btn-close-modal');
        let butt_konfirmasi = document.getElementById('btn-konfirmasi');
        let modal_view_anggota = document.getElementById('modal_view_anggota');
        let butt_close_modal_detail = document.getElementById('tutup_detail_anggota');
        
        butt_close_modal_detail.addEventListener("click",()=>{
            modal_view_anggota.style.display = 'none';
        })
        butt_close_modal.addEventListener("click",()=>{
            modal_konfirmasi.style.display = 'none';
        })
        window.addEventListener("click",(e)=>{
            if (e.target == modal_konfirmasi) {
                modal_konfirmasi.style.display = 'none';
            }else if (e.target == modal_view_anggota) {
                modal_view_anggota.style.display = 'none';
            }
        })

        $(document).on('click', '.confirmAnggota', function (e) {
            e.preventDefault();
            var nasabah_id = $(this).val();
            modal_konfirmasi.style.display = 'flex';
            butt_konfirmasi.addEventListener("click",()=>{
                $.ajax({
                    url: "/registrasi/confirm",
                    method: "POST",
                    dataType: "json",
                    data: {
                        'id': nasabah_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        get_nasabah()
                        modal_konfirmasi.style.display = 'none';
                        modal_view_anggota.style.display = 'none';
                    }
                });
            })
        });

        $(document).on('click', '.confirmnasabah', function (e) {
            e.preventDefault();
            var nasabah_id = $(this).val();
            modal_konfirmasi.style.display = 'flex';
            butt_konfirmasi.addEventListener("click",()=>{
                $.ajax({
                    url: "/registrasi/confirm",
                    method: "POST",
                    dataType: "json",
                    data: {
                        'id': nasabah_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        get_nasabah()
                        modal_konfirmasi.style.display = 'none';
                    }
                });
            })
        });

        $(document).on('click', '.viewnasabah', function () {
            var nasabah_id = $(this).val();
            $.ajax({
                url: "/nasabah/read",
                method: "GET",
                dataType: "json",
                data: { id: nasabah_id },
                success: function (response) {
                    $('#konfirmasi_detail_anggota').val(response.id);
                    $('#view_nama').text(response.nama);
                    // $('#view_no_anggota').text(response.no_anggota);
                    $('#view_email').text(response.email);
                    // $('#view_password').text(response.password);
                    $('#view_tanggal_bergabung').text(response.tanggal_bergabung);
                    $('#view_no_ktp').text(response.no_ktp);
                    $('#view_masa_berlaku_ktp').text(response.masa_berlaku_ktp);
                    $('#view_jenis_kelamin').text(response.jenis_kelamin);
                    $('#view_tempat_lahir').text(response.tempat_tanggal_lahir);
                    $('#view_alamat_tinggal_ktp').text(response.alamat_ktp);
                    $('#view_alamat_tinggal').text(response.alamat);
                    $('#view_no_telp').text(response.no_telp);
                    $('#view_no_telp_rumah').text(response.no_telp_rumah);
                    $('#view_menempati_sejak').text(response.tinggal_sejak);
                    $('#view_pasangan').text(response.nama_pasangan);
                    $('#view_jumlah_anak').text(response.jumlah_anak);
                    $('#view_nama_ibu_kandung').text(response.nama_ibu_kandung);
                    $('#view_npwp_pribadi').text(response.npwp_pribadi);
                    $('#view_nama_ahli_waris').text(response.nama_ahli_waris);
                    $('#view_no_telp_kantor').text(response.no_telp_kantor);
                    $('#view_nik').text(response.nik);
                    $('#view_no_rek_bni').text(response.no_rek);
                    $('#view_divisi').text(response.jabatan);
                    $('#view_tgl_masuk_perusahaan').text(response.tgl_mulai_bekerja);
                    if(response.status_anggota == 1){
                        $('#view_status_anggota').prop('checked', true)
                    }else{
                        $('#view_status_anggota').prop('checked', false)
                    }
                    if(response.status_tempat_tinggal == 'milik_pribadi'){
                        $('#view_status_tempat_tinggal').text("Milik Pribadi");
                    }else if(response.status_tempat_tinggal == 'milik_orang_tua'){
                        $('#view_status_tempat_tinggal').text("Milik Orang Tua");
                    }else if(response.status_tempat_tinggal == 'milik_saudara'){
                        $('#view_status_tempat_tinggal').text("Milik Sanak/Saudara");
                    }else if(response.status_tempat_tinggal == 'sewa'){
                        $('#view_status_tempat_tinggal').text("Sewa/Kos");
                    }else if(response.status_tempat_tinggal == 'lainnya'){
                        $('#view_status_tempat_tinggal').text("Lainnya");
                    }

                    if(response.status_kawin == 'belum_menikah'){
                        $('#view_status_perkawinan').text("Belum Menikah");
                    }else if(response.status_kawin == 'sudah_menikah'){
                        $('#view_status_perkawinan').text("Sudah Menikah");
                    }else if(response.status_kawin == 'janda_duda'){
                        $("#input_nama_pasangan").prop('disabled', true);
                    }else if(response.status_kawin == 'lainnya'){
                        $('#view_status_perkawinan').text("Lainnya");
                    }

                    if(response.pendidikan_terakhir == 'sd'){
                        $('#view_pendidikan_terakhir').text("SD");
                    }else if(response.pendidikan_terakhir == 'smp'){
                        $('#view_pendidikan_terakhir').text("SMP");
                    }else if(response.pendidikan_terakhir == 'sma_sederajat'){
                        $('#view_pendidikan_terakhir').text("SMA/K Sederajat");
                    }else if(response.pendidikan_terakhir == 'd3'){
                        $('#view_pendidikan_terakhir').text("Diploma - D3");
                    }else if(response.pendidikan_terakhir == 'd4'){
                        $('#view_pendidikan_terakhir').text("Diploma - D4");
                    }else if(response.pendidikan_terakhir == 's1'){
                        $('#view_pendidikan_terakhir').text("Sarjana - S1");
                    }else if(response.pendidikan_terakhir == 's2'){
                        $('#view_pendidikan_terakhir').text("Sarjana - S2");
                    }else if(response.pendidikan_terakhir == 's3'){
                        $('#view_pendidikan_terakhir').text("Sarjana - S3");
                    }else if(response.pendidikan_terakhir == 'lainnya'){
                        $('#view_pendidikan_terakhir').text("Lainnya");
                    }

                    if(response.hubungan_ahli_waris == 'kakek_nenek'){
                        $('#view_hubungan_ahli_waris').text("Kakek/Nenek");
                    }else if(response.hubungan_ahli_waris == 'orang_tua'){
                        $('#view_hubungan_ahli_waris').text("Orang Tua");
                    }else if(response.hubungan_ahli_waris == 'paman_bibi'){
                        $('#view_hubungan_ahli_waris').text("Paman/Bibi");
                    }else if(response.hubungan_ahli_waris == 'mertua'){
                        $('#view_hubungan_ahli_waris').text("Mertua");
                    }else if(response.hubungan_ahli_waris == 'ipar'){
                        $('#view_hubungan_ahli_waris').text("Ipar");
                    }else if(response.hubungan_ahli_waris == 'saudara_kandung'){
                        $('#view_hubungan_ahli_waris').text("Saudara Kandung");
                    }else if(response.hubungan_ahli_waris == 'sepupu'){
                        $('#view_hubungan_ahli_waris').text("Sepupu");
                    }else if(response.hubungan_ahli_waris == 'anak'){
                        $('#view_hubungan_ahli_waris').text("Anak");
                    }else if(response.hubungan_ahli_waris == 'keponakan'){
                        $('#view_hubungan_ahli_waris').text("Keponakan");
                    }else if(response.hubungan_ahli_waris == 'cucu_cicit'){
                        $('#view_hubungan_ahli_waris').text("Cucu/Cicit");
                    }else if(response.hubungan_ahli_waris == 'lainnya'){
                        $('#view_hubungan_ahli_waris').text("Lainnya");
                    }

                    if(response.status_karyawan == 'pegawai_tetap'){
                        $('#view_status_karyawan').text("Pegawai Tetap");
                    }else if(response.status_karyawan == 'pegawai_kontrak'){
                        $('#view_status_karyawan').text("Pegawai Kontrak");
                    }else if(response.status_karyawan == 'pegawai_harian'){
                        $('#view_status_karyawan').text("Pegawai Harian");
                    }else if(response.status_karyawan == 'training'){
                        $('#view_status_karyawan').text("Masa Training");
                    }else if(response.status_karyawan == 'lainnya'){
                        $('#view_status_karyawan').text("Lainnya");
                    }
                    
                    
                    modal_view_anggota.style.display = "flex";
                }
            });
        });

        
    </script>
@endsection