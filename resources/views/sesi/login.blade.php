<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ===== CSS ===== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/stylelogin.css">
         
    <title>Login & Registration Form</title> 
</head>
<body>

    <div class="">
        <div class="odes-container">
            <span class="odes-title">OPTIMALKAN PENGELOLAAN KEUANGAN ANDA</span>
            <span class="odes-title-info">Bersama Koperasi Polibatam</span>

            <div class="odes-slider">
                <div class="odes-slides">
                    <input type="radio" name="radio-btn" id="odes-radio1" />
                    <input type="radio" name="radio-btn" id="odes-radio2" />
                    <input type="radio" name="radio-btn" id="odes-radio3" />
                    <input type="radio" name="radio-btn" id="odes-radio4" />
                    <div class="odes-slide odes-first">
                        <img src="image/home7.jpg" alt=""/>
                    </div>
                    <div class="odes-slide">
                        <img src="image/home6.jpg" alt=""/>
                    </div>
                    <div class="odes-slide">
                        <img src="image/home5.JPG" alt=""/>
                    </div>
                    <div class="odes-slide">
                        <img src="image/home4.jpg" alt=""/>
                    </div>
                    <div class="odes-navigation-auto">
                        <div class="odes-auto-btn1"></div>
                        <div class="odes-auto-btn2"></div>
                        <div class="odes-auto-btn3"></div>
                        <div class="odes-auto-btn4"></div>
                    </div>
                </div>
                <div class="odes-navigation-manual">
                    <label for="odes-radio1" class="odes-manual-btn"></label>
                    <label for="odes-radio2" class="odes-manual-btn"></label>
                    <label for="odes-radio3" class="odes-manual-btn"></label>
                    <label for="odes-radio4" class="odes-manual-btn"></label>
                </div>
            </div>
            <!-- <img class="odes-image" src="/odes_crm/static/description/inven.jpeg" /> -->
            <div class="odes-content">
                <div class="odes-left-content">
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, necessitatibus aspernatur qui, odio libero harum quas pariatur in nobis excepturi aliquam nam architecto temporibus nostrum, cupiditate tempore ad impedit ipsa!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, necessitatibus aspernatur qui, odio libero harum quas pariatur in nobis excepturi aliquam nam architecto temporibus nostrum, cupiditate tempore ad impedit ipsa!</p>
                    </div>
                </div>
                <div class="odes-right-content">
                    <span class="odes-title-form home-text">Sudah Punya Akun?Login Sekarang.</span>
                    <button id="butt-login" name="butt-login" class="butt-login">
                        <span>Login</span>
                    </button>
                    <span class="home-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit ex dicta maiores, facere magni vero. Nemo, accusantium eaque officiis harum quia nam. Voluptatum numquam tempora obcaecati quis nobis facere eum.</span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('odes-radio' + counter).checked = true;
                counter++;
                if(counter > 4){
                    counter = 1;
                }
            }, 5000);
        </script>
    </div>
    <div class="modal-login" id="modal-login">
        <div class="modal-login-content">
            <div class="container">
                <div class="forms">
                    <div class="form login">
                        <div class="title-form">
                            <span class="title">Login</span>
                        </div>
                        <form action="#" method="POST" id="formLogin">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="input-field">
                                <input type="text" placeholder="Enter your email" id="user_email" name="email" required>
                                <i class="uil uil-envelope icon"></i>
                            </div>
                            <div class="input-field">
                                <input type="password" class="password" name="password" id="user_password" placeholder="Enter your password" required>
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                            </div>
                            <div class="checkbox-text">
                                <div class="checkbox-content">
                                    <input type="checkbox" id="logCheck">
                                    <label for="logCheck" class="text">Remember me</label>
                                </div>
                                
                                <a href="#" class="text">Lupa password?</a>
                            </div>
                            <div class="input-field button">
                                <input type="submit" value="Login">
                            </div>
                        </form>
                        <div class="login-signup">
                            <span class="text">Belum punya akun?
                                <span class="sign-up-text" id="sign-up">Signup Sekarang</span>
                            </span>
                        </div>
                    </div>
                    <!-- Registration Form -->
                    <div class="form signup">
                        <span class="title">Registration</span>
                        <form action="home/register" method="POST">
                            @csrf
                            <div class="input-field">
                                <input type="text" placeholder="Enter your name" name="reg_nama" required>
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="input-field">
                                <input type="text" placeholder="Enter your email" name="reg_email" required>
                                <i class="uil uil-envelope icon"></i>
                            </div>
                            <div class="input-field">
                                <input type="password" class="password" placeholder="Create a password" name="reg_password" required>
                                <i class="uil uil-lock icon"></i>
                            </div>
                            <div class="input-field">
                                <input type="password" class="password" placeholder="Confirm a password" name="reg_con_password" required>
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                            </div>
                            <!-- <div class="checkbox-text">
                                <div class="checkbox-content">
                                    <input type="checkbox" id="termCon">
                                    <label for="termCon" class="text">I accepted all terms and conditions</label>
                                </div>
                            </div> -->
                            <div class="input-field button">
                                <input type="submit" value="Signup">
                            </div>
                        </form>
                        <div class="login-signup">
                            <span class="text">Sudah Punya Akun?
                                <a href="#" class="text login-link">Login Sekarang</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-register" id="modal-register">
        <div class="modal-register-content">
            <div class="top_modal">
                <span>Formulir Daftar Anggota</span>
            </div>
            <div class="context">
                <form id="nasabahregister" method="POST">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="data_form" id="data-detail-anggota">
                        <div class="input-data-left">
                            <div class="input-data">
                                <span>Nama</span>
                                <span>:</span>
                                <input type="text" name="nama" id="add_nama" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Email</span>
                                <span>:</span>
                                <input type="email" name="email" id="add_email" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Nomor KTP</span>
                                <span>:</span>
                                <input type="number" name="no_ktp" id="no_ktp" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Masa Berlaku KTP</span>
                                <span>:</span>
                                <input type="text" name="masa_berlaku_ktp" id="masa_berlaku_ktp" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Jenis Kelamin</span>
                                <span>:</span>
                                <input type="radio" name="jenis_kelamin" value="laki_laki" required  checked='checked'/>
                                <label for="laki_laki">Laki-Laki</label>
                                <input type="radio" name="jenis_kelamin" value="perempuan"/>
                                <label for="perempuan">Perempuan</label>
                            </div>
                            <div class="input-data">
                                <span>Tempat & Tgl Lahir</span>
                                <span>:</span>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-input-data" required/>
                            </div>
                            <div class="spesial-input-data">
                                <div>
                                    <span>Alamat Sesuai KTP</span>
                                </div>
                                <span class="line-1">:</span>
                                <textarea name="alamat_ktp" id="alamat_ktp" class="form-control form-textarea-data" required></textarea>
                            </div>
                            <div class="spesial-input-data">
                                <div>
                                    <span>Alamat Tempat tinggal</span>
                                    <span>(jika tidak sesuai KTP)</span>
                                </div>
                                <span class="line-1">:</span>
                                <textarea name="alamat_tak_sesuai_ktp" id="alamat_tak_sesuai_ktp" class="form-control form-textarea-data" required></textarea>
                            </div>
                            <div class="input-data">
                                <span>No. Telepon</span>
                                <span>:</span>
                                <input type="number" name="no_telepon" id="no_telepon" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>No. Telepon Rumah</span>
                                <span>:</span>
                                <input type="number" name="no_telepon_rumah" id="no_telepon_rumah" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Status Tempat Tinggal</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select name="status_tempat_tinggal" id="status_tempat_tinggal">
                                        <option hidden>Pilih Status</option>
                                        <option value="milik_pribadi">Milik Pribadi</option>
                                        <option value="milik_orang_tua">Milik Orang Tua</option>
                                        <option value="milik_saudara">Milik Sanak/Saudara</option>
                                        <option value="sewa">Sewa/Kos</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-data">
                                <span>Menempati Alamat Sejak</span>
                                <span>:</span>
                                <input type="datetime-local" name="menempati_sejak" id="menempati_sejak" class="form-control form-input-data input-date" required/>
                            </div>
                        </div>
                        <div class="input-data-right">
                            <div class="input-data">
                                <span>Pendidikan Terakhir</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="pendidikan_terakhir" name="pendidikan_terakhir">
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
                                    <select class="" id="status_perkawinan" name="status_perkawinan">
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
                                <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Jumlah Anak</span>
                                <span>:</span>
                                <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control form-input-data" required />
                            </div>
                            <div class="input-data">
                                <span>Nama Ibu Kandung</span>
                                <span>:</span>
                                <input type="text" name="nama_ibu_kandung" id="nama_ibu_kandung" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>NPWP Pribadi</span>
                                <span>:</span>
                                <input type="number" name="npwp_pribadi" id="npwp_pribadi" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Nama Ahli Waris</span>
                                <span>:</span>
                                <input type="text" name="nama_ahli_waris" id="nama_ahli_waris" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Hubungan Ahli Waris</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="hub_ahli_waris" name="hub_ahli_waris">
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
                                <input type="number" name="no_telp_ext_kantor" id="no_telp_ext_kantor" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>N.I.K</span>
                                <span>:</span>
                                <input type="text" name="nik" id="nik" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>No Rekening BNI 46</span>
                                <span>:</span>
                                <input type="number" name="no_rek_bni" id="no_rek_bni" class="form-control form-input-data" required/>
                            </div>
                            <div class="input-data">
                                <span>Divisi/Bagian/Jabatan</span>
                                <span>:</span>
                                <input type="text" name="jabatan" id="jabatan" class="form-control form-input-data" required />
                            </div>
                            <div class="input-data">
                                <span>Tanggal Masuk Perusahaan</span>
                                <span>:</span>
                                <input type="datetime-local" name="tgl_masuk_perusahaan" id="tgl_masuk_perusahaan" class="form-control form-input-data input-date" required/>
                            </div>
                            <div class="input-data">
                                <span>Status Karyawan</span>
                                <span>:</span>
                                <div class="select-box">
                                    <select class="" id="status_karyawan" name="status_karyawan" required>
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
                        <button type="submit" id="confirm_register" class="button_confirm_register">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal-error" id="modal-error">
        <div id="modal-content-error" class="modal-content-error">
            <div>
                <div class="header_error">
                    <span>Validasi Error</span>
                </div>
                <div class="pesan-error" id="pesan-error">
                </div>
            </div>
            <div class="footer_error">
                <button type="button" class="btn_tutup" id="btn-tutup">
                    <span>Tutup</span>
                </button>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="js/scriptlogin.js"></script> 
    <script type="text/javascript">

        let form = document.getElementById('nasabahregister');
        $(document).on('submit', '#nasabahregister', function (e) {
            e.preventDefault();
            let inputs = form.querySelectorAll('input, select, textarea');  
            let formData = {};
            
            inputs.forEach(input => {
                formData[input.name] = input.value;
                console.log(input.name + ' = ' + input.value)
            });

            $.ajax({
                url: "/home/register",
                method: "POST",
                dataType: "json",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    modal_register.style.display = 'none';
                }
            });

        });
    </script>
</body>
</html>
