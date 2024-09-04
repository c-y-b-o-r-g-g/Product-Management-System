<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('form');
});

// Route to display the form
Route::get('/form', [ProductController::class, 'index'])->name('form');

// Route to add a product
Route::post('/addProduct', [ProductController::class, 'addProduct'])->name('adder');

// Route to get the list of products
Route::get('/getProducts', [ProductController::class, 'getProducts'])->name('getProducts');

// Route to edit a product
Route::get('/editProduct/{id}', [ProductController::class, 'editProduct'])->name('editProduct');

// Route to update a product
Route::post('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');

// Route to delete a product
Route::delete('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');