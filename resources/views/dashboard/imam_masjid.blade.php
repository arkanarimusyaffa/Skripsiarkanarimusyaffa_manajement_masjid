@extends('layouts.app')

@section('title', 'Imam Masjid Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Imam Masjid Dashboard</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Jadwal Sholat</h5>
            </div>
            <div class="card-body">
                <p>Kelola jadwal sholat lima waktu.</p>
                <a href="#" class="btn btn-outline-primary">Lihat Jadwal</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Kajian Rutin</h5>
            </div>
            <div class="card-body">
                <p>Kelola jadwal kajian rutin masjid.</p>
                <a href="#" class="btn btn-outline-success">Kelola Kajian</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Khutbah Jumat</h5>
            </div>
            <div class="card-body">
                <p>Kelola jadwal khatib khutbah Jumat.</p>
                <a href="#" class="btn btn-outline-info">Jadwal Khatib</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Bimbingan Keagamaan</h5>
            </div>
            <div class="card-body">
                <p>Kelola jadwal bimbingan keagamaan.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Bimbingan</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Ramadhan</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan ibadah bulan Ramadhan.</p>
                <a href="#" class="btn btn-outline-danger">Kelola Ramadhan</a>
            </div>
        </div>
    </div>
</div>
@endsection