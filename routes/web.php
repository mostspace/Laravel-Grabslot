<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HallDataController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AllSystemsController;
use App\Http\Controllers\OldEventDateController;
use App\Http\Controllers\AnniversaryController;
use App\Http\Controllers\DateDataController;
use App\Http\Controllers\AppearedStoreController;
use App\Http\Controllers\DatePickupController;
use App\Http\Controllers\HallDataPlaceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WholeDataController;
use App\Http\Controllers\RegionController;

// Admin Controller
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AccessAnalyzeController;
use App\Http\Controllers\Admin\PromotionPrintingController;
use App\Http\Controllers\Admin\UserManagementController;


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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', [RegionController::class, 'getRegionList'])->middleware(['auth', 'verified']);
// Route::get('/', [RegionController::class, 'getRegionList']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// =========================================== USER =================================================

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [RegionController::class, 'getRegionList'])->middleware(['auth', 'verified']);

// Route::get('/date-data/{date}', [DateDataController::class, 'dateData']);
// Route::get('/appeared-store', [AppearedStoreController::class, 'index']);
// Route::get('/date-pickup', [DatePickupController::class, 'index']);
// Route::get('/category', [CategoryController::class, 'index']);


// Hall
Route::get('/hall-data', [HallDataController::class, 'index']);
Route::get('/hall-data/{region_id}', [HallDataController::class, 'region']);
Route::post('/hall-data/{region_id}', [HallDataController::class, 'getHallDataList']);
Route::get('/hall-data/{region_id}/{store_id}', [HallDataController::class, 'model']);
Route::post('/model-list/{store_id}', [HallDataController::class, 'getModelList']);
Route::get('/model-detail-data/{region_id}/{store_id}/{model_name}', [HallDataController::class, 'modelDetailData'])->name('model.detail.data');
Route::post('/model-data', [HallDataController::class, 'getModelData'])->name('model.data');
// Route::post('/store-data-list/{store_data_id}', [HallDataController::class, 'getModelDetailDataList']);

// Search Region
Route::post('/search-region', [RegionController::class, 'regionFilter'])->name('search.region');

// Store
// Route::get('/store', [StoreController::class, 'index']);
// Route::get('/store/{prefecture}', [StoreController::class, 'prefecture']);

// All Systems
// Route::get('/all-systems', [AllSystemsController::class, 'index']);
// Route::get('/all-systems/{prefecture}', [AllSystemsController::class, 'prefecture']);

// Old Event
// Route::get('/old-event-date', [OldEventDateController::class, 'index']);
// Route::get('/old-event-date/{prefecture}', [OldEventDateController::class, 'prefecture']);
// Route::get('/old-event-date/{prefecture}/{eventDate}', [OldEventDateController::class, 'eventDate']);

// Anniversary
// Route::get('/anniversary', [AnniversaryController::class, 'index']);
// Route::get('/anniversary/{prefecture}', [AnniversaryController::class, 'prefecture'])->name('anniversary.prefecture');
// Route::get('/anniversary/{prefecture}/{month}', [AnniversaryController::class, 'monthList']);

// 404
Route::get('/waiting', function () { return view('waiting'); });

// =========================================== ADMIN =================================================

// Route::get('/admin', [AdminController::class, 'index'])->middleware('checkRole');
// Route::get('/access-analyze', [AccessAnalyzeController::class, 'index']);
// Route::get('/promotion-printing', [PromotionPrintingController::class, 'index']);
// Route::get('/user-management', [UserManagementController::class, 'index']);
// Route::post('/users-list', [UserManagementController::class, 'getUsersList'])->name('users.list');

// Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function() {
//     Route::get('/', [AdminController::class, 'index'])->middleware('checkRole');
//     Route::get('/access-analyze', [AccessAnalyzeController::class, 'index']);
//     Route::get('/promotion-printing', [PromotionPrintingController::class, 'index']);
//     Route::get('/user-management', [UserManagementController::class, 'index']);
//     Route::post('/users-list', [UserManagementController::class, 'getUsersList'])->name('users.list');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/access-analyze', [AccessAnalyzeController::class, 'index'])->name('admin.access_analyze');
    Route::get('/promotion-printing', [PromotionPrintingController::class, 'index'])->name('admin.promotion_printing');
    Route::get('/user-management', [UserManagementController::class, 'index'])->name('admin.user_management');
    Route::post('/users-list', [UserManagementController::class, 'getUsersList'])->name('users.list');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index')->middleware('checkRole');
    Route::get('/access-analyze', [AccessAnalyzeController::class, 'index'])->name('admin.access_analyze');
    Route::get('/promotion-printing', [PromotionPrintingController::class, 'index'])->name('admin.promotion_printing');
    Route::get('/user-management', [UserManagementController::class, 'index'])->name('admin.user_management');
    Route::post('/users-list', [UserManagementController::class, 'getUsersList'])->name('users.list');
});
