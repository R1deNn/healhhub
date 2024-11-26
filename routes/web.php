<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashBoardController;
use App\Http\Controllers\AdminPromoteController;
use App\Http\Controllers\AdminResearchsController;
use App\Http\Controllers\AdminSpecialistsController;
use App\Http\Controllers\AdminSpecialitysController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CallMeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DownloadResultsController;
use App\Http\Controllers\MdDashBoardController;
use App\Http\Controllers\MdResearchesController;
use App\Http\Controllers\MedCardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\UserLkController;
use App\Http\Controllers\UserResearchsController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'specialists'   =>    User::whereHas('roles', function ($query) {
            $query->where('rules', 2);
        })->limit(3),
    ]);
})->name('/');

Route::get('ourSpecialists', [SpecialistController::class, 'index'])->name('ourSpecialists.index');

Route::get('categories', [CategorieController::class, 'index'])->name('categories.index');

Route::get('categories/show/{categorie}', [CategorieController::class, 'show'])->middleware(['auth', 'verified'])->name('categories.show');

Route::get('regAppointment', [CategorieController::class, 'index'])->name('categories.index');

Route::get('/lk', [UserLkController::class, 'index'])->middleware(['auth', 'verified'])->name('lk');

Route::get('/user-researchs', [UserResearchsController::class, 'index'])->middleware(['auth', 'verified'])->name('user-researchs');

Route::get('/download/{filename}', [DownloadResultsController::class, 'index'])->middleware(['auth', 'verified'])->name('file.download');

Route::get('/add-call-me', [CallMeController::class, 'create'])->name('add-call-me.create');

Route::get('/about', [AboutController::class, 'index'])->name('about');
// ADMIN

Route::get('/adm-researchs', [AdminResearchsController::class, 'index'])->middleware(['admin'])->name('adm-researchs');
Route::get('/adm-specialitys', [AdminSpecialitysController::class, 'index'])->middleware(['admin'])->name('adm-specialitys');
Route::get('/adm-specialists', [AdminSpecialistsController::class, 'index'])->middleware(['admin'])->name('adm-specialists');
Route::get('/adm-users', [AdminUsersController::class, 'index'])->middleware(['admin'])->name('adm-users');

Route::get('/del-research/{id}', [AdminResearchsController::class, 'destroy'])->middleware(['admin'])->name('del-research');
Route::get('/del-specialitys/{id}', [AdminSpecialitysController::class, 'destroy'])->middleware(['admin'])->name('del-specialitys');
Route::get('/del-user/{id}', [AdminUsersController::class, 'destroy'])->middleware(['admin'])->name('del-user');

Route::post('/create-research', [AdminResearchsController::class, 'create'])->middleware(['admin'])->name('create-research');
Route::post('/create-specialitys', [AdminSpecialitysController::class, 'create'])->middleware(['admin'])->name('create-specialitys');

Route::get('/promote-user-admin/{id}', [AdminPromoteController::class, 'promote_admin'])->middleware(['admin'])->name('promote-to-admin');
Route::get('/promote-user-md/{id}', [AdminPromoteController::class, 'promote_md'])->middleware(['admin'])->name('promote-to-md');
Route::get('/demote-user/{id}', [AdminPromoteController::class, 'demote_md'])->middleware(['admin'])->name('demote-to-user');

Route::get('/call-done/{id}', [CallMeController::class, 'done'])->name('call.done');
Route::get('/call-notdone/{id}', [CallMeController::class, 'notdone'])->name('call.notdone');

// END ADMIN


//MD

Route::get('/lk-md', [MdDashBoardController::class, 'index'])->name('lk-md');
Route::get('/md-researchs', [MdResearchesController::class, 'index'])->name('md-researchs');
Route::post('/md-researchs.update/{id}', [MdResearchesController::class, 'update'])->name('md-researchs.update');
Route::get('/md-researchs.edit/{id}', [MdResearchesController::class, 'edit'])->name('md-researchs.edit');
Route::get('/md-researchs.not/{id}', [MdResearchesController::class, 'not'])->name('md-researchs.not');

// END MD

Route::post('/regAppointment', [AppointmentController::class, 'store'])->name('appointments.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
