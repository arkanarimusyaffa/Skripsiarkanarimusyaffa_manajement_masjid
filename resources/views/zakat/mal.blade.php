@extends('layouts.app')

@section('title', 'Zakat Mal - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Zakat Mal (Zakat Harta)</h2>
        <p>Menunaikan zakat adalah kewajiban bagi setiap muslim yang telah memenuhi syarat (nisab).</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Form Pembayaran Zakat Mal</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ route('zakat.mal.store') }}" method="POST">
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
                        <label for="asset_type" class="form-label">Jenis Harta</label>
                        <select class="form-select @error('asset_type') is-invalid @enderror" id="asset_type" name="asset_type" required>
                            <option value="" selected disabled>Pilih jenis harta</option>
                            <option value="emas" {{ old('asset_type') == 'emas' ? 'selected' : '' }}>Emas/Perak</option>
                            <option value="uang" {{ old('asset_type') == 'uang' ? 'selected' : '' }}>Uang Simpanan</option>
                            <option value="perdagangan" {{ old('asset_type') == 'perdagangan' ? 'selected' : '' }}>Perdagangan</option>
                            <option value="pertanian" {{ old('asset_type') == 'pertanian' ? 'selected' : '' }}>Pertanian</option>
                            <option value="peternakan" {{ old('asset_type') == 'peternakan' ? 'selected' : '' }}>Peternakan</option>
                            <option value="profesi" {{ old('asset_type') == 'profesi' ? 'selected' : '' }}>Penghasilan/Profesi</option>
                            <option value="investasi" {{ old('asset_type') == 'investasi' ? 'selected' : '' }}>Investasi</option>
                        </select>
                        @error('asset_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="amount" class="form-label">Jumlah Zakat (Rp)</label>
                        <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount') }}" min="10000" required>
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
                        <label class="form-check-label" for="agreement">Saya menyatakan bahwa harta ini telah mencapai nisab dan haul</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Bayar Zakat Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="card shadow mb-4">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Informasi Zakat Mal</h5>
            </div>
            <div class="card-body">
                <p class="fw-bold">Syarat Zakat Mal:</p>
                <ol class="ps-3">
                    <li>Muslim</li>
                    <li>Merdeka</li>
                    <li>Kepemilikan penuh</li>
                    <li>Mencapai nisab</li>
                    <li>Telah mencapai haul (1 tahun)</li>
                </ol>
                
                <p class="fw-bold mt-3">Nisab Zakat Mal:</p>
                <ul class="ps-3">
                    <li>Emas: 85 gram emas</li>
                    <li>Perak: 595 gram perak</li>
                    <li>Perdagangan: Setara 85 gram emas</li>
                    <li>Pertanian: 653 kg</li>
                    <li>Profesi: Setara 85 gram emas</li>
                </ul>
                
                <p class="mt-3">Kadar zakat umumnya 2,5% dari total harta yang telah mencapai nisab dan haul.</p>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Kalkulator Zakat</h5>
            </div>
            <div class="card-body">
                <p>Untuk menghitung zakat mal Anda:</p>
                <div class="input-group mb-3">
                    <input type="number" id="harta" class="form-control" placeholder="Total harta (Rp)" min="0">
                </div>
                <div class="d-grid">
                    <button id="hitung-zakat" class="btn btn-info">Hitung Zakat</button>
                </div>
                <div id="hasil-zakat" class="mt-3 fw-bold text-center d-none">
                    Zakat yang harus dibayarkan: <span id="jumlah-zakat">0</span> Rupiah
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hitungZakatBtn = document.getElementById('hitung-zakat');
        const hasilZakat = document.getElementById('hasil-zakat');
        const jumlahZakat = document.getElementById('jumlah-zakat');
        const hartaInput = document.getElementById('harta');
        const amountInput = document.getElementById('amount');
        
        hitungZakatBtn.addEventListener('click', function() {
            const harta = parseFloat(hartaInput.value);
            if (isNaN(harta) || harta <= 0) {
                alert('Masukkan jumlah harta yang valid');
                return;
            }
            
            // Hitung zakat (2.5%)
            const zakat = harta * 0.025;
            
            // Tampilkan hasil
            jumlahZakat.textContent = zakat.toLocaleString('id-ID');
            hasilZakat.classList.remove('d-none');
            
            // Isi otomatis field jumlah zakat pada form
            amountInput.value = Math.round(zakat);
        });
    });
</script>
@endsection 