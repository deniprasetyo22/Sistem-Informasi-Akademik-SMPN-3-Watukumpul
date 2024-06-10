<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GuruDanKaryawanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MadingController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use App\Models\Siswa;
use App\Models\TugasIps;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/beranda', function () {
    return view('/user/beranda');
});
Route::get('/', function () {
    return view('/user/beranda');
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'proseslogin'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'create']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard']);

    Route::get('/admin-profilsekolah', [ProfilController::class, 'admin']);
    Route::get('/admin-edit-profilsekolah/{id}', [ProfilController::class, 'edit']);
    Route::put('/admin-profilsekolah/{id}', [ProfilController::class, 'update']);

    Route::get('/admin-gurudankaryawan', [GuruDanKaryawanController::class, 'admin']);
    Route::get('/admin-add-gurudankaryawan', [GuruDanKaryawanController::class, 'create']);
    Route::post('/admin-gurudankaryawan', [GuruDanKaryawanController::class, 'store']);
    Route::get('/admin-edit-gurudankaryawan/{id}', [GuruDanKaryawanController::class, 'edit']);
    Route::put('/admin-gurudankaryawan/{id}', [GuruDanKaryawanController::class, 'update']);
    Route::delete('/admin-delete-gurudankaryawan/{id}', [GuruDanKaryawanController::class, 'delete']);

    Route::get('/admin-berita', [BeritaController::class, 'admin']);
    Route::get('/admin-add-berita', [BeritaController::class, 'create']);
    Route::post('/admin-berita', [BeritaController::class, 'store']);
    Route::get('/admin-edit-berita/{id}', [BeritaController::class, 'edit']);
    Route::put('/admin-berita/{id}', [BeritaController::class, 'update']);
    Route::delete('/admin-delete-berita/{id}', [BeritaController::class, 'delete']);

    Route::get('/admin-mading', [MadingController::class, 'admin']);
    Route::get('/admin-add-mading', [MadingController::class, 'create']);
    Route::post('/admin-mading', [MadingController::class, 'store']);
    Route::get('/admin-edit-mading/{id}', [MadingController::class, 'edit']);
    Route::put('/admin-mading/{id}', [MadingController::class, 'update']);
    Route::delete('/admin-delete-mading/{id}', [MadingController::class, 'delete']);

    Route::get('/admin-ekstrakurikuler', [EkstrakurikulerController::class, 'show']);

    Route::get('/admin-ekstrakurikuler-osis', [EkstrakurikulerController::class, 'adminOsis']);
    Route::get('/admin-add-ekstrakurikuler-osis', [EkstrakurikulerController::class, 'createOsis']);
    Route::post('/admin-ekstrakurikuler-osis', [EkstrakurikulerController::class, 'storeOsis']);
    Route::get('/admin-edit-ekstrakurikuler-osis/{id}', [EkstrakurikulerController::class, 'editOsis']);
    Route::put('/admin-ekstrakurikuler-osis/{id}', [EkstrakurikulerController::class, 'updateOsis']);
    Route::delete('/admin-delete-ekstrakurikuler-osis/{id}', [EkstrakurikulerController::class, 'deleteOsis']);

    Route::get('/admin-ekstrakurikuler-pramuka', [EkstrakurikulerController::class, 'adminPramuka']);
    Route::get('/admin-add-ekstrakurikuler-pramuka', [EkstrakurikulerController::class, 'createPramuka']);
    Route::post('/admin-ekstrakurikuler-pramuka', [EkstrakurikulerController::class, 'storePramuka']);
    Route::get('/admin-edit-ekstrakurikuler-pramuka/{id}', [EkstrakurikulerController::class, 'editPramuka']);
    Route::put('/admin-ekstrakurikuler-pramuka/{id}', [EkstrakurikulerController::class, 'updatePramuka']);
    Route::delete('/admin-delete-ekstrakurikuler-pramuka/{id}', [EkstrakurikulerController::class, 'deletePramuka']);

    Route::get('/admin-ekstrakurikuler-drumband', [EkstrakurikulerController::class, 'adminDrumband']);
    Route::get('/admin-add-ekstrakurikuler-drumband', [EkstrakurikulerController::class, 'createDrumband']);
    Route::post('/admin-ekstrakurikuler-drumband', [EkstrakurikulerController::class, 'storeDrumband']);
    Route::get('/admin-edit-ekstrakurikuler-drumband/{id}', [EkstrakurikulerController::class, 'editDrumband']);
    Route::put('/admin-ekstrakurikuler-drumband/{id}', [EkstrakurikulerController::class, 'updateDrumband']);
    Route::delete('/admin-delete-ekstrakurikuler-drumband/{id}', [EkstrakurikulerController::class, 'deleteDrumband']);

    Route::get('/admin-ekstrakurikuler-rebana', [EkstrakurikulerController::class, 'adminRebana']);
    Route::get('/admin-add-ekstrakurikuler-rebana', [EkstrakurikulerController::class, 'createRebana']);
    Route::post('/admin-ekstrakurikuler-rebana', [EkstrakurikulerController::class, 'storeRebana']);
    Route::get('/admin-edit-ekstrakurikuler-rebana/{id}', [EkstrakurikulerController::class, 'editRebana']);
    Route::put('/admin-ekstrakurikuler-rebana/{id}', [EkstrakurikulerController::class, 'updateRebana']);
    Route::delete('/admin-delete-ekstrakurikuler-rebana/{id}', [EkstrakurikulerController::class, 'deleteRebana']);

    Route::get('/admin-ekstrakurikuler-tilawatilquran', [EkstrakurikulerController::class, 'adminTilawatilquran']);
    Route::get('/admin-add-ekstrakurikuler-tilawatilquran', [EkstrakurikulerController::class, 'createTilawatilquran']);
    Route::post('/admin-ekstrakurikuler-tilawatilquran', [EkstrakurikulerController::class, 'storeTilawatilquran']);
    Route::get('/admin-edit-ekstrakurikuler-tilawatilquran/{id}', [EkstrakurikulerController::class, 'editTilawatilquran']);
    Route::put('/admin-ekstrakurikuler-tilawatilquran/{id}', [EkstrakurikulerController::class, 'updateTilawatilquran']);
    Route::delete('/admin-delete-ekstrakurikuler-tilawatilquran/{id}', [EkstrakurikulerController::class, 'deleteTilawatilquran']);

    Route::get('/admin-ekstrakurikuler-pencaksilat', [EkstrakurikulerController::class, 'adminPencaksilat']);
    Route::get('/admin-add-ekstrakurikuler-pencaksilat', [EkstrakurikulerController::class, 'createPencaksilat']);
    Route::post('/admin-ekstrakurikuler-pencaksilat', [EkstrakurikulerController::class, 'storePencaksilat']);
    Route::get('/admin-edit-ekstrakurikuler-pencaksilat/{id}', [EkstrakurikulerController::class, 'editPencaksilat']);
    Route::put('/admin-ekstrakurikuler-pencaksilat/{id}', [EkstrakurikulerController::class, 'updatePencaksilat']);
    Route::delete('/admin-delete-ekstrakurikuler-pencaksilat/{id}', [EkstrakurikulerController::class, 'deletePencaksilat']);

    Route::get('/admin-ekstrakurikuler-voli', [EkstrakurikulerController::class, 'adminVoli']);
    Route::get('/admin-add-ekstrakurikuler-voli', [EkstrakurikulerController::class, 'createVoli']);
    Route::post('/admin-ekstrakurikuler-voli', [EkstrakurikulerController::class, 'storeVoli']);
    Route::get('/admin-edit-ekstrakurikuler-voli/{id}', [EkstrakurikulerController::class, 'editVoli']);
    Route::put('/admin-ekstrakurikuler-voli/{id}', [EkstrakurikulerController::class, 'updateVoli']);
    Route::delete('/admin-delete-ekstrakurikuler-voli/{id}', [EkstrakurikulerController::class, 'deleteVoli']);

    Route::get('/admin-ekstrakurikuler-pmr', [EkstrakurikulerController::class, 'adminPmr']);
    Route::get('/admin-add-ekstrakurikuler-pmr', [EkstrakurikulerController::class, 'createPmr']);
    Route::post('/admin-ekstrakurikuler-pmr', [EkstrakurikulerController::class, 'storePmr']);
    Route::get('/admin-edit-ekstrakurikuler-pmr/{id}', [EkstrakurikulerController::class, 'editPmr']);
    Route::put('/admin-ekstrakurikuler-pmr/{id}', [EkstrakurikulerController::class, 'updatePmr']);
    Route::delete('/admin-delete-ekstrakurikuler-pmr/{id}', [EkstrakurikulerController::class, 'deletePmr']);

    Route::get('/admin-ekstrakurikuler-englishclub', [EkstrakurikulerController::class, 'adminEnglishclub']);
    Route::get('/admin-add-ekstrakurikuler-englishclub', [EkstrakurikulerController::class, 'createEnglishclub']);
    Route::post('/admin-ekstrakurikuler-englishclub', [EkstrakurikulerController::class, 'storeEnglishclub']);
    Route::get('/admin-edit-ekstrakurikuler-englishclub/{id}', [EkstrakurikulerController::class, 'editEnglishclub']);
    Route::put('/admin-ekstrakurikuler-englishclub/{id}', [EkstrakurikulerController::class, 'updateEnglishclub']);
    Route::delete('/admin-delete-ekstrakurikuler-englishclub/{id}', [EkstrakurikulerController::class, 'deleteEnglishclub']);

    Route::get('/admin-ekstrakurikuler-teater', [EkstrakurikulerController::class, 'adminTeater']);
    Route::get('/admin-add-ekstrakurikuler-teater', [EkstrakurikulerController::class, 'createTeater']);
    Route::post('/admin-ekstrakurikuler-teater', [EkstrakurikulerController::class, 'storeTeater']);
    Route::get('/admin-edit-ekstrakurikuler-teater/{id}', [EkstrakurikulerController::class, 'editTeater']);
    Route::put('/admin-ekstrakurikuler-teater/{id}', [EkstrakurikulerController::class, 'updateTeater']);
    Route::delete('/admin-delete-ekstrakurikuler-teater/{id}', [EkstrakurikulerController::class, 'deleteTeater']);

    Route::get('/admin-matapelajaran', [MataPelajaranController::class, 'admin']);
    Route::get('/admin-add-matapelajaran', [MataPelajaranController::class, 'create']);
    Route::post('/admin-matapelajaran', [MataPelajaranController::class, 'store']);
    Route::get('/admin-edit-matapelajaran/{id}', [MataPelajaranController::class, 'edit']);
    Route::put('/admin-matapelajaran/{id}', [MataPelajaranController::class, 'update']);
    Route::delete('/admin-delete-matapelajaran/{id}', [MataPelajaranController::class, 'delete']);

    Route::get('/admin-jadwal', [JadwalController::class, 'admin']);
    Route::get('/admin-detail-jadwal/{id}', [JadwalController::class, 'show']);
    Route::get('/admin-add-jadwal', [JadwalController::class, 'create']);
    Route::post('/admin-jadwal', [JadwalController::class, 'store']);
    Route::get('/admin-edit-jadwal/{id}', [JadwalController::class, 'edit']);
    Route::put('/admin-jadwal/{id}', [JadwalController::class, 'update']);
    Route::delete('/admin-delete-jadwal/{id}', [JadwalController::class, 'delete']);

    Route::get('/admin-materi', [MateriController::class, 'admin']);

    Route::get('/admin-materi-bahasaindonesia', [MateriController::class, 'bahasaindonesia']);
    Route::get('/admin-add-materi-bahasaindonesia', [MateriController::class, 'createbahasaindonesia']);
    Route::post('/admin-materi-bahasaindonesia', [MateriController::class, 'storebahasaindonesia']);
    Route::get('/admin-edit-materi-bahasaindonesia/{id}', [MateriController::class, 'editbahasaindonesia']);
    Route::put('/admin-materi-bahasaindonesia/{id}', [MateriController::class, 'updatebahasaindonesia']);
    Route::delete('/admin-delete-materi-bahasaindonesia/{id}', [MateriController::class, 'deletebahasaindonesia']);
    Route::get('/admin-tugas-bahasaindonesia', [TugasController::class, 'adminbahasaindonesia']);
    Route::delete('/admin-delete-tugas-bahasaindonesia/{id}', [TugasController::class, 'deletebahasaindonesia']);

    Route::get('/admin-materi-matematika', [MateriController::class, 'matematika']);
    Route::get('/admin-add-materi-matematika', [MateriController::class, 'creatematematika']);
    Route::post('/admin-materi-matematika', [MateriController::class, 'storematematika']);
    Route::get('/admin-edit-materi-matematika/{id}', [MateriController::class, 'editmatematika']);
    Route::put('/admin-materi-matematika/{id}', [MateriController::class, 'updatematematika']);
    Route::delete('/admin-delete-materi-matematika/{id}', [MateriController::class, 'deletematematika']);
    Route::get('/admin-tugas-matematika', [TugasController::class, 'adminmatematika']);
    Route::delete('/admin-delete-tugas-matematika/{id}', [TugasController::class, 'deletematematika']);

    Route::get('/admin-materi-bahasainggris', [MateriController::class, 'bahasainggris']);
    Route::get('/admin-add-materi-bahasainggris', [MateriController::class, 'createbahasainggris']);
    Route::post('/admin-materi-bahasainggris', [MateriController::class, 'storebahasainggris']);
    Route::get('/admin-edit-materi-bahasainggris/{id}', [MateriController::class, 'editbahasainggris']);
    Route::put('/admin-materi-bahasainggris/{id}', [MateriController::class, 'updatebahasainggris']);
    Route::delete('/admin-delete-materi-bahasainggris/{id}', [MateriController::class, 'deletebahasainggris']);
    Route::get('/admin-tugas-bahasainggris', [TugasController::class, 'adminbahasainggris']);
    Route::delete('/admin-delete-tugas-bahasainggris/{id}', [TugasController::class, 'deletebahasainggris']);

    Route::get('/admin-materi-ipa', [MateriController::class, 'ipa']);
    Route::get('/admin-add-materi-ipa', [MateriController::class, 'createipa']);
    Route::post('/admin-materi-ipa', [MateriController::class, 'storeipa']);
    Route::get('/admin-edit-materi-ipa/{id}', [MateriController::class, 'editipa']);
    Route::put('/admin-materi-ipa/{id}', [MateriController::class, 'updateipa']);
    Route::delete('/admin-delete-materi-ipa/{id}', [MateriController::class, 'deleteipa']);
    Route::get('/admin-tugas-ipa', [TugasController::class, 'adminipa']);
    Route::delete('/admin-delete-tugas-ipa/{id}', [TugasController::class, 'deleteipa']);

    Route::get('/admin-materi-ips', [MateriController::class, 'ips']);
    Route::get('/admin-add-materi-ips', [MateriController::class, 'createips']);
    Route::post('/admin-materi-ips', [MateriController::class, 'storeips']);
    Route::get('/admin-edit-materi-ips/{id}', [MateriController::class, 'editips']);
    Route::put('/admin-materi-ips/{id}', [MateriController::class, 'updateips']);
    Route::delete('/admin-delete-materi-ips/{id}', [MateriController::class, 'deleteips']);
    Route::get('/admin-tugas-ips', [TugasController::class, 'adminips']);
    Route::delete('/admin-delete-tugas-ips/{id}', [TugasController::class, 'deleteips']);

    Route::get('/admin-materi-pabp', [MateriController::class, 'pabp']);
    Route::get('/admin-add-materi-pabp', [MateriController::class, 'createpabp']);
    Route::post('/admin-materi-pabp', [MateriController::class, 'storepabp']);
    Route::get('/admin-edit-materi-pabp/{id}', [MateriController::class, 'editpabp']);
    Route::put('/admin-materi-pabp/{id}', [MateriController::class, 'updatepabp']);
    Route::delete('/admin-delete-materi-pabp/{id}', [MateriController::class, 'deletepabp']);
    Route::get('/admin-tugas-pabp', [TugasController::class, 'adminpabp']);
    Route::delete('/admin-delete-tugas-pabp/{id}', [TugasController::class, 'deletepabp']);

    Route::get('/admin-materi-ppkn', [MateriController::class, 'ppkn']);
    Route::get('/admin-add-materi-ppkn', [MateriController::class, 'createppkn']);
    Route::post('/admin-materi-ppkn', [MateriController::class, 'storeppkn']);
    Route::get('/admin-edit-materi-ppkn/{id}', [MateriController::class, 'editppkn']);
    Route::put('/admin-materi-ppkn/{id}', [MateriController::class, 'updateppkn']);
    Route::delete('/admin-delete-materi-ppkn/{id}', [MateriController::class, 'deleteppkn']);
    Route::get('/admin-tugas-ppkn', [TugasController::class, 'adminppkn']);
    Route::delete('/admin-delete-tugas-ppkn/{id}', [TugasController::class, 'deleteppkn']);

    Route::get('/admin-materi-senibudaya', [MateriController::class, 'senibudaya']);
    Route::get('/admin-add-materi-senibudaya', [MateriController::class, 'createsenibudaya']);
    Route::post('/admin-materi-senibudaya', [MateriController::class, 'storesenibudaya']);
    Route::get('/admin-edit-materi-senibudaya/{id}', [MateriController::class, 'editsenibudaya']);
    Route::put('/admin-materi-senibudaya/{id}', [MateriController::class, 'updatesenibudaya']);
    Route::delete('/admin-delete-materi-senibudaya/{id}', [MateriController::class, 'deletesenibudaya']);
    Route::get('/admin-tugas-senibudaya', [TugasController::class, 'adminsenibudaya']);
    Route::delete('/admin-delete-tugas-senibudaya/{id}', [TugasController::class, 'deletesenibudaya']);

    Route::get('/admin-materi-pjok', [MateriController::class, 'pjok']);
    Route::get('/admin-add-materi-pjok', [MateriController::class, 'createpjok']);
    Route::post('/admin-materi-pjok', [MateriController::class, 'storepjok']);
    Route::get('/admin-edit-materi-pjok/{id}', [MateriController::class, 'editpjok']);
    Route::put('/admin-materi-pjok/{id}', [MateriController::class, 'updatepjok']);
    Route::delete('/admin-delete-materi-pjok/{id}', [MateriController::class, 'deletepjok']);
    Route::get('/admin-tugas-pjok', [TugasController::class, 'adminpjok']);
    Route::delete('/admin-delete-tugas-pjok/{id}', [TugasController::class, 'deletepjok']);

    Route::get('/admin-materi-prakarya', [MateriController::class, 'prakarya']);
    Route::get('/admin-add-materi-prakarya', [MateriController::class, 'createprakarya']);
    Route::post('/admin-materi-prakarya', [MateriController::class, 'storeprakarya']);
    Route::get('/admin-edit-materi-prakarya/{id}', [MateriController::class, 'editprakarya']);
    Route::put('/admin-materi-prakarya/{id}', [MateriController::class, 'updateprakarya']);
    Route::delete('/admin-delete-materi-prakarya/{id}', [MateriController::class, 'deleteprakarya']);
    Route::get('/admin-tugas-prakarya', [TugasController::class, 'adminprakarya']);
    Route::delete('/admin-delete-tugas-prakarya/{id}', [TugasController::class, 'deleteprakarya']);

    Route::get('/admin-nilai', [NilaiController::class, 'admin']);
    Route::get('/admin-add-nilai', [NilaiController::class, 'create']);
    Route::post('/admin-nilai', [NilaiController::class, 'store']);
    Route::get('/admin-detail-nilai/{id}', [NilaiController::class, 'show']);
    Route::get('/admin-edit-nilai/{id}', [NilaiController::class, 'edit']);
    Route::put('/admin-nilai/{id}', [NilaiController::class, 'update']);
    Route::delete('/admin-delete-nilai/{id}', [NilaiController::class, 'delete']);

    Route::get('/admin-kontak', [KontakController::class, 'admin']);
    Route::get('/admin-edit-kontak/{id}', [KontakController::class, 'edit']);
    Route::put('/admin-kontak/{id}', [KontakController::class, 'update']);

    Route::get('/admin-user', [UserController::class, 'admin']);
    Route::get('/admin-user-admin', [UserController::class, 'UserAdmin']);
    Route::get('/admin-user-teacher', [UserController::class, 'UserTeacher']);
    Route::get('/admin-user-student', [UserController::class, 'UserStudent']);
    Route::get('/admin-add-user', [UserController::class, 'create']);
    Route::post('/admin-user', [UserController::class, 'store']);
    Route::get('/admin-edit-user/{id}', [UserController::class, 'edit']);
    Route::put('/admin-user/{id}', [UserController::class, 'update']);
    Route::delete('/admin-delete-user/{id}', [UserController::class, 'delete']);
});



Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/detail-berita/{id}', [BeritaController::class, 'detail']);

