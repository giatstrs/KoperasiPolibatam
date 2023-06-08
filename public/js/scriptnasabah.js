let butt_tambah = document.getElementById("tambah")
let modal_export = document.getElementById("modal_export")
let modal_data = document.getElementById("modal_data")
let modal_pilihan = document.getElementById("modal_pilihan")
let modal_data_tunggal = document.getElementById('modal_data_tunggal')
let modal_view_simpanan_anggota = document.getElementById('modal_view_simpanan_anggota')
let modal_view_anggota = document.getElementById('modal_view_anggota')
let butt_remove = document.getElementById("remove")
let butt_load = document.getElementById("load")
let butt_cancel = document.getElementById("cancel")
let butt_import = document.getElementById("import")

let butt_cancel_data_tunggal = document.getElementById("cancel_data_tunggal")
let butt_confirm_data_tunggal = document.getElementById("confirm_data_tunggal")

let butt_close_detail_anggota = document.getElementById("tutup_detail_anggota")
let butt_ubah_detail_anggota = document.getElementById("ubah_detail_anggota")
let butt_simpan_detail_anggota = document.getElementById("simpan_detail_anggota")
let butt_tutup_simpanan_anggota = document.getElementById("tutup_simpanan_anggota")

let detail_data_anggota = document.getElementById("detail_data_anggota")
let form_detail_data_anggota = document.getElementById("form_detail_data_anggota")

butt_ubah_detail_anggota.addEventListener("click", () => {
    butt_simpan_detail_anggota.style.display = 'flex';
    butt_ubah_detail_anggota.style.display = 'none';
    form_detail_data_anggota.style.display = 'flex';
    detail_data_anggota.style.display = 'none';
})
butt_close_detail_anggota.addEventListener("click", () => {
    modal_view_anggota.style.display = "none";
    butt_simpan_detail_anggota.style.display = 'none';
    butt_ubah_detail_anggota.style.display = 'flex';
    form_detail_data_anggota.style.display = 'none';
    detail_data_anggota.style.display = 'flex';
})

butt_tutup_simpanan_anggota.addEventListener("click",()=>{
    modal_view_simpanan_anggota.style.display = 'none';
})


let data_tunggal = document.getElementById("card-data-tunggal")
let data_kelompok = document.getElementById("card-data-kelompok")

data_tunggal.addEventListener("click", () => {
    modal_data_tunggal.style.display = 'flex';
    modal_pilihan.style.display = 'none';
})

data_kelompok.addEventListener("click", () => {
    modal_export.style.display = 'flex';
    modal_pilihan.style.display = 'none';
})
butt_tambah.addEventListener("click", () => {
    modal_pilihan.style.display = 'flex';
})

butt_cancel_data_tunggal.addEventListener("click", () => {
    modal_data_tunggal.style.display = 'none';
})
// butt_load.addEventListener("click",()=>{
//     modal_data.style.display = 'flex';
// })

butt_cancel.addEventListener("click", () => {
    modal_data.style.display = 'none';
    let row = document.getElementsByClassName('inrow')
    row[0].remove()
    file_qty = 0
    document.getElementById("file").value = null;
})

window.addEventListener("click", (e) => {
    if (e.target == modal_export) {
        modal_export.style.display = 'none';
    } else if (e.target == modal_data) {
        modal_data.style.display = 'none';
    } else if (e.target == modal_data_tunggal) {
        modal_data_tunggal.style.display = 'none';
    } else if (e.target == modal_pilihan) {
        modal_pilihan.style.display = 'none';
    } else if (e.target == modal_view_anggota) {
        modal_view_anggota.style.display = 'none';
    }else if(e.target == modal_view_simpanan_anggota){
        modal_view_simpanan_anggota.style.display ='none';
    }
})

butt_remove.addEventListener("click", () => {
    let row = document.getElementsByClassName('inrow')
    row[0].remove()
    file_qty = 0
    document.getElementById("file").value = null;
})

// let form = document.querySelector("form")
let form = document.getElementById("form")
let fileInput = document.querySelector(".file-input")
let progressArea = document.querySelector(".progress-area")
let uploadedArea = document.querySelector(".uploaded-area")
let file_qty = 0

// **************** Filter Nasabah

