
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationDashboardsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ActivitiesController;

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

// Routes Home Page Start
Route::get('/', [InformationDashboardsController::class, 'index']);
// Routes Home Page End


//Routes Member Page Start
Route::get('/anggota', [MembersController::class, 'index']);
Route::get('/anggota/add', [MembersController::class, 'create']);
Route::post('/anggota', [MembersController::class, 'store']);
Route::get('/anggota/update/{id}', [MembersController::class, 'edit']);
Route::put('/anggota/{id}', [MembersController::class, 'update']);
Route::delete('/anggota/delete/{id}', [MembersController::class, 'destroy']);
// Routes Member Page End


// Routes Activity Page Start
Route::get('/kegiatan',[ActivitiesController::class, 'index']);
Route::get('/kegiatan/add', [ActivitiesController::class, 'create']);
// Route Activity Page End