Route::get('/mading', [MadingController::class, 'index']);
Route::get('/detail-mading/{id}', [MadingController::class, 'detail']);

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index']);
Route::get('/ekstrakurikuler-osis', [EkstrakurikulerController::class, 'osis']);
Route::get('/ekstrakurikuler-pramuka', [EkstrakurikulerController::class, 'pramuka']);
Route::get('/ekstrakurikuler-drumband', [EkstrakurikulerController::class, 'drumband']);
Route::get('/ekstrakurikuler-rebana', [EkstrakurikulerController::class, 'rebana']);
Route::get('/ekstrakurikuler-tilawatilquran', [EkstrakurikulerController::class, 'tilawatilquran']);
Route::get('/ekstrakurikuler-pencaksilat', [EkstrakurikulerController::class, 'pencaksilat']);
Route::get('/ekstrakurikuler-voli', [EkstrakurikulerController::class, 'voli']);
Route::get('/ekstrakurikuler-pmr', [EkstrakurikulerController::class, 'pmr']);
Route::get('/ekstrakurikuler-englishclub', [EkstrakurikulerController::class, 'englishclub']);
Route::get('/ekstrakurikuler-teater', [EkstrakurikulerController::class, 'teater']);

Route::middleware(['auth'])->group(function () {
    Route::get('/jadwal', [JadwalController::class, 'index']);
    Route::get('/detail-jadwal/{id}', [JadwalController::class, 'showuser']);

    Route::get('/materi', [MateriController::class, 'index']);
    Route::get('/materi-bahasaindonesia', [MateriController::class, 'materibahasaindonesia']);
    Route::get('/materi-matematika', [MateriController::class, 'materimatematika']);
    Route::get('/materi-bahasainggris', [MateriController::class, 'materibahasainggris']);
    Route::get('/materi-ipa', [MateriController::class, 'materiipa']);
    Route::get('/materi-ips', [MateriController::class, 'materiips']);
    Route::get('/materi-pabp', [MateriController::class, 'materipabp']);
    Route::get('/materi-ppkn', [MateriController::class, 'materippkn']);
    Route::get('/materi-senibudaya', [MateriController::class, 'materisenibudaya']);
    Route::get('/materi-pjok', [MateriController::class, 'materipjok']);
    Route::get('/materi-prakarya', [MateriController::class, 'materiprakarya']);

    Route::get('/tugas-bahasaindonesia', [TugasController::class, 'bahasaindonesia']);
    Route::post('/add-tugas-bahasaindonesia', [TugasController::class, 'storebahasaindonesia']);
    Route::get('/tugas-matematika', [TugasController::class, 'matematika']);
    Route::post('/add-tugas-matematika', [TugasController::class, 'storematematika']);
    Route::get('/tugas-bahasainggris', [TugasController::class, 'bahasainggris']);
    Route::post('/add-tugas-bahasainggris', [TugasController::class, 'storebahasainggris']);
    Route::get('/tugas-ipa', [TugasController::class, 'ipa']);
    Route::post('/add-tugas-ipa', [TugasController::class, 'storeipa']);
    Route::get('/tugas-ips', [TugasController::class, 'ips']);
    Route::post('/add-tugas-ips', [TugasController::class, 'storeips']);
    Route::get('/tugas-pabp', [TugasController::class, 'pabp']);
    Route::post('/add-tugas-pabp', [TugasController::class, 'storepabp']);
    Route::get('/tugas-ppkn', [TugasController::class, 'ppkn']);
    Route::post('/add-tugas-ppkn', [TugasController::class, 'storeppkn']);
    Route::get('/tugas-senibudaya', [TugasController::class, 'senibudaya']);
    Route::post('/add-tugas-senibudaya', [TugasController::class, 'storesenibudaya']);
    Route::get('/tugas-pjok', [TugasController::class, 'pjok']);
    Route::post('/add-tugas-pjok', [TugasController::class, 'storepjok']);
    Route::get('/tugas-prakarya', [TugasController::class, 'prakarya']);
    Route::post('/add-tugas-prakarya', [TugasController::class, 'storeprakarya']);

    Route::get('/nilai', [NilaiController::class, 'index']);
    Route::get('/detail-nilai/{id}', [NilaiController::class, 'showUser']);
});

