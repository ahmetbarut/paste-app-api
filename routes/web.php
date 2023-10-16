<?php

use App\Models\Paste;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('paste/{paste}', function (Paste $paste, Request $request) {
    if ($request->expectsJson()) {
        return response()->json([
            'content' => $paste->content,
            'id' => $paste->id,
        ]);
    }

    return view('paste.show')->with('paste', $paste);
})->name('paste.show');
