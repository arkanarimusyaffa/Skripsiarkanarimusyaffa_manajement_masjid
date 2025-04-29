@extends('layouts.app')

@section('title', 'Register - Manajemen Masjid')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card auth-card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Register</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required>
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2" required>{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Posisi</label>
                        <select class="form-select @error('position') is-invalid @enderror" id="position" name="position" required>
                            <option value="" disabled {{ old('position') ? '' : 'selected' }}>Pilih Posisi</option>
                            <option value="admin" {{ old('position') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Ketua DKM" {{ old('position') == 'Ketua DKM' ? 'selected' : '' }}>Ketua DKM</option>
                            <option value="SEKRETARIS" {{ old('position') == 'SEKRETARIS' ? 'selected' : '' }}>Sekretaris</option>
                            <option value="BENDAHARA" {{ old('position') == 'BENDAHARA' ? 'selected' : '' }}>Bendahara</option>
                            <option value="Imam Masjid" {{ old('position') == 'Imam Masjid' ? 'selected' : '' }}>Imam Masjid</option>
                            <option value="Jamaah" {{ old('position') == 'Jamaah' ? 'selected' : '' }}>Jamaah</option>
                            <option value="Bidang-BidangRKBC" {{ old('position') == 'Bidang-BidangRKBC' ? 'selected' : '' }}>Bidang RKBC</option>
                            <option value="Bidang Sosial" {{ old('position') == 'Bidang Sosial' ? 'selected' : '' }}>Bidang Sosial</option>
                            <option value="Bidang Dakwah" {{ old('position') == 'Bidang Dakwah' ? 'selected' : '' }}>Bidang Dakwah</option>
                            <option value="Bidang Pembinaan Remaja" {{ old('position') == 'Bidang Pembinaan Remaja' ? 'selected' : '' }}>Bidang Pembinaan Remaja</option>
                            <option value="Bidang Sarana prasana" {{ old('position') == 'Bidang Sarana prasana' ? 'selected' : '' }}>Bidang Sarana Prasarana</option>
                            <option value="Bidang Pendidikan" {{ old('position') == 'Bidang Pendidikan' ? 'selected' : '' }}>Bidang Pendidikan</option>
                            <option value="Bidang PHBI" {{ old('position') == 'Bidang PHBI' ? 'selected' : '' }}>Bidang PHBI</option>
                            <option value="Bidang Perlengkapan" {{ old('position') == 'Bidang Perlengkapan' ? 'selected' : '' }}>Bidang Perlengkapan</option>
                        </select>
                        @error('position')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
</div>
@endsection 