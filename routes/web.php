<?php

use Illuminate\Support\Facades\Route;

// controller
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

Route::get('/',function(){
    return view('listings',[
        'heading'=> 'Latest Listings',
        'listings'=> Listing::all()
    ]);
});

// single listing
Route::get('/listings/{listing}', function(Listing $listing){
    //Route model binding in eloquent
        return  view('listing',[
            'listing' => $listing
        ]);
});


