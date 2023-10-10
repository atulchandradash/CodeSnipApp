<?php

use App\Http\Controllers\FolderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SnippetsController;
use App\Models\Snippets;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    $getSnippets =  Snippets::where('User_id', Auth::user()->id)->get();
    return view('Pages.HomePage.home', ['getSnippets' => $getSnippets ]);
})->middleware(['auth', 'verified'])->name('Home');

Route::middleware('auth')->group(function () {

    //snippets Create
    Route::get('/SnippetsCreate', [SnippetsController::class, 'index'])->name('Snippets.index');
    Route::Post('/SnippetsCreate', [SnippetsController::class, 'create'])->name('Snippets.create');
    Route::get('/SnippetsShow={id}', [SnippetsController::class, 'show'])->name('Snippets.show');
    Route::get('/SnippetsEdit={id}', [SnippetsController::class, 'updateShow'])->name('Snippets.updateShow');
    Route::post('/SnippetsEdit={id}', [SnippetsController::class, 'update'])->name('Snippets.update');
    Route::get('/SnippetsDelete={id}', [SnippetsController::class, 'DeleteIndex'])->name('Snippets.DeleteIndex');
    Route::delete('/SnippetsDelete={id}', [SnippetsController::class, 'destroy'])->name('Snippets.destroy');

    //FolderCreate Route
    Route::get('/FolderCreate', [FolderController::class, 'index'])->name('Folder.index');
    Route::post('/FolderCreate', [FolderController::class, 'create'])->name('Folder.create');
    Route::get('/FolderID={id}', [FolderController::class, 'show'])->name('Folder.show');
    Route::get('/FolderID={id}/SnippetsID={s_id}', [FolderController::class, 'SnippetsShow'])->name('Folder.SnippetsShow');
    Route::get('/FolderID={id}/SnippetsID={s_id}/edit', [FolderController::class, 'SnippetsEdit'])->name('Folder.SnippetsEdit');
    Route::get('/FolderID={id}/SnippetsID={s_id}/delete', [FolderController::class, 'SnippetsDelete'])->name('Folder.SnippetsDelete');
    Route::get('/FolderRename={id}', [FolderController::class, 'rename'])->name('Folder.rename');
    Route::post('/FolderRename={id}', [FolderController::class, 'renamePost'])->name('Folder.renamePost');
    Route::get('/FolderDelete={id}', [FolderController::class, 'deleteIndex'])->name('Folder.delete');
    Route::delete('/FolderDelete={id}', [FolderController::class, 'destroy'])->name('Folder.destroy');
});

require __DIR__.'/auth.php';
