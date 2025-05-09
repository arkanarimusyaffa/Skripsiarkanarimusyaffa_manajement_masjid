@extends('layouts.app')

@section('title', 'Jamaah Dashboard - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Jamaah Dashboard</h2>
        <p>Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->position }})</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Jadwal Kegiatan</h5>
            </div>
            <div class="card-body">
                <p>Lihat jadwal kegiatan masjid.</p>
                <a href="#" class="btn btn-outline-primary">Lihat Jadwal</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Pengumuman</h5>
            </div>
            <div class="card-body">
                <p>Lihat pengumuman terbaru masjid.</p>
                <a href="#" class="btn btn-outline-success">Lihat Pengumuman</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Donasi</h5>
            </div>
            <div class="card-body">
                <p>Berikan donasi untuk masjid.</p>
                <a href="#" class="btn btn-outline-info">Donasi Sekarang</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Kegiatan Sosial</h5>
            </div>
            <div class="card-body">
                <p>Lihat dan ikuti kegiatan sosial masjid.</p>
                <a href="#" class="btn btn-outline-warning">Lihat Kegiatan</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Kajian & Pembelajaran</h5>
            </div>
            <div class="card-body">
                <p>Akses materi kajian dan pembelajaran.</p>
                <a href="#" class="btn btn-outline-danger">Lihat Materi</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Customer service</h5>
            </div>
            <div class="card-body">
                <p>berikan informasi keluhan</p>
                <div class="text-center">
                    <a href="{{ route('chat.index') }}" class="btn btn-outline-secondary">Buka Chatbot</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 