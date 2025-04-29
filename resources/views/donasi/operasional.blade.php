@extends('layouts.app')

@section('title', 'Donasi Operasional - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Donasi Operasional Masjid</h2>
        <p>Berkontribusi dalam kegiatan operasional masjid merupakan amal jariyah yang pahalanya akan terus mengalir.</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Form Donasi Operasional</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ route('donasi.operasional.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="amount" class="form-label">Jumlah Donasi (Rp)</label>
                        <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount') }}" min="1000" required>
                        @error('amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Metode Pembayaran</label>
                        <select class="form-select @error('payment_method') is-invalid @enderror" id="payment_method" name="payment_method" required>
                            <option value="" selected disabled>Pilih metode pembayaran</option>
                            <option value="transfer_bank" {{ old('payment_method') == 'transfer_bank' ? 'selected' : '' }}>Transfer Bank</option>
                            <option value="qris" {{ old('payment_method') == 'qris' ? 'selected' : '' }}>QRIS</option>
                            <option value="tunai" {{ old('payment_method') == 'tunai' ? 'selected' : '' }}>Tunai</option>
                        </select>
                        @error('payment_method')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan/Doa (Opsional)</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreement" required>
                        <label class="form-check-label" for="agreement">Saya menyatakan bahwa dana ini halal dan saya donasikan dengan ikhlas</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Donasi Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="card shadow mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Informasi Rekening</h5>
            </div>
            <div class="card-body">
                <p>Jika Anda ingin melakukan transfer langsung, berikut informasi rekening resmi masjid:</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Bank Syariah Indonesia (BSI)<br>No. Rek: 7890123456<br>A.n: Masjid Al-Barokah</li>
                    <li class="list-group-item">Bank BNI Syariah<br>No. Rek: 0123456789<br>A.n: Masjid Al-Barokah</li>
                </ul>
                <p class="mt-3 small text-muted">Mohon tambahkan kode "DO" di berita transfer untuk donasi operasional.</p>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Konfirmasi Donasi</h5>
            </div>
            <div class="card-body">
                <p>Jika Anda telah melakukan transfer, silakan konfirmasi melalui:</p>
                <p><i class="bi bi-whatsapp"></i> WhatsApp: 081234567890</p>
                <p><i class="bi bi-envelope"></i> Email: donasi@masjid.org</p>
            </div>
        </div>
    </div>
</div>
@endsection 