flatpickr("#add_tgl_masuk_perusahaan", {
    enableTime: true,
    dateFormat: "Y-m-d",
})
flatpickr("#add_menempati_sejak", {
    enableTime: true,
    dateFormat: "Y-m-d",
})
let status_perkawinan = document.getElementById("add_status_perkawinan")
let nama_pasangan = document.getElementById("add_nama_pasangan")
let jumlah_anak = document.getElementById("add_jumlah_anak")

nama_pasangan.disabled = true;
jumlah_anak.disabled = true;
$(document).on("change", "#add_status_perkawinan", function () {
    if (status_perkawinan.value == 'belum_menikah') {
        nama_pasangan.disabled = true;
        nama_pasangan.value = '';
        jumlah_anak.disabled = true;
        jumlah_anak.value = '';
        nama_pasangan.required = false;
        jumlah_anak.required = false;
    } else {
        nama_pasangan.disabled = false;
        jumlah_anak.disabled = false;
        nama_pasangan.required = true;
        jumlah_anak.required = true;
    }
})

flatpickr("#tanggal", {
    enableTime: true,
    dateFormat: "Y-m-d",
})

flatpickr("#input_tgl_masuk_perusahaan", {
    enableTime: true,
    dateFormat: "Y-m-d",
})

flatpickr("#input_menempati_sejak", {
    enableTime: true,
    dateFormat: "Y-m-d",
})
let input_status_perkawinan = document.getElementById("input_status_perkawinan")
let input_nama_pasangan = document.getElementById("input_nama_pasangan")
let input_jumlah_anak = document.getElementById("input_jumlah_anak")

$(document).on("change", "#input_status_perkawinan", function () {
    if (input_status_perkawinan.value == 'belum_menikah' || input_status_perkawinan.value == 'lainnya' ) {
        input_nama_pasangan.disabled = true;
        input_nama_pasangan.value = '';
        input_jumlah_anak.disabled = true;
        input_jumlah_anak.value = '';
     } else {
        input_nama_pasangan.disabled = false;
        input_jumlah_anak.disabled = false;
    }
})

form.addEventListener("click", () => {
    fileInput.click();
});

fileInput.onchange = ({ target }) => {
    let file = target.files[0];
    if (file_qty == 0 && file) {
        let fileName = file.name;
        if (fileName.length >= 12) {
            let splitName = fileName.split('.');
            fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
        }
        uploadFile(fileName);
        file_qty = 1;
    }
}

function uploadFile(name) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "");
    xhr.upload.addEventListener("progress", ({ loaded, total }) => {
        let fileLoaded = Math.floor((loaded / total) * 100);
        let fileTotal = Math.floor(total / 1000);
        let fileSize;
        (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB";
        let progressHTML = `<li class="inrow">
                                    <i class="fas fa-file-alt"></i>
                                    <div class="incontent">
                                        <div class="details">
                                        <span class="name">${name} • Uploading</span>
                                        <span class="percent">${fileLoaded}%</span>
                                        </div>
                                        <div class="progress-bar">
                                        <div class="progress" style="width: ${fileLoaded}%"></div>
                                        </div>
                                    </div>
                                    </li>`;
        uploadedArea.classList.add("onprogress");
        progressArea.innerHTML = progressHTML;
        if (loaded == total) {
            progressArea.innerHTML = "";
            let uploadedHTML = `<li class="inrow">
                                            <div class="incontent upload">
                                            <i class="fas fa-file-alt"></i>
                                            <div class="details">
                                                <span class="name">${name} • Uploaded</span>
                                                <span class="size">${fileSize}</span>
                                            </div>
                                            </div>
                                            <i class="fas fa-check"></i>
                                        </li>`;
            uploadedArea.classList.remove("onprogress");
            uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
        }
    });

    let data = new FormData(form);
    xhr.send(data);
}

// butt_load.addEventListener("click",()=>{
//     modal_data.style.display = 'flex';

// })

$(butt_load).click(function () {
    var data = new FormData();
    data.append('file', $("#file")[0].files[0]);
    $.ajax({
        url: "/nasabah/read_file",
        method: "POST",
        dataType: "text",
        data: data,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function() {
            modal_data.style.display = 'flex';
            $('.upper_context').html( `
                            <div class="loader-container loader-read-file">
                                <div class="loader">
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                </div>
                                <span class="loader-text">Loading</span>
                            </div>`);
        },
        success: function (response) {
            $('.upper_context').html(response);
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
            alert('Error: ' + xhr.responseText);
        }
    });
});

