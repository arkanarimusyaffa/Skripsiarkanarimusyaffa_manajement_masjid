<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\QurbanController;
use App\Http\Controllers\KegiatanController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Chatbot Routes
Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot.index');
Route::post('/chatbot/process', [ChatbotController::class, 'processMessage'])->name('chatbot.process');

// Donasi Routes
Route::get('/donasi/pembangunan', [DonasiController::class, 'pembangunan'])->name('donasi.pembangunan');
Route::post('/donasi/pembangunan', [DonasiController::class, 'storePembangunan'])->name('donasi.pembangunan.store');
Route::get('/donasi/harian', [DonasiController::class, 'harian'])->name('donasi.harian');
Route::post('/donasi/harian', [DonasiController::class, 'storeHarian'])->name('donasi.harian.store');
Route::get('/donasi/operasional', [DonasiController::class, 'operasional'])->name('donasi.operasional');
Route::post('/donasi/operasional', [DonasiController::class, 'storeOperasional'])->name('donasi.operasional.store');

// Zakat Routes
Route::get('/zakat/mal', [ZakatController::class, 'mal'])->name('zakat.mal');
Route::post('/zakat/mal', [ZakatController::class, 'storeMal'])->name('zakat.mal.store');
Route::get('/zakat/fitrah', [ZakatController::class, 'fitrah'])->name('zakat.fitrah');
Route::post('/zakat/fitrah', [ZakatController::class, 'storeFitrah'])->name('zakat.fitrah.store');

// Qurban Routes
Route::get('/qurban/individu', [QurbanController::class, 'individu'])->name('qurban.individu');
Route::post('/qurban/individu', [QurbanController::class, 'storeIndividu'])->name('qurban.individu.store');
Route::get('/qurban/patungan', [QurbanController::class, 'patungan'])->name('qurban.patungan');
Route::post('/qurban/patungan', [QurbanController::class, 'storePatungan'])->name('qurban.patungan.store');

// Kegiatan Routes
Route::get('/kegiatan/kajian', [KegiatanController::class, 'kajian'])->name('kegiatan.kajian');
Route::get('/kegiatan/sosial', [KegiatanController::class, 'sosial'])->name('kegiatan.sosial');
Route::get('/kegiatan/khusus', [KegiatanController::class, 'khusus'])->name('kegiatan.khusus');

// Dashboard Routes (protected by auth middleware)
Route::middleware(['auth'])->group(function () {
    // Admin Dashboard
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');

    // Ketua DKM Dashboard
    Route::get('/dashboard/ketua-dkm', [DashboardController::class, 'ketuaDKM'])->name('dashboard.ketua dkm');

    // Sekretaris Dashboard
    Route::get('/dashboard/sekretaris', [DashboardController::class, 'sekretaris'])->name('dashboard.sekretaris');

    // Bendahara Dashboard
    Route::get('/dashboard/bendahara', [DashboardController::class, 'bendahara'])->name('dashboard.bendahara');

    // Imam Masjid Dashboard
    Route::get('/dashboard/imam-masjid', [DashboardController::class, 'imamMasjid'])->name('dashboard.imam masjid');

    // Jamaah Dashboard
    Route::get('/dashboard/jamaah', [DashboardController::class, 'jamaah'])->name('dashboard.jamaah');

    // Bidang RKBC Dashboard
    Route::get('/dashboard/bidang-rkbc', [DashboardController::class, 'bidangRKBC'])->name('dashboard.bidang-bidangrkbc');

    // Bidang Sosial Dashboard
    Route::get('/dashboard/bidang-sosial', [DashboardController::class, 'bidangSosial'])->name('dashboard.bidang sosial');

    // Bidang Dakwah Dashboard
    Route::get('/dashboard/bidang-dakwah', [DashboardController::class, 'bidangDakwah'])->name('dashboard.bidang dakwah');

    // Bidang Pembinaan Remaja Dashboard
    Route::get('/dashboard/bidang-remaja', [DashboardController::class, 'bidangRemaja'])->name('dashboard.bidang pembinaan remaja');

    // Bidang Sarana & Prasarana Dashboard
    Route::get('/dashboard/bidang-sarana', [DashboardController::class, 'bidangSarana'])->name('dashboard.bidang sarana prasana');

    // Bidang Pendidikan Dashboard
    Route::get('/dashboard/bidang-pendidikan', [DashboardController::class, 'bidangPendidikan'])->name('dashboard.bidang pendidikan');

    // Bidang PHBI Dashboard
    Route::get('/dashboard/bidang-phbi', [DashboardController::class, 'bidangPHBI'])->name('dashboard.bidang phbi');

    // Bidang Perlengkapan Dashboard
    Route::get('/dashboard/bidang-perlengkapan', [DashboardController::class, 'bidangPerlengkapan'])->name('dashboard.bidang perlengkapan');
});





Route::post('/chatbot/process', [ChatbotController::class, 'processMessage']);
Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot.index');
Route::post('/chatbot', [ChatbotController::class, 'processMessage'])->name('chatbot.process');
// routes/web.php

use App\Http\Controllers\PertanyaanJawabanController;

Route::get('/admin/pertanyaan', [PertanyaanJawabanController::class, 'create']);
Route::post('/admin/pertanyaan', [PertanyaanJawabanController::class, 'store'])->name('pertanyaan.store');

Route::get('/chat', function () {
    return view('chat');
});
Route::post('/chat/send', [ChatbotController::class, 'send']);
