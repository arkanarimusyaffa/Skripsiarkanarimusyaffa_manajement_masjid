@extends('layouts.app')

@section('title', 'Bidang Dakwah Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Dashboard Bidang Dakwah</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Kajian Rutin</h5>
            </div>
            <div class="card-body">
                <p>Kelola jadwal kajian rutin masjid.</p>
                <a href="#" class="btn btn-outline-primary">Kelola Kajian</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Penceramah</h5>
            </div>
            <div class="card-body">
                <p>Kelola data penceramah/ustadz.</p>
                <a href="#" class="btn btn-outline-success">Kelola Penceramah</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Materi Dakwah</h5>
            </div>
            <div class="card-body">
                <p>Kelola materi-materi dakwah.</p>
                <a href="#" class="btn btn-outline-info">Kelola Materi</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Tabligh Akbar</h5>
            </div>
            <div class="card-body">
                <p>Kelola kegiatan tabligh akbar.</p>
                <a href="#" class="btn btn-outline-warning">Kelola Tabligh</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Media Dakwah</h5>
            </div>
            <div class="card-body">
                <p>Kelola media dakwah masjid (online & offline).</p>
                <a href="#" class="btn btn-outline-danger">Kelola Media</a>
            </div>
        </div>
    </div>
</div>
@endsection 