// Tambah Data Tunggal Anggota
let form_tunggal = document.getElementById('tambahdatatunggal');
$(document).on('submit', '#tambahdatatunggal', function (e) {
    e.preventDefault();
    let inputs = form_tunggal.querySelectorAll('input, select, textarea');  
    let formData = {};
    
    inputs.forEach(input => {
        formData[input.name] = input.value;
        console.log(input.name + ' = ' + input.value)
    });
    var jenisKelamin = $('input[name="add_jenis_kelamin"]:checked').val();
    formData["add_jenis_kelamin"] = jenisKelamin;

    $.ajax({
        url: "/nasabah/create",
        method: "POST",
        dataType: "json",
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            $('#tambahdatatunggal')[0].reset();
            get_nasabah();
            modal_data_tunggal.style.display = 'none';
        }
    });

});

//  View data Anggota
$(document).on('click', '.viewNasabahBtn', function () {
    var nasabah_id = $(this).val();
    $.ajax({
        url: "/nasabah/read",
        method: "GET",
        dataType: "json",
        data: { id: nasabah_id },
        success: function (response) {
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
                $("#input_nama_pasangan").prop('disabled', true);
                $("#input_jumlah_anak").prop('disabled', true);
            }else if(response.status_kawin == 'sudah_menikah'){
                $('#view_status_perkawinan').text("Sudah Menikah");
                $("#input_nama_pasangan").prop('disabled', false);
                $("#input_jumlah_anak").prop('disabled', false);
            }else if(response.status_kawin == 'janda_duda'){
                $("#input_nama_pasangan").prop('disabled', true);
                $("#input_jumlah_anak").prop('disabled', false);
                $('#view_status_perkawinan').text("Janda/Duda");
            }else if(response.status_kawin == 'lainnya'){
                $('#view_status_perkawinan').text("Lainnya");
                $("#input_nama_pasangan").prop('disabled', true);
                $("#input_jumlah_anak").prop('disabled', true);
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
            
            $('#input_nama').val(response.nama);
            $('#input_email').val(response.email);
            $('#input_nasabah_id').val(response.id);
            $('#input_tanggal_bergabung').val(response.tanggal_bergabung);
            $('#input_no_ktp').val(response.no_ktp);
            $('#input_masa_berlaku_ktp').val(response.masa_berlaku_ktp);
            $('#input_jenis_kelamin').val(response.jenis_kelamin);
            $('#input_tempat_lahir').val(response.tempat_tanggal_lahir);
            $('#input_alamat_ktp').val(response.alamat_ktp);
            $('#input_alamat_tak_sesuai_ktp').val(response.alamat);
            $('#input_no_telepon').val(response.no_telp);
            $('#input_no_telepon_rumah').val(response.no_telp_rumah);
            $('#input_status_tempat_tinggal').val(response.status_tempat_tinggal);
            $('#input_menempati_sejak').val(response.tinggal_sejak);
            $('#input_pendidikan_terakhir').val(response.pendidikan_terakhir);
            $('#input_status_perkawinan').val(response.status_kawin);
            $('#input_nama_pasangan').val(response.nama_pasangan);
            $('#input_jumlah_anak').val(response.jumlah_anak);
            $('#input_nama_ibu_kandung').val(response.nama_ibu_kandung);
            $('#input_npwp_pribadi').val(response.npwp_pribadi);
            $('#input_nama_ahli_waris').val(response.nama_ahli_waris);
            $('#input_hub_ahli_waris').val(response.hubungan_ahli_waris);
            $('#input_no_telp_ext_kantor').val(response.no_telp_kantor);
            $('#input_nik').val(response.nik);
            $('#input_no_rek_bni').val(response.no_rek);
            $('#input_jabatan').val(response.jabatan);
            $('#input_tgl_masuk_perusahaan').val(response.tgl_mulai_bekerja);
            $('#input_status_karyawan').val(response.status_karyawan);
            if(response.status_anggota == 1){
                $('#input_status_anggota').prop('checked', true)
            }else{
                $('#input_status_anggota').prop('checked', false)
            }
            modal_view_anggota.style.display = "flex";
        }
    });
});


