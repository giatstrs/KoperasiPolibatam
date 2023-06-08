@extends('layout.main')

@section('container')
    <!-- <link rel="stylesheet" type="text/css" href="css/stylenasabah.css"> -->
    <link rel="stylesheet" type="text/css" href="css/stylesimpanan.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="odes-text">Daftar Simpanan</div>
    <div class="container mt-4" id="container-odes-text">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="button_tambah" id="tambah-simpanan" name="tambah">
                            <i class="fa-solid fa-sack-dollar"></i>          
                            <span>&nbsp;Tambah</span>
                        </button>
                        <div class="search">
                            <i class="uil uil-search"></i>
                            <input spellcheck="false" type="text" id="search_simpanan" placeholder="Search">
                        </div>
                    </div>
                    <div class="card-body" id="card-body">
                        <table id="myTable" class="table table-borderless styled-table" border="0" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nasabah</th>
                                    <th>Jenis Simpanan</th>
                                    <th>Jumlah Simpanan</th>
                                    <th>Penerima</th>
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

    <!-- Modal Pilihan -->
    <div class="modal_pilihan" id="modal_pilihan">
        <div class="modal_pilihan_content">
            <div class="pilihan_content_card" id="card-data-tunggal">
                <span class="pilihan_content_card_text" >Tambah Simpanan</span>
                <i class='bx bxs-coin-stack'></i>
                <span class="pilihan_content_card_detail">Data Tunggal</span>
            </div>
            <div class="pilihan_content_card" id="card-data-kelompok">
                <span class="pilihan_content_card_text">Tambah Simpanan</span>
                <i class="fa-solid fa-coins"></i>
                <span class="pilihan_content_card_detail">Data Kelompok</span>
            </div>
        </div>
    </div>

    <!-- modal data tunggal -->
    <div class="modal_tambah_simpanan" id="modal_tambah_simpanan">
        <div id="" class="modal_content_data">
            <div class="top_modal">
                <span>Formulir Simpanan</span>
            </div>
            <div class="context">
                <form id="tambahdatatunggal" method="POST">
                    <div class="data_form" id="data-detail-anggota">
                        <div class="input-data">
                            <span class="span-1">Nama Nasabah</span>
                            <span class="span-2">:</span>
                            <div class="wrapper">
                                <div class="select-btn">
                                    <span>Pilih Nasabah</span>
                                    <i class="uil uil-angle-down"></i>
                                </div>
                                <div class="content">
                                    <div class="search">
                                        <i class="uil uil-search"></i>
                                        <input spellcheck="false" type="text" placeholder="Search">
                                    </div>
                                    <ul class="options"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="input-data">
                            <span class="span-1">Jenis Simpanan</span>
                            <span class="span-2">:</span>
                            <div class="select-box">
                                <select name="jenis" id="jenis" class="">
                                    <option value="pokok">Simpanan Pokok</option>
                                    <option value="wajib">Simpanan Wajib</option>
                                    <option value="sukarela">Simpanan Sukarela</option>
                                </select>
                            </div> 
                        </div>
                        <div class="input-data">
                            <span class="span-1">Tanggal Pembayaran</span>
                            <span class="span-2">:</span>
                            <input type="datetime-local" name="tanggal" id="tanggal" class="form-control form-input-data input-date" required />
                        </div>
                        <div class="input-data">
                            <span class="span-1">Nominal Simpanan</span>
                            <span class="span-2">:</span>
                            <input type="number" name="jumlah" id="jumlah" class="form-control form-input-data" />
                        </div>
                        <div class="input-data">
                            <span class="span-1">Disetujui Oleh</span>
                            <span class="span-2">:</span>
                            <input type="text" name="pengelola" id="pengelola" value="{{ Auth()->User()->nama }}" class="form-control form-input-data" disabled />
                        </div>
                        <input type="hidden" name="nasabah_id" id="nasabah_id" >
                    </div>
                    <div class="lower_context">
                        <button type="button" id="cancel_data_tunggal" class="button_cancel_data_tunggal">Batalkan</button>
                        <button type="submit" id="confirm_data_tunggal" class="button_confirm_data_tunggal">Tambah</button>
                    </div>
                </form>
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
                    <span class="pesan-span">Hapus pengguna dari Sistem?</span>
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

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script type="text/javascript">
        flatpickr("#tanggal", {
            enableTime: true,
            dateFormat: "Y-m-d",
        })

        let simpanan = []; 
        let nasabah = [];
        let body_table = document.getElementById("body-table");

        function get_simpanan(){
            $.ajax({
                url: '/simpanan/array',
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
                    simpanan = response;
                    if(simpanan.length>0){
                        let num = 1;
                        simpanan.forEach(item => {
                            data.push( `<tr>
                                            <td>${num}</td>
                                            <td>${item.tanggal}</td>
                                            <td>${item.nama}</td>
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
                        body_table.innerHTML = data.join("");
                    }else{
                        body_table.innerHTML = `<tr><td colspan="7" ><div class="search-val"><span>Tidak ada data Simpanan saat ini</span></div></td></tr>`;
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }

        function get_nasabah(){
            $.ajax({
                url: '/simpanan/nasabah/array',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    nasabah = response;
                    addCountry();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }

        get_simpanan()
        get_nasabah()

        let searchInp = document.getElementById("search_simpanan")
        searchInp.addEventListener("keyup", () => {
            let searchWord = searchInp.value.toLowerCase();
            let filteredSimpanan = simpanan.filter(item => item.nama.toLowerCase().includes(searchWord));
            if(filteredSimpanan.length > 0){
                let data = []
                let num = 1;
                filteredSimpanan.forEach(item => {
                    data.push( `<tr>
                                    <td>${num}</td>
                                    <td>${item.tanggal}</td>
                                    <td>${item.nama}</td>
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
                body_table.innerHTML = '';
                body_table.innerHTML = data.join("");
            }else{
                body_table.innerHTML = '';
                body_table.innerHTML = `<tr><td colspan="6" ><div class="search-val"><span>Oops! Nama Pengguna <i>"${searchWord}"</i> tidak ditemukan</span></div></td></tr>`;
            }
        });

        let butt_tambah = document.getElementById("tambah-simpanan");
        let butt_cancel_data_tunggal = document.getElementById("cancel_data_tunggal");
        let card_data_tunggal = document.getElementById("card-data-tunggal");
        let modal_pilihan = document.getElementById("modal_pilihan");
        let modal_tambah_simpanan = document.getElementById("modal_tambah_simpanan");
        let modal_konfirmasi = document.getElementById("modal-konfirmasi");
        let butt_konfirmasi = document.getElementById("btn-konfirmasi");

        butt_tambah.addEventListener("click",()=>{
            modal_pilihan.style.display = "flex";
        })

        card_data_tunggal.addEventListener("click",()=>{
            modal_tambah_simpanan.style.display = "flex";
            modal_pilihan.style.display = "none";
        })
        butt_cancel_data_tunggal.addEventListener("click",()=>{
            modal_tambah_simpanan.style.display = "none";
        })

        window.addEventListener("click", (e) => {
            if (e.target == modal_pilihan) {
                modal_pilihan.style.display = 'none';
            }else if(e.target == modal_tambah_simpanan){
                modal_tambah_simpanan.style.display = 'none';
            }else if(e.target == modal_konfirmasi){
                modal_konfirmasi.style.display = 'none';
            }
        });

        $(document).on('submit', '#tambahdatatunggal', function (e) {
            e.preventDefault();
            let formData = {
                'nasabah_id': $("#nasabah_id").val(),
                'jenis': $("#jenis").val(),
                'jumlah' : $("#jumlah").val(),
                'tanggal' : $("#tanggal").val(),
                'pengelola': $("#pengelola").val(),
            };

            $.ajax({
                url: "/simpanan/create",
                method: "POST",
                dataType: "json",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('#tambahdatatunggal')[0].reset();
                    get_simpanan();
                    modal_tambah_simpanan.style.display = 'none';
                }
            });

        });

        $(document).on('click', '.deleteSimpananBtn', function (e) {
            modal_konfirmasi.style.display = 'flex';
            butt_konfirmasi.addEventListener("click", () => {
                var simpanan_id = $(this).val();
                $.ajax({
                    url: "/simpanan/delete",
                    method: "POST",
                    dataType: "json",
                    data: {
                        'id': simpanan_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        get_simpanan();
                        modal_konfirmasi.style.display = 'none';
                    }
                });
            })
        });

        // Code for search anggota
        const wrapper = document.querySelector(".wrapper"),
        selectBtn = wrapper.querySelector(".select-btn"),
        searchVal = wrapper.querySelector("input"),
        options = wrapper.querySelector(".options");

        function addCountry(selectedNasabah) {
            options.innerHTML = "";
            nasabah.forEach(item => {
                let isSelected = item.nama == selectedNasabah ? "selected" : "";
                let li = `<li onclick="updateName(this,${item.id})" class="${isSelected}">${item.nama}</li>`;
                options.insertAdjacentHTML("beforeend", li);
            });
        }

        function updateName(selectedLi, id) {
            searchVal.value = "";
            addCountry(selectedLi.innerText);
            wrapper.classList.remove("active");
            selectBtn.firstElementChild.innerText = selectedLi.innerText;
            $("#nasabah_id").val(id); 
        }

        searchVal.addEventListener("keyup", () => {
            let arr = [];
            let searchWord = searchVal.value.toLowerCase();
            arr = nasabah.filter(data=> {
                return data.nama.toLowerCase().includes(searchWord);
            }).map(data => {
                let isSelected = data.nama == selectBtn.firstElementChild.innerText ? "selected" : "";
                return `<li onclick="updateName(this,${data.id})" class="${isSelected}">${data.nama}</li>`;
            }).join("");
            options.innerHTML = arr ? arr : `<p style="margin-top: 10px;font-size:14px">Oops! <i>"${searchWord}"</i> Tidak ditemukan</p>`;
        });

        selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));

    </script>
@endsection