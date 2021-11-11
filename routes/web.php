<?php
use App\Http\Controllers\AuthorContrpller;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin route
Route::group(['prefix'=>'admin','middleware'=> ['auth','role:admin']],function () {
    route::get('/', function (){
        return view('admin.index');
    });
    route::rescource('author', AuthorController::class);
    route::rescource('books', BooksContoller::class);

});
