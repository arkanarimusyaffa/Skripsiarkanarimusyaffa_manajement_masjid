@extends('layouts.app')

@section('title', 'Patungan Sapi Qurban - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Patungan Sapi Qurban</h2>
        <p>Daftar patungan sapi qurban bersama 7 orang dengan mudah dan amanah.</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Form Pendaftaran Patungan Sapi Qurban</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ route('qurban.patungan.store') }}" method="POST">
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
                        <label for="atas_nama" class="form-label">Atas Nama (Untuk Didoakan)</label>
                        <input type="text" class="form-control @error('atas_nama') is-invalid @enderror" id="atas_nama" name="atas_nama" value="{{ old('atas_nama') }}" required>
                        <div class="form-text">Nama yang akan didoakan saat penyembelihan qurban.</div>
                        @error('atas_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="shares" class="form-label">Jumlah Bagian</label>
                        <select class="form-select @error('shares') is-invalid @enderror" id="shares" name="shares" required>
                            <option value="1" {{ old('shares') == '1' ? 'selected' : '' }}>1 bagian</option>
                            <option value="2" {{ old('shares') == '2' ? 'selected' : '' }}>2 bagian</option>
                            <option value="3" {{ old('shares') == '3' ? 'selected' : '' }}>3 bagian</option>
                            <option value="4" {{ old('shares') == '4' ? 'selected' : '' }}>4 bagian</option>
                            <option value="5" {{ old('shares') == '5' ? 'selected' : '' }}>5 bagian</option>
                            <option value="6" {{ old('shares') == '6' ? 'selected' : '' }}>6 bagian</option>
                            <option value="7" {{ old('shares') == '7' ? 'selected' : '' }}>7 bagian (seluruh sapi)</option>
                        </select>
                        <div class="form-text">Satu sapi dapat dibagi hingga 7 bagian. Pilih jumlah bagian yang Anda inginkan.</div>
                        @error('shares')
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
                        <label class="form-check-label" for="agreement">Saya setuju untuk berpatungan qurban dan telah memahami ketentuan yang berlaku</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Daftar Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="card shadow mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Informasi Patungan Sapi Qurban</h5>
            </div>
            <div class="card-body">
                <p class="fw-bold">Ketentuan Patungan Sapi Qurban:</p>
                <ul class="ps-3">
                    <li>Satu ekor sapi dapat diikuti maksimal 7 orang</li>
                    <li>Pembayaran dilakukan di muka sebagai tanda keseriusan</li>
                    <li>Biaya patungan untuk 1 bagian adalah Rp 2.500.000,-</li>
                    <li>Peserta patungan akan mendapatkan bagian daging sesuai porsi patungan</li>
                    <li>Sebagian daging akan didistribusikan kepada yang berhak</li>
                </ul>
                
                <p class="fw-bold mt-3">Estimasi Harga:</p>
                <table class="table table-bordered">
                    <tr>
                        <th>Jumlah Bagian</th>
                        <th>Total Biaya</th>
                    </tr>
                    <tr>
                        <td>1 bagian</td>
                        <td>Rp 2.500.000</td>
                    </tr>
                    <tr>
                        <td>2 bagian</td>
                        <td>Rp 5.000.000</td>
                    </tr>
                    <tr>
                        <td>7 bagian</td>
                        <td>Rp 17.500.000</td>
                    </tr>
                </table>
                
                <p class="mt-3 small text-muted">*Harga dapat berubah sesuai dengan harga hewan qurban pada saat Idul Adha.</p>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Informasi Kontak</h5>
            </div>
            <div class="card-body">
                <p>Untuk informasi lebih lanjut, silakan hubungi:</p>
                <p><i class="bi bi-whatsapp"></i> WhatsApp: 081234567890</p>
                <p><i class="bi bi-envelope"></i> Email: qurban@masjid.org</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sharesSelect = document.getElementById('shares');
        
        sharesSelect.addEventListener('change', function() {
            const shares = parseInt(this.value);
            const estimatedPrice = shares * 2500000;
            
            if (!isNaN(estimatedPrice)) {
                alert(`Estimasi biaya untuk ${shares} bagian: Rp ${estimatedPrice.toLocaleString('id-ID')}`);
            }
        });
    });
</script>
@endsection 