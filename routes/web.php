<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\{
    LanguageController,
    User\UserController,
    User\EtudiantController,
    User\ActualiteController,
    User\FormationController,
    User\DocumentController,
    AuthController,
    Admin\UserController as User,
    Admin\AdminController as Admin,
    Admin\MessageController as Messages,
    Admin\InscriptionController as Inscriptions,
    Admin\InscriptionController,
    Admin\TestimoniesController as Testimonies,
    Admin\FiliereController as Filieres,
    Admin\EventController as Events,
    Admin\ImageController as Images,
    Admin\FormationController as Formations,
    Admin\PartnerController as Partners,
    Admin\DocumentController as Documents,
};
use App\Http\Middleware\{
    AdminCheck,
};
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

Route::get('/', [userController::class,'index'])->name('index');
Route::get('/Contact', [userController::class,'contact'])->name('contact');
Route::post('/contact', [userController::class, 'storeContact'])->name('contact.submit');
Route::get('/Inscription', [userController::class,'inscription'])->name('inscription');
Route::post('/Inscription/store', [userController::class,'inscription_store'])->name('inscription.store');
Route::get('/About', [userController::class,'about'])->name('about');
Route::get('/Atout', [userController::class,'atout'])->name('atout');
Route::get('/Diplome', [userController::class,'diplome'])->name('diplome');
Route::get('/Emploie', [userController::class,'emploie'])->name('emploie');
Route::get('/Promoteur', [userController::class,'promoteur'])->name('promoteur');
Route::get('/Programme', [userController::class,'programme'])->name('programme');
Route::get('/Actualites', [ActualiteController::class,'index'])->name('actualites.index');
Route::get('/Actualites/{event}', [ActualiteController::class,'show'])->name('actualites.show');
Route::get('/Apprenants', [EtudiantController::class,'index'])->name('apprenants.index');
Route::get('/Apprenants/{event}', [EtudiantController::class,'show'])->name('apprenants.show');
Route::get('/Formation', [FormationController::class,'index'])->name('formations.index');
Route::get('/Formations/{formation}', [FormationController::class,'show'])->name('formations.show');
Route::get('/Photo', [userController::class,'photo'])->name('photo');
Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/documents/{document}/download', [DocumentController::class, 'download'])->name('documents.download');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
            Artisan::call('view:clear');
            Artisan::call('route:clear');
            Artisan::call('config:clear');
    return "Cache is cleared";
});

// Route::get('/admin', [AuthController::class,'index'])->name('login');
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login_');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');





Route::get('locale/{locale}', [LanguageController::class, 'set'])->name('locale.set');



// Authenticated Routes
Route::middleware('auth')->group(function () {

    Route::controller(AuthController::class)->group(function () {
        Route::get('/profile',  'index')->name('profile');
        Route::get('/password', 'showChangePasswordForm')->name('password');
        Route::post('/password/',  'changePassword')->name('password.store');
        Route::get('/password/default', 'defaultPassword')->name('password.default');
    });
        // admin Routes
    Route::prefix('admin')
    ->middleware(AdminCheck::class)
    ->name('admin.')
    ->group(function () {
        Route::get('/', [Admin::class, 'index'])->name('dashboard');
        Route::resource('messages',Messages::class);
        Route::resource('inscriptions',Inscriptions::class);
        Route::resource('testimonies',Testimonies::class);
        Route::resource('filieres',Filieres::class);
        Route::resource('formations',Formations::class);
        Route::resource('inscriptions',InscriptionController::class)->except(['create,update']);
        Route::resource('events',Events::class);
        Route::resource('images', Images::class);
        Route::resource('partners', Partners::class);
        // Documents Routes
         // Document routes
        Route::get('documents', [Documents::class, 'index'])->name('documents.index');
        Route::get('documents/create', [Documents::class, 'create'])->name('documents.create');
        Route::post('documents', [Documents::class, 'store'])->name('documents.store');
        Route::get('documents/{document}/edit', [Documents::class, 'edit'])->name('documents.edit');
        Route::put('documents/{document}', [Documents::class, 'update'])->name('documents.update');
        Route::delete('documents/{document}', [Documents::class, 'destroy'])->name('documents.destroy');
        Route::get('documents/{document}/download', [Documents::class, 'download'])->name('documents.download');
        Route::get('documents/{document}', [Documents::class, 'show'])->name('documents.show');
        Route::get('documents/{document}/download', [Documents::class, 'download'])->name('documents.download');
       
    });

        
});