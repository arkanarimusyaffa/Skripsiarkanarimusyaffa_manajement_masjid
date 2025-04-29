@extends('layouts.app')

@section('title', 'Bidang PHBI Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Bidang PHBI (Peringatan Hari Besar Islam)</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Ramadhan</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan bulan suci Ramadhan.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Ramadhan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Idul Fitri</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan Idul Fitri.</p>
                <a href="#" class="btn btn-outline-success">Kelola Idul Fitri</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Idul Adha</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan Idul Adha dan Qurban.</p>
                <a href="#" class="btn btn-outline-info">Kelola Idul Adha</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Maulid</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan peringatan Maulid Nabi.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Maulid</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Peringatan Lainnya</h5>
            </div>
            <div class="card-body">
                <p>Kelola peringatan hari besar Islam lainnya.</p>
                <a href="#" class="btn btn-outline-danger">Kelola Peringatan</a>
            </div>
        </div>
    </div>
</div>
@endsection 