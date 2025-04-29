@extends('layouts.app')

@section('title', 'Admin Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Admin Dashboard</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Manajemen Pengguna</h5>
            </div>
            <div class="card-body">
                <p>Kelola pengguna sistem manajemen masjid.</p>
                <a href="#" class="btn btn-outline-primary">Lihat Pengguna</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Laporan Keuangan</h5>
            </div>
            <div class="card-body">
                <p>Akses laporan keuangan masjid.</p>
                <a href="#" class="btn btn-outline-success">Lihat Laporan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Jadwal Kegiatan</h5>
            </div>
            <div class="card-body">
                <p>Kelola jadwal kegiatan masjid.</p>
                <a href="#" class="btn btn-outline-info">Lihat Jadwal</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Pengumuman</h5>
            </div>
            <div class="card-body">
                <p>Kelola pengumuman masjid.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Pengumuman</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Pengaturan Sistem</h5>
            </div>
            <div class="card-body">
                <p>Akses pengaturan sistem manajemen masjid.</p>
                <a href="#" class="btn btn-outline-danger">Pengaturan</a>
            </div>
        </div>
    </div>
</div>
@endsection 