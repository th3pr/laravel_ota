<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


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
########## Main Route ##########
Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/searchHotel', 'searchController@indexHotel')->name('searchHotel');
Route::get('/searchTour', 'searchController@indexTour')->name('searchTour');
Route::get('/searchCar', 'searchController@indexcar')->name('searchCar');

// Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::resource('blog', 'PostShowController');
Route::resource('hotels', 'HotelShowController');
Route::resource('tours', 'TourShowController');
Route::resource('cars', 'CarShowController');

// Route::resource('fronttour', 'FrontTourController');
// Route::resource('fronthotel', 'FrontHotelController');
// Route::resource('frontcar', 'FrontCarController');
########## Auth ##########
Auth::routes(['verify'=>true]);
########## Private Route ##########
Route::group(['middleware' => ['auth','verified']], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/components', function(){
        return view('components');
    })->name('components');


    Route::resource('users', 'UserController');

    Route::get('/profile/{user}', 'UserController@profile')->name('profile.edit');

    Route::post('/profile/{user}', 'UserController@profileUpdate')->name('profile.update');

    Route::resource('roles', 'RoleController')->except('show');

    Route::resource('permissions', 'PermissionController')->except(['show','destroy','update']);

    Route::resource('category', 'CategoryController')->except('show');
    // Posts CRUD
    Route::resource('post', 'PostController');
    // Hotels CRUD
    Route::resource('hotel', 'HotelController');
    // Cars CRUD
    Route::resource('car', 'CarController');
    // Tours CRUD
    Route::resource('tour', 'TourController');
    // Guides CRUD
    Route::resource('guide', 'GuideController');

    Route::resource('booktour', 'BookTourController');
    Route::resource('bookhotel', 'BookHotelController');
    Route::resource('bookcar', 'BookCarController');

    // Route::resource('booktour', 'BookTourController');
    






 








    Route::get('/activity-log', 'SettingController@activity')->name('activity-log.index');

    Route::get('/settings', 'SettingController@index')->name('settings.index');

    Route::post('/settings', 'SettingController@update')->name('settings.update');


    Route::get('media', function (){
        return view('media.index');
    })->name('media.index');
});


