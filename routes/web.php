<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\UserGradesController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::middleware(['auth', 'email:admin@gmail.com'])->group(function () {
    // Admin routes here
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('stagiaire', StagiaireController::class);
Route::get('/searchstagiaire',[StagiaireController::class,'search']);
Route::post('/chercher',[StagiaireController::class,'chercher']);
Route::resource('groupe', GroupeController::class);
Route::resource('filiere', FiliereController::class);
Route::resource('Examen', ExamenController::class);
Route::resource('Module', ModuleController::class);
Route::resource('Notes', NotesController::class);
Route::resource('MainPage', MainPageController::class);

});

// Route::middleware(['auth', 'email:student@gmail.com'])->group(function () {
    // Student routes here
 
    Route::get('/student/home',function(){
        return view('Users.User');
    });
   Route::get('/Usergrades',[UserGradesController::class,'index']);
   Route::get('/UserExams',[UserGradesController::class,'UserExams']);
    
// });

Route::fallback(FallbackController::class);

