@extends('layouts.app')

@section('title', 'Bidang Pembinaan Remaja Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Bidang Pembinaan Remaja</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Program Pembinaan</h5>
            </div>
            <div class="card-body">
                <p>Kelola program pembinaan remaja masjid.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Program</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Kegiatan Remaja</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan-kegiatan remaja masjid.</p>
                <a href="#" class="btn btn-outline-success">Kelola Kegiatan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Data Remaja</h5>
            </div>
            <div class="card-body">
                <p>Kelola data remaja masjid.</p>
                <a href="#" class="btn btn-outline-info">Kelola Data</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Mentoring</h5>
            </div>
            <div class="card-body">
                <p>Kelola program mentoring remaja masjid.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Mentoring</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Pengembangan Bakat</h5>
            </div>
            <div class="card-body">
                <p>Kelola program pengembangan bakat remaja.</p>
                <a href="#" class="btn btn-outline-danger">Kelola Program</a>
            </div>
        </div>
    </div>
</div>
@endsection 