Route::middleware(['auth', 'teacher'])->group(function () {
    Route::post('/add-materi-bahasaindonesia', [MateriController::class, 'storebahasaindonesia']);
    Route::delete('/delete-materi-bahasaindonesia/{id}', [MateriController::class, 'deletebahasaindonesia']);

    Route::post('/add-materi-bahasainggris', [MateriController::class, 'storebahasainggris']);
    Route::delete('/delete-materi-bahasainggris/{id}', [MateriController::class, 'deletebahasainggris']);

    Route::post('/add-materi-ipa', [MateriController::class, 'storeipa']);
    Route::delete('/delete-materi-ipa/{id}', [MateriController::class, 'deleteipa']);

    Route::post('/add-materi-ips', [MateriController::class, 'storeips']);
    Route::delete('/delete-materi-ips/{id}', [MateriController::class, 'deleteips']);

    Route::post('/add-materi-matematika', [MateriController::class, 'storematematika']);
    Route::delete('/delete-materi-matematika/{id}', [MateriController::class, 'deletematematika']);

    Route::post('/add-materi-pabp', [MateriController::class, 'storepabp']);
    Route::delete('/delete-materi-pabp/{id}', [MateriController::class, 'deletepabp']);

    Route::post('/add-materi-ppkn', [MateriController::class, 'storeppkn']);
    Route::delete('/delete-materi-ppkn/{id}', [MateriController::class, 'deleteppkn']);

    Route::post('/add-materi-senibudaya', [MateriController::class, 'storesenibudaya']);
    Route::delete('/delete-materi-senibudaya/{id}', [MateriController::class, 'deletesenibudaya']);

    Route::post('/add-materi-pjok', [MateriController::class, 'storepjok']);
    Route::delete('/delete-materi-pjok/{id}', [MateriController::class, 'deletepjok']);

    Route::post('/add-materi-prakarya', [MateriController::class, 'storeprakarya']);
    Route::delete('/delete-materi-prakarya/{id}', [MateriController::class, 'deleteprakarya']);

    Route::get('/add-nilai', [NilaiController::class, 'teachercreate']);
    Route::post('/nilai', [NilaiController::class, 'store']);
    Route::get('/edit-nilai/{id}', [NilaiController::class, 'teacheredit']);
    Route::put('/nilai/{id}', [NilaiController::class, 'update']);
    Route::delete('/delete-nilai/{id}', [NilaiController::class, 'delete']);
});


Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/test', function () {
    return view('/user/test');
});
