<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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


Route::get('/hello', function () {
    return response('Hello World');
});

Route::get('/posts/{id}', function ($id) {
    ddd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    return $request->name . ' ' . $request->city;
});


//all listings
Route::get('/', [ListingController::class, 'index']);

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']) {



    // $listing = Listing::find($id);

    // if ($listing) {
    //     return view('listing', [
    //         'listing' => $listing
    //     ]);
    // } else {
    //     abort('404');
    // }
});
