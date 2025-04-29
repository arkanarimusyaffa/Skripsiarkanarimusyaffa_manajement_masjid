@extends('layouts.app')

@section('title', 'Bidang Sarana Prasarana Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Bidang Sarana Prasarana</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Inventaris</h5>
            </div>
            <div class="card-body">
                <p>Kelola inventaris masjid.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Inventaris</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Pemeliharaan</h5>
            </div>
            <div class="card-body">
                <p>Kelola jadwal pemeliharaan sarana masjid.</p>
                <a href="#" class="btn btn-outline-success">Kelola Pemeliharaan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Renovasi</h5>
            </div>
            <div class="card-body">
                <p>Kelola program renovasi masjid.</p>
                <a href="#" class="btn btn-outline-info">Kelola Renovasi</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Pengadaan</h5>
            </div>
            <div class="card-body">
                <p>Kelola pengadaan sarana prasarana baru.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Pengadaan</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Laporan Kerusakan</h5>
            </div>
            <div class="card-body">
                <p>Kelola laporan kerusakan sarana masjid.</p>
                <a href="#" class="btn btn-outline-danger">Lihat Laporan</a>
            </div>
        </div>
    </div>
</div>
@endsection 