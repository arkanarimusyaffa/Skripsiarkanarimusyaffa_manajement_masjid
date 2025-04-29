@extends('layouts.app')

@section('title', 'Sekretaris Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Sekretaris Dashboard</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Surat Menyurat</h5>
            </div>
            <div class="card-body">
                <p>Kelola surat masuk dan keluar.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Surat</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Notulensi Rapat</h5>
            </div>
            <div class="card-body">
                <p>Kelola notulensi hasil rapat.</p>
                <a href="#" class="btn btn-outline-success">Lihat Notulensi</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Dokumentasi</h5>
            </div>
            <div class="card-body">
                <p>Kelola dokumentasi kegiatan masjid.</p>
                <a href="#" class="btn btn-outline-info">Lihat Dokumentasi</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Jadwal Kegiatan</h5>
            </div>
            <div class="card-body">
                <p>Kelola jadwal kegiatan masjid.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Jadwal</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Data Jamaah</h5>
            </div>
            <div class="card-body">
                <p>Kelola database jamaah masjid.</p>
                <a href="#" class="btn btn-outline-danger">Kelola Data</a>
            </div>
        </div>
    </div>
</div>
@endsection 