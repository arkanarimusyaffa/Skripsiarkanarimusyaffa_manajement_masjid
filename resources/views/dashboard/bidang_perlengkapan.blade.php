@extends('layouts.app')

@section('title', 'Bidang Perlengkapan Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Bidang Perlengkapan</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Inventory</h5>
            </div>
            <div class="card-body">
                <p>Kelola inventory perlengkapan masjid.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Inventory</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Pemeliharaan</h5>
            </div>
            <div class="card-body">
                <p>Kelola pemeliharaan perlengkapan.</p>
                <a href="#" class="btn btn-outline-success">Kelola Pemeliharaan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Pengadaan</h5>
            </div>
            <div class="card-body">
                <p>Kelola pengadaan perlengkapan baru.</p>
                <a href="#" class="btn btn-outline-info">Kelola Pengadaan</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Peminjaman</h5>
            </div>
            <div class="card-body">
                <p>Kelola peminjaman perlengkapan masjid.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Peminjaman</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Laporan Kerusakan</h5>
            </div>
            <div class="card-body">
                <p>Kelola laporan kerusakan perlengkapan masjid.</p>
                <a href="#" class="btn btn-outline-danger">Lihat Laporan</a>
            </div>
        </div>
    </div>
</div>
@endsection 