<?php
use Illuminate\Support\Facades\Route;

// User Controller
use App\Http\Controllers\HallDataController;

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

Route::get('/home', [HallDataController::class, 'getRegionList'])->middleware(['auth', 'verified']);

// Hall
Route::get('/hall-data', [HallDataController::class, 'index']);
Route::get('/hall-data/{region_id}', [HallDataController::class, 'region']);
Route::post('/hall-data/{region_id}', [HallDataController::class, 'getHallDataList']);
Route::post('/hall-data/{region_id}', [HallDataController::class, 'getHallDataList']);
Route::get('/hall-data/{region_id}/{store_id}', [HallDataController::class, 'model']);
Route::post('/model-list/{store_id}', [HallDataController::class, 'getModelList']);
Route::get('/model-detail-data/{region_id}/{store_id}/{model_name}', [HallDataController::class, 'modelDetailData'])->name('model.detail.data');
Route::post('/model-data', [HallDataController::class, 'getModelData'])->name('model.data');

// Search Store
Route::post('/search-hall/{hall_name}', [HallDataController::class, 'searchHallDataList']);

// Waiting
Route::get('/waiting', function () { return view('waiting'); });

// =========================================== ADMIN =================================================

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index')->middleware('checkRole');
    Route::get('/access-analyze', [AccessAnalyzeController::class, 'index'])->name('admin.access_analyze');
    Route::get('/promotion-printing', [PromotionPrintingController::class, 'index'])->name('admin.promotion_printing');
    // Route::get('/promotion-printing/model', [PromotionPrintingController::class, 'showModelData']);
    Route::post('/promotion-printing/model', [PromotionPrintingController::class, 'updateTable']);
    Route::post('/promotion-printing/model-validation', [PromotionPrintingController::class, 'validateModel']);

    Route::get('/user-management', [UserManagementController::class, 'index'])->name('admin.user_management');
    Route::post('/users-list', [UserManagementController::class, 'getUsersList'])->name('users.list');
});
