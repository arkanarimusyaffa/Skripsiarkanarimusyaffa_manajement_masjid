@extends('layouts.app')

@section('title', 'Bidang Sosial Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Bidang Sosial</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Bantuan Sosial</h5>
            </div>
            <div class="card-body">
                <p>Kelola program bantuan sosial untuk masyarakat.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Bantuan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Santunan</h5>
            </div>
            <div class="card-body">
                <p>Kelola program santunan untuk kaum dhuafa.</p>
                <a href="#" class="btn btn-outline-success">Kelola Santunan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Bakti Sosial</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan bakti sosial kemasyarakatan.</p>
                <a href="#" class="btn btn-outline-info">Kelola Baksos</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Data Penerima Bantuan</h5>
            </div>
            <div class="card-body">
                <p>Kelola data penerima bantuan sosial.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Data</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Donasi Sosial</h5>
            </div>
            <div class="card-body">
                <p>Kelola donasi untuk program sosial.</p>
                <a href="#" class="btn btn-outline-danger">Kelola Donasi</a>
            </div>
        </div>
    </div>
</div>
@endsection 