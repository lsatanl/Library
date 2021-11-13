<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CatagoryController;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\DashboardController;
use App\Http\Controllers\API\DatabaseController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard',[DashboardController::class,'dashboardview'])->name('dashboard');
Route::post('rent/{id}',[DashboardController::class,'rent']);
Route::post('return/{id}',[DashboardController::class,'return']);
Route::get('/Modify-users',[UsersController::class,'usersview'])->name('mod-users')->middleware('authcheck');
Route::get('/Suspend-user/{id}',[UsersController::class,'usersuspend'])->middleware('authcheck');
Route::get('/Delete-user/{id}',[UsersController::class,'userdelete'])->middleware('authcheck');
Route::get('/Retreive-user/{id}',[UsersController::class,'userretrieve'])->middleware('authcheck');
Route::get('/database',[DatabaseController::class,'databseview'])->name('database')->middleware('authcheck');
Route::get('/Modify-database/{id}',[DatabaseController::class,'databsemodify'])->name('mod-database')->middleware('authcheck');
Route::get('Access-denied',[UsersController::class,'accessdenied'])->name('Access-deniad');
Route::post('name1/{id}',[DatabaseController::class,'namechange1'])->middleware('authcheck');
Route::post('name2/{id}',[DatabaseController::class,'namechange2'])->middleware('authcheck');
Route::post('Type_of_name1/{id}',[DatabaseController::class,'typechange1'])->middleware('authcheck');
Route::post('Type_of_name2/{id}',[DatabaseController::class,'typechange2'])->middleware('authcheck');
Route::post('Role1/{id}',[DatabaseController::class,'rolechange1'])->middleware('authcheck');
Route::post('Role2/{id}',[DatabaseController::class,'rolechange1'])->middleware('authcheck');
Route::post('Title1/{id}',[DatabaseController::class,'titlechange1'])->middleware('authcheck');
Route::post('Title2/{id}',[DatabaseController::class,'titlechange2'])->middleware('authcheck');
Route::post('Date_of_creation_or_publication1/{id}',[DatabaseController::class,'yearchange1'])->middleware('authcheck');
Route::post('Date_of_creation_or_publication2/{id}',[DatabaseController::class,'yearchange2'])->middleware('authcheck');
Route::post('Dates_associated_with_name1/{id}',[DatabaseController::class,'datechange1'])->middleware('authcheck');
Route::post('Dates_associated_with_name2/{id}',[DatabaseController::class,'datechange2'])->middleware('authcheck');
Route::post('Type_of_resource1/{id}',[DatabaseController::class,'typerchange1'])->middleware('authcheck');
Route::post('Type_of_resource2/{id}',[DatabaseController::class,'typerchange2'])->middleware('authcheck');
Route::post('Content_type1/{id}',[DatabaseController::class,'contentchange1'])->middleware('authcheck');
Route::post('Content_type2/{id}',[DatabaseController::class,'contentchange2'])->middleware('authcheck');
Route::post('Other_names1/{id}',[DatabaseController::class,'otherchange1'])->middleware('authcheck');
Route::post('Other_names2/{id}',[DatabaseController::class,'otherchange2'])->middleware('authcheck');
Route::post('Material_type1/{id}',[DatabaseController::class,'materialchange1'])->middleware('authcheck');
Route::post('Material_type2/{id}',[DatabaseController::class,'materialchange2'])->middleware('authcheck');
Route::post('BNB_numbe1r/{id}',[DatabaseController::class,'bnbchange1'])->middleware('authcheck');
Route::post('BNB_number2/{id}',[DatabaseController::class,'bnbchange2'])->middleware('authcheck');
Route::post('Archival_Resource_Key1/{id}',[DatabaseController::class,'archivalchange1'])->middleware('authcheck');
Route::post('Archival_Resource_Key2/{id}',[DatabaseController::class,'archivalchange2'])->middleware('authcheck');
Route::post('ISBN1/{id}',[DatabaseController::class,'isbnchange1'])->middleware('authcheck');
Route::post('ISBN2/{id}',[DatabaseController::class,'isbnchange2'])->middleware('authcheck');
Route::post('Variant_titles1/{id}',[DatabaseController::class,'varientchange1'])->middleware('authcheck');
Route::post('Variant_titles2/{id}',[DatabaseController::class,'varientchange2'])->middleware('authcheck');
Route::post('Series_title1/{id}',[DatabaseController::class,'serieschange1'])->middleware('authcheck');
Route::post('Series_title2/{id}',[DatabaseController::class,'serieschange2'])->middleware('authcheck');
Route::post('within_series1/{id}',[DatabaseController::class,'nserieschange1'])->middleware('authcheck');
Route::post('within_series2/{id}',[DatabaseController::class,'nserieschange2'])->middleware('authcheck');
Route::post('Country_of_publication1/{id}',[DatabaseController::class,'countrychange1'])->middleware('authcheck');
Route::post('Country_of_publication2/{id}',[DatabaseController::class,'contentchange1'])->middleware('authcheck');
Route::post('Place_of_publication1/{id}',[DatabaseController::class,'placechange1'])->middleware('authcheck');
Route::post('Place_of_publication2/{id}',[DatabaseController::class,'placechange2'])->middleware('authcheck');
Route::post('Publisher1/{id}',[DatabaseController::class,'publisherchange1'])->middleware('authcheck');
Route::post('Publisher2/{id}',[DatabaseController::class,'publisherchange2'])->middleware('authcheck');
Route::post('Edition1/{id}',[DatabaseController::class,'editionchange1'])->middleware('authcheck');
Route::post('Edition2/{id}',[DatabaseController::class,'editionchange2'])->middleware('authcheck');
Route::post('Physical_description1/{id}',[DatabaseController::class,'physicalchange1'])->middleware('authcheck');
Route::post('Physical_description2/{id}',[DatabaseController::class,'physicalchange2'])->middleware('authcheck');
Route::post('Dewey_classification1/{id}',[DatabaseController::class,'deweychange1'])->middleware('authcheck');
Route::post('Dewey_classification2/{id}',[DatabaseController::class,'deweychange2'])->middleware('authcheck');
Route::post('BL_shelfmark1/{id}',[DatabaseController::class,'blchange1'])->middleware('authcheck');
Route::post('BL_shelfmark2/{id}',[DatabaseController::class,'blchange2'])->middleware('authcheck');
Route::post('Genre1/{id}',[DatabaseController::class,'genrechange1'])->middleware('authcheck');
Route::post('Genre2/{id}',[DatabaseController::class,'genrechange2'])->middleware('authcheck');
Route::post('Languages1/{id}',[DatabaseController::class,'languageschange1'])->middleware('authcheck');
Route::post('Languages2/{id}',[DatabaseController::class,'languageschange2'])->middleware('authcheck');
Route::post('Notes1/{id}',[DatabaseController::class,'noteschange1'])->middleware('authcheck');
Route::post('Notes2/{id}=',[DatabaseController::class,'noteschange2'])->middleware('authcheck');
Route::post('Provenance1/{id}',[DatabaseController::class,'provchange1'])->middleware('authcheck');
Route::post('Provenance2/{id}',[DatabaseController::class,'provechange2'])->middleware('authcheck');
Route::post('Topics1/{id}',[DatabaseController::class,'topicschange1'])->middleware('authcheck');
Route::post('Topics2/{id}',[DatabaseController::class,'topicschange2'])->middleware('authcheck');
Route::get('personcat',[CatagoryController::class,'person'])->name('personcat');
Route::get('organisationcat',[CatagoryController::class,'organisation'])->name('organisationcat');
Route::get('21thcat',[CatagoryController::class,'twentyfirst'])->name('21stcat');
Route::get('20thcat',[CatagoryController::class,'twentieth'])->name('20thcat');
Route::get('before20thcat',[CatagoryController::class,'beforetwentieth'])->name('before20thcat');
Route::get('englandcat',[CatagoryController::class,'england'])->name('englandcat');
Route::get('italycat',[CatagoryController::class,'italy'])->name('italycat');
Route::get('englishcat',[CatagoryController::class,'english'])->name('englishcat');
Route::get('italiancat',[CatagoryController::class,'italian'])->name('italiancat');
Route::get('russiancat',[CatagoryController::class,'russian'])->name('russiancat');

