@extends('layouts.app')

@section('title', 'Bidang Pendidikan Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Bidang Pendidikan</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">TPA/TPQ</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan belajar TPA/TPQ.</p>
                <a href="#" class="btn btn-outline-primary">Kelola TPA/TPQ</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Madrasah Diniyah</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan madrasah diniyah.</p>
                <a href="#" class="btn btn-outline-success">Kelola Madrasah</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Tahsin & Tahfidz</h5>
            </div>
            <div class="card-body">
                <p>Kelola program tahsin dan tahfidz.</p>
                <a href="#" class="btn btn-outline-info">Kelola Program</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Data Santri</h5>
            </div>
            <div class="card-body">
                <p>Kelola data santri/siswa.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Data</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Data Pengajar</h5>
            </div>
            <div class="card-body">
                <p>Kelola data pengajar/guru.</p>
                <a href="#" class="btn btn-outline-danger">Kelola Pengajar</a>
            </div>
        </div>
    </div>
</div>
@endsection 