// Update(simpan) Data Anggota
let form_update = document.getElementById('simpanviewdetailanggota');
$(document).on('submit', '#simpanviewdetailanggota', function (e) {
    e.preventDefault();

    var nasabah_id = $('#input_nasabah_id').val();
    let inputs = form_update.querySelectorAll('input, select, textarea');  
    let formData = {};
    
    inputs.forEach(input => {
        formData[input.name] = input.value;
        console.log(input.name + ' = ' + input.value)
    });

    var jenisKelamin = $('input[name="add_jenis_kelamin"]:checked').val();
    var statusAnggota = $('#input_status_anggota').is(':checked');
    let number = 1
    if(statusAnggota){
        number=1
    }else{
        number=0
    }

    formData["id"] = nasabah_id;
    formData["input_jenis_kelamin"] = jenisKelamin;
    formData["input_status_anggota"] = number;

    $.ajax({
        url: "/nasabah/update",
        method: "POST",
        dataType: "json",
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            $('#simpanviewdetailanggota')[0].reset();
            get_nasabah();
            $.ajax({
                url: "/nasabah/read",
                method: "GET",
                dataType: "json",
                data: { id: nasabah_id },
                success: function (response) {
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
                        $('#view_status_perkawinan').text("Janda/Duda");
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
                    
                    $('#input_nama').val(response.nama);
                    $('#input_email').val(response.email);
                    $('#input_nasabah_id').val(response.id);
                    $('#input_tanggal_bergabung').val(response.tanggal_bergabung);
                    $('#input_no_ktp').val(response.no_ktp);
                    $('#input_masa_berlaku_ktp').val(response.masa_berlaku_ktp);
                    $('#input_jenis_kelamin').val(response.jenis_kelamin);
                    $('#input_tempat_lahir').val(response.tempat_tanggal_lahir);
                    $('#input_alamat_ktp').val(response.alamat_ktp);
                    $('#input_alamat_tak_sesuai_ktp').val(response.alamat);
                    $('#input_no_telepon').val(response.no_telp);
                    $('#input_no_telepon_rumah').val(response.no_telp_rumah);
                    $('#input_status_tempat_tinggal').val(response.status_tempat_tinggal);
                    $('#input_menempati_sejak').val(response.tinggal_sejak);
                    $('#input_pendidikan_terakhir').val(response.pendidikan_terakhir);
                    $('#input_status_perkawinan').val(response.status_kawin);
                    $('#input_nama_pasangan').val(response.nama_pasangan);
                    $('#input_jumlah_anak').val(response.jumlah_anak);
                    $('#input_nama_ibu_kandung').val(response.nama_ibu_kandung);
                    $('#input_npwp_pribadi').val(response.npwp_pribadi);
                    $('#input_nama_ahli_waris').val(response.nama_ahli_waris);
                    $('#input_hub_ahli_waris').val(response.hubungan_ahli_waris);
                    $('#input_no_telp_ext_kantor').val(response.no_telp_kantor);
                    $('#input_nik').val(response.nik);
                    $('#input_no_rek_bni').val(response.no_rek);
                    $('#input_jabatan').val(response.jabatan);
                    $('#input_tgl_masuk_perusahaan').val(response.tgl_mulai_bekerja);
                    $('#input_status_karyawan').val(response.status_karyawan);
                    if(response.status_anggota == 1){
                        $('#input_status_anggota').prop('checked', true)
                    }else{
                        $('#input_status_anggota').prop('checked', false)
                    }
                    modal_view_anggota.style.display = "flex";
                }
            });
            butt_simpan_detail_anggota.style.display = 'none';
            butt_ubah_detail_anggota.style.display = 'flex';
            form_detail_data_anggota.style.display = 'none';
            detail_data_anggota.style.display = 'flex';
        }
    });

});

// Hapus data Anggota
let modal_konfirmasi = document.getElementById('modal-konfirmasi');
let butt_close_modal = document.getElementById('btn-close-modal');
let butt_konfirmasi = document.getElementById('btn-konfirmasi');

butt_close_modal.addEventListener("click", () => {
    modal_konfirmasi.style.display = 'none';
})
window.addEventListener("click", (e) => {
    if (e.target == modal_konfirmasi) {
        modal_konfirmasi.style.display = 'none';
    }
})
$(document).on('click', '.deleteNasabahBtn', function (e) {
    e.preventDefault();
    modal_konfirmasi.style.display = 'flex';

    butt_konfirmasi.addEventListener("click", () => {
        var nasabah_id = $(this).val();
        $.ajax({
            url: "/nasabah/delete",
            method: "POST",
            dataType: "json",
            data: {
                'id': nasabah_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                get_nasabah();
                modal_konfirmasi.style.display = 'none';
            }
        });
    })
});