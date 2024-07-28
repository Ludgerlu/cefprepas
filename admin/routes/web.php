<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\temoignagesController;
use App\Http\Controllers\attachmentController;
use App\Http\Controllers\evenementController;
use App\Http\Controllers\filiereController;
use App\Http\Controllers\partenaireController;



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



Route::get('/', [UserController::class, 'index']);
Route::post('/connection', [UserController::class, 'connect']);


Route::get('/users', [UserController::class, 'listeUser']);
Route::get('/temoignage/', [temoignagesController::class, 'listeTemoignage']);
Route::get('/attachment/', [attachmentController::class, 'listeAttachment']);
Route::get('/evenement/', [evenementController::class, 'listeEvenement']);
Route::get('/filiere/', [filiereController::class, 'listeFiliere']);
Route::get('/partenaire/', [partenaireController::class, 'listePartenaire']);





Route::get('/add', [UserController::class, 'addUser']);
Route::get('/temoignage/add', [temoignagesController::class, 'addTemoignage']);
Route::get('/attachment/add', [attachmentController::class, 'addAttachment']);
Route::get('/evenement/add', [evenementController::class, 'addEvenement']);
Route::get('/filiere/add', [filiereController::class, 'addFiliere']);
Route::get('/partenaire/add', [partenaireController::class, 'addPartenaire']);





Route::post('/add/action', [UserController::class, 'addUser_action']);
Route::post('/temoignage/add/action', [temoignagesController::class, 'addTemoignage_action']);
Route::post('/attachment/add/action', [attachmentController::class, 'addAttachment_action']);
Route::post('/evenement/add/action', [evenementController::class, 'addEvenement_action']);
Route::post('/filiere/add/action', [filiereController::class, 'addFiliere_action']);
Route::post('/partenaire/add/action', [partenaireController::class, 'addPartenaire_action']);




Route::get('/update/{id}', [UserController::class, 'updateUser']);
Route::get('/temoignage/update/{id}', [temoignagesController::class, 'updateTemoignage']);
Route::get('/attachment/update/{id}', [attachmentController::class, 'updateAttachment']);
Route::get('/evenement/update/{id}', [evenementController::class, 'updateEvenement']);
Route::get('/filiere/update/{id}', [filiereController::class, 'updateFiliere']);
Route::get('/partenaire/update/{id}', [partenaireController::class, 'updatePartenaire']);




Route::post('/update/action', [UserController::class, 'updateUser_action']);
Route::post('/temoignage/update/action', [temoignagesController::class, 'updateTemoignage_action']);
Route::post('/attachment/update/action', [attachmentController::class, 'updateAttachment_action']);
Route::post('/evenement/update/action', [evenementController::class, 'updateEvenement_action']);
Route::post('/filiere/update/action', [filiereController::class, 'updateFiliere_action']);
Route::post('/partenaire/update/action', [partenaireController::class, 'updatePartenaire_action']);




Route::get('/delete/{id}', [UserController::class, 'deleteUser']);
Route::get('/temoignage/delete/{id}', [temoignagesController::class, 'deleteTemoignage']);
Route::get('/attachment/delete/{id}', [attachmentController::class, 'deleteAttachment']);
Route::get('/evenement/delete/{id}', [evenementController::class, 'deleteEvenement']);
Route::get('/filiere/delete/{id}', [filiereController::class, 'deleteFiliere']);
Route::get('/partenaire/delete/{id}', [partenaireController::class, 'deletePartenaire']);












