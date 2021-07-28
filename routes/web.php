<?php

use App\Jobs\UpdateUSer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
Route::get('/testCron', function () {
    /*
        Created By Mohamed Sherif
        This function will do the following
        1. Delete all users if found then sleep 20 seconds
        2. Create user then sleep another 20 seconds
        3. Change the name of the user to random string

        To test it go to the link then close it and keep refreshing in php myadmin
    */
    UpdateUSer::dispatch();
    return 'Created By Mohamed Sherif
        This function will do the following
        1. Delete all users if found then sleep 20 seconds
        2. Create user then sleep another 20 seconds
        3. Change the name of the user to random string

        To test it go to the link then close it and keep refreshing in php myadmin';
});
