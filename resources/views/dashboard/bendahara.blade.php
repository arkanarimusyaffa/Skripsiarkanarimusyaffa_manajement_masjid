@extends('layouts.app')

@section('title', 'Bendahara Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Bendahara Dashboard</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Pemasukan</h5>
            </div>
            <div class="card-body">
                <p>Kelola data pemasukan masjid.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Pemasukan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Pengeluaran</h5>
            </div>
            <div class="card-body">
                <p>Kelola data pengeluaran masjid.</p>
                <a href="#" class="btn btn-outline-success">Kelola Pengeluaran</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Anggaran</h5>
            </div>
            <div class="card-body">
                <p>Kelola anggaran untuk kegiatan masjid.</p>
                <a href="#" class="btn btn-outline-info">Kelola Anggaran</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Laporan Keuangan</h5>
            </div>
            <div class="card-body">
                <p>Buat dan lihat laporan keuangan masjid.</p>
                <a href="#" class="btn btn-outline-warning">Lihat Laporan</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Donasi</h5>
            </div>
            <div class="card-body">
                <p>Kelola data donasi untuk masjid.</p>
                <a href="#" class="btn btn-outline-danger">Kelola Donasi</a>
            </div>
        </div>
    </div>
</div>
@endsection 