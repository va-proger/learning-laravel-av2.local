<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
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




// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', function () {
//     return view('hello', [
//         "name" => "Andrey",
//         "skills" => ["HTML5", "CSS3", "JavaScript", "Python", "PHP", "SCSS", "PUG", "Laravel", "WordPress", "Bitrix", "MODX", "Git"]
//     ]);
// });
Route::get('/', [PagesController::class, "helloPage"]);
Route::get('/todos',  [PagesController::class, "todosPage"]);
Route::get('/todos/done',  [PagesController::class, "todosDone"]);
Route::get('/todos/not-done',  [PagesController::class, "todosNoteDone"]); //
Route::get('/students',  [PagesController::class, "studentsPage"]); //
Route::get('/blog',  [PagesController::class, "blogPage"])->name('blog'); //
Route::get('/blog/{id}',  [PagesController::class, "singlePost"]); //
Route::post('/blog/create',  [ArticlesController::class, "store"]); //
Route::post('/blog/delete',  [ArticlesController::class, "destroy"]); //
Route::get('/blog/{id}/update',  [PagesController::class, "articleUpdatePage"]); //
Route::post('/blog/update',  [ArticlesController::class, "update"]); //



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\PagesController::class, 'admin'])->name('admin')->middleware(['auth', 'admin']);
