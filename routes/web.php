<?php

use App\Http\Controllers\Agents\AgentsController;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


// agents section
Route::get('upload-agent-list', [App\Http\Controllers\Agents\AgentsController::class, 'showUploadPage'])->middleware(['auth', 'verified'])->name('uploadAgentList');
Route::post('upload-excel', [App\Http\Controllers\Agents\AgentsController::class, 'uploadExcelSheet'])->middleware(['auth', 'verified'])->name('uploadExcel');

// agent lists
Route::get('agent-list', [App\Http\Controllers\Agents\AgentsController::class, 'showAgentList'])->middleware(['auth', 'verified'])->name('agentList');

//search agent
Route::get('search-agent', [App\Http\Controllers\Agents\AgentsController::class, 'showSearchAgent'])->middleware(['auth','verified'])->name('searchAgentPage');
Route::post('search', [App\Http\Controllers\Agents\AgentsController::class,'searchAgentNumber'])->middleware(['auth', 'verified'])->name('searchByAgentNo');

Route::get('logout', [App\Http\Controllers\manageAuth::class, 'logout'])->middleware(['auth', 'verified'])->name('logout');


require __DIR__.'/auth.php';
