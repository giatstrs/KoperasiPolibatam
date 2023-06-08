@extends('layout.main')

@section('container')
    <link rel="stylesheet" href="css/styledashboard.css">
    <div class="odes-text">Dashboard</div>
    <div class="container mt-4">
        <div class="dashboard-wrapper">
            <div class="stat-info-container">
                <div class="grafik-container">
                    <div class="data-grafik">
                        <canvas id="myChart" style="height: 200px; width: 100%;"></canvas>
                    </div>
                    <div class="data-grafik">
                        <canvas id="myChart2" style="height: 200px; width: 100%;"></canvas>
                    </div>
                </div>
                <div class="stat-info-data">
                    <div class="stat-info-box info-pemasukan">
                        <span class="stat-info-title">Total Pemasukan</span>
                        <span class="stat-info-detail">12 Juni 2023</span>
                        <div class="stat-info-money">
                            <i class="fa-solid fa-rupiah-sign"></i>
                            <span class="stat-info-total">12.000.000</span>
                        </div>
                    </div>
                    <div class="stat-info-box info-pengeluaran">
                        <span class="stat-info-title">Total Pengeluaran</span>
                        <span class="stat-info-detail">12 Juni 2023</span>
                        <div class="stat-info-money">
                            <i class="fa-solid fa-rupiah-sign"></i>
                            <span class="stat-info-total">-12.000.000</span>
                        </div>
                    </div>
                    <div class="stat-info-box info-saldo">
                        <span class="stat-info-title">Total Saldo</span>
                        <span class="stat-info-detail">12 Juni 2023</span>
                        <div class="stat-info-money">
                            <i class="fa-solid fa-rupiah-sign"></i>
                            <span class="stat-info-total">12.000.000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-nasabah-container">
                <div class="data-top-nasabah">
                    <div class="head-top-nasabah">
                        <span>Top Nasabah</span>
                    </div>
                    <div class="body-top-nasabah">
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-crown rank-1"></i>
                                <span class="sequence">1</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                        <div class="data-rank">
                                <i class="fa-solid fa-crown rank-2"></i>
                                <span class="sequence">2</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-crown rank-3"></i>
                                <span class="sequence">3</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-shield rank-4"></i>
                                <span class="sequence-shield">4</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-shield rank-4"></i>
                                <span class="sequence-shield">5</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-shield rank-4"></i>
                                <span class="sequence-shield">6</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-shield rank-4"></i>
                                <span class="sequence-shield">7</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-shield rank-4"></i>
                                <span class="sequence-shield">8</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-shield rank-4"></i>
                                <span class="sequence-shield">9</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                        <div class="data-sequence">
                            <div class="data-rank">
                                <i class="fa-solid fa-shield rank-4"></i>
                                <span class="sequence-shield-2">10</span>
                            </div>
                            <div class="detail-informasi">
                                <span>Nama Anggota</span>
                                <span>Tabungan : -</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const myChart = new Chart(document.getElementById('myChart'), {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [
                    {
                    label: 'Simpanan',
                    data: [10, 20, 30, 25, 15, 35],
                    borderColor: 'rgb(75, 192, 192)',
                    fill: false
                    }
                ]
            },
            options: {}
        });

        const myChart2 = new Chart(document.getElementById('myChart2'), {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [
                    {
                    label: 'Pinjaman',
                    data: [40, 33, 10, 25, 7, 35],
                    borderColor: 'rgb(75, 192, 192)',
                    fill: false
                    }
                ]
            },
            options: {}
        });

    </script>
@endsection