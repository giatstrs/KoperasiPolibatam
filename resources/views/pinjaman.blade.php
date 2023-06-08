@extends('layout.main')

@section('container')
    <link rel="stylesheet" type="text/css" href="css/stylepinjaman.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="odes-text">Daftar Pinjaman</div>
    <div class="container mt-4" id="container-odes-text">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="filter-section">
                            <label>
                                <input type="radio" class="filter-radio" name="filter-pinjaman" value="1" checked="">
                                <i class="fa-solid fa-check check-icon"></i>
                                <span>Semua</span>
                            </label>
                            <label>
                                <input type="radio" class="filter-radio" name="filter-pinjaman" value="2">
                                <i class="fa-solid fa-check check-icon"></i>
                                <span>Urgent</span>
                            </label>
                            <label>
                                <input type="radio" class="filter-radio" name="filter-pinjaman" value="3">
                                <i class="fa-solid fa-check check-icon"></i>
                                <span>Biasa</span>
                            </label>
                            <label>
                                <input type="radio" class="filter-radio" name="filter-pinjaman" value="4">
                                <i class="fa-solid fa-check check-icon"></i>
                                <span>Khusus</span>
                            </label>
                        </div>
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">

        // let filter = document.get
        $("#card-body").html(`<span>Seluruh Data Pinjaman</span>`)      
        $(document).on('click', '.filter-radio', function () {
            const filter_value = $(this).val();
            if(filter_value == 1){
                $("#card-body").html(`<span>Seluruh Data Pinjaman</span>`)     
            }else if(filter_value == 2){
                $("#card-body").html(`<span>Data Pinjaman Urgent(Mendesak)</span>`)     
            }else if(filter_value == 3){
                $("#card-body").html(`<span>Data Pinjaman Konsumtif Biasa</span>`)     
            }else if(filter_value == 4){
                $("#card-body").html(`<span>Data Pinjaman Konsumtif Khusus</span>`)     
            }
        });
    </script>
@endsection