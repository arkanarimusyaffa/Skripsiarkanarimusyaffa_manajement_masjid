@extends('layouts.app')

@section('title', 'Ketua DKM Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Ketua DKM Dashboard</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Struktur Organisasi</h5>
            </div>
            <div class="card-body">
                <p>Lihat dan kelola struktur organisasi DKM.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Struktur</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Program Kerja</h5>
            </div>
            <div class="card-body">
                <p>Kelola program kerja dari setiap bidang.</p>
                <a href="#" class="btn btn-outline-success">Lihat Program</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Laporan Kegiatan</h5>
            </div>
            <div class="card-body">
                <p>Lihat laporan kegiatan setiap bidang.</p>
                <a href="#" class="btn btn-outline-info">Lihat Laporan</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Rapat DKM</h5>
            </div>
            <div class="card-body">
                <p>Jadwalkan dan kelola rapat DKM.</p>
                <a href="#" class="btn btn-outline-warning">Jadwal Rapat</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Laporan Keuangan</h5>
            </div>
            <div class="card-body">
                <p>Lihat laporan keuangan masjid.</p>
                <a href="#" class="btn btn-outline-danger">Lihat Keuangan</a>
            </div>
        </div>
    </div>
</div>
@endsection 