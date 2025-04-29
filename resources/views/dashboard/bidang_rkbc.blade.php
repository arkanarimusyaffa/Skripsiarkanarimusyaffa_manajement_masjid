@extends('layouts.app')

@section('title', 'Bidang RKBC Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Bidang RKBC (Remaja Kreatif Bukit Cemara)</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Program Remaja</h5>
            </div>
            <div class="card-body">
                <p>Kelola program-program remaja masjid.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Program</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Kegiatan Kreatif</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan kreatif remaja masjid.</p>
                <a href="#" class="btn btn-outline-success">Kelola Kegiatan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Anggota RKBC</h5>
            </div>
            <div class="card-body">
                <p>Kelola data anggota RKBC.</p>
                <a href="#" class="btn btn-outline-info">Lihat Anggota</a>
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
                <p>Kelola jadwal kegiatan RKBC.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Jadwal</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Pengembangan Minat & Bakat</h5>
            </div>
            <div class="card-body">
                <p>Kelola program pengembangan minat dan bakat remaja.</p>
                <a href="#" class="btn btn-outline-danger">Kelola Program</a>
            </div>
        </div>
    </div>
</div>
@endsection 