<?php
use Illuminate\Support\Facades\Route;

// User Controller
use App\Http\Controllers\HallDataController;
use App\Http\Controllers\UserController;

// Admin Controller
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AccessAnalyzeController;
use App\Http\Controllers\Admin\PromotionPrintingController;
use App\Http\Controllers\Admin\UserManagementController;

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

require __DIR__.'/auth.php';

// =========================================== USER =================================================

Route::get('/', function () {
    return redirect('/home');
});

// Home
Route::get('/home', [HallDataController::class, 'getRegionList'])->middleware(['auth', 'verified']);

// Hall
Route::group(['prefix' => 'hall-data'], function() {
    // Store List
    Route::get('{region_id}', [HallDataController::class, 'store']);
    Route::post('{region_id}', [HallDataController::class, 'getStoreList']);

    // Model List
    Route::get('{region_id}/{store_id}', [HallDataController::class, 'model']);
    Route::post('model-list/{store_id}', [HallDataController::class, 'getModelList']);

    // Model Detail
    Route::get('{region_id}/{store_id}/{model_name}', [HallDataController::class, 'modelDetail'])->name('model.detail');
});

// Get one model detail
Route::post('/model-data', [HallDataController::class, 'getModelData'])->name('model.data');

// Search Store
Route::post('/search-hall/{hall_name}', [HallDataController::class, 'searchHallDataList']);

// Waiting
Route::get('/waiting', function () { return view('waiting'); });

// User Profile
Route::get('/user-profile', [UserController::class, 'index']);

// Pricing
Route::get('/pricing', [UserController::class, 'getPricingPage']);

// =========================================== ADMIN =================================================

// Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function () {
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index']);
    
    // Promotion Printing
    Route::get('promotion-printing', [PromotionPrintingController::class, 'index'])->name('admin.promotion_printing');
    Route::post('promotion-printing/model', [PromotionPrintingController::class, 'updateTable']);
    Route::post('promotion-printing/promotion-table-validation', [PromotionPrintingController::class, 'validatePromotionTable']);

    // User Management
    Route::get('user-management', [UserManagementController::class, 'index'])->name('admin.user_management');
    Route::post('users-list', [UserManagementController::class, 'getUsersList'])->name('users.list');
});

