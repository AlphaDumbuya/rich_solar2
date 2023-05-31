<?php

use App\Models\SolarLight;
use App\Models\SolarPanel;
use App\Models\SolarBattery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FansController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LightsController;
use App\Http\Controllers\PanelsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FreezersController;
use App\Http\Controllers\BatteriesController;
use App\Http\Controllers\InvertersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ControllersController;

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

//ALL PUBLIC ROUTES
Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'categories']);
Route::get('/contact', [ContactController::class, 'index']);


/*Admin ROutes*/

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

// ALL BATTERIES ROUTES
//SHOW ALL BATTERIES
Route::get('/admin/batteries', [BatteriesController::class, 'index'])->middleware('auth');
//SAVE BATTERY
Route::post('/admin/battery', [BatteriesController::class, 'store'])->middleware('auth');
//EDIT BATTERY
Route::get('/admin/batteries/{battery}/edit', [BatteriesController::class, 'edit'])->middleware('auth');
//UPDATE BATTERY
Route::put('/admin/battery/{battery}', [BatteriesController::class, 'update'])->middleware('auth');
//DELETE BATTERY
Route::delete('/admin/battery/{battery}', [BatteriesController::class, 'destroy'])->middleware('auth');
//CREATE BATTERY
Route::get('/admin/batteries/create', [BatteriesController::class, 'create'])->middleware('auth');


/**---------------------------------------------------------------------------------------------
 *              ALL SOLAR PANEL ROUTES
 * ---------------------------------------------------------------------------------------------
 */

 Route::get('/admin/panels', [PanelsController::class, 'index'])->middleware('auth');
 //CREATE PANEL
 Route::get('/admin/panels/create', [PanelsController::class, 'create'])->middleware('auth');
 //SAVE PANEL
 Route::post('/admin/panel', [PanelsController::class, 'store'])->middleware('auth');
 //EDIT PANEL
 Route::get('/admin/panels/{panel}/edit', [PanelsController::class, 'edit'])->middleware('auth');
 //UPDATE PANEL
 Route::put('/admin/panel/{panel}', [PanelsController::class, 'update'])->middleware('auth');
 //DELETE PANEL
 Route::delete('/admin/panel/{panel}', [PanelsController::class, 'destroy'])->middleware('auth');




/**---------------------------------------------------------------------------------------------
 *              ALL SOLAR POWER CONTROLLERS ROUTES
 * ---------------------------------------------------------------------------------------------
 */

 Route::get('/admin/controllers', [ControllersController::class, 'index'])->middleware('auth');
 //CREATE POWER CONTROLLER
 Route::get('/admin/controllers/create', [ControllersController::class, 'create'])->middleware('auth');
 //SAVE POWER CONTROLLER
 Route::post('/admin/controller', [ControllersController::class, 'store'])->middleware('auth');;
 //EDIT POWER CONTROLLER
 Route::get('/admin/controllers/{controller}/edit', [ControllersController::class, 'edit'])->middleware('auth');;
 //UPDATE POWER CONTROLLERS
 Route::put('/admin/controller/{controller}', [ControllersController::class, 'update'])->middleware('auth');;
 //DELETE POWER CONTROLLERS
 Route::delete('/admin/controller/{controller}', [ControllersController::class, 'destroy'])->middleware('auth');;



/**---------------------------------------------------------------------------------------------
 *              ALL SOLAR POWER FANS ROUTES
 * ---------------------------------------------------------------------------------------------
 */

 Route::get('/admin/fans', [FansController::class, 'index'])->middleware('auth');
 //CREATE FAN
 Route::get('/admin/fans/create', [FansController::class, 'create'])->middleware('auth');
 //SAVE FAN
 Route::post('/admin/fan', [FansController::class, 'store'])->middleware('auth');
 //EDIT FAN
 Route::get('/admin/fans/{fan}/edit', [FansController::class, 'edit'])->middleware('auth');
 //UPDATE FAN
 Route::put('/admin/fan/{fan}', [FansController::class, 'update'])->middleware('auth');
 //DELETE FAN
 Route::delete('/admin/fan/{fan}', [FansController::class, 'destroy'])->middleware('auth');


/**---------------------------------------------------------------------------------------------
 *              ALL SOLAR POWER FREEZERS ROUTES
 * ---------------------------------------------------------------------------------------------
 */

 Route::get('/admin/freezers', [FreezersController::class, 'index'])->middleware('auth');
 //CREATE FREEZER
 Route::get('/admin/freezers/create', [FreezersController::class, 'create'])->middleware('auth');
 //SAVE FREEZER
 Route::post('/admin/freezer', [FreezersController::class, 'store'])->middleware('auth');
 //EDIT FREEZER
 Route::get('/admin/freezers/{freezer}/edit', [FreezersController::class, 'edit'])->middleware('auth');
 //UPDATE FREEZER
 Route::put('/admin/freezer/{freezer}', [FreezersController::class, 'update'])->middleware('auth');
 //DELETE FREEZER
 Route::delete('/admin/freezer/{freezer}', [FreezersController::class, 'destroy'])->middleware('auth');


 /**---------------------------------------------------------------------------------------------
 *              ALL SOLAR POWER INVERTERS ROUTES
 * ---------------------------------------------------------------------------------------------
 */

 Route::get('/admin/inverters', [InvertersController::class, 'index'])->middleware('auth');
 //CREATE INVERTER
 Route::get('/admin/inverters/create', [InvertersController::class, 'create'])->middleware('auth');
 //SAVE INVERTER
 Route::post('/admin/inverter', [InvertersController::class, 'store'])->middleware('auth');
 //EDIT INVERTER
 Route::get('/admin/inverters/{inverter}/edit', [InvertersController::class, 'edit'])->middleware('auth');
 //UPDATE INVERTER
 Route::put('/admin/inverter/{inverter}', [InvertersController::class, 'update'])->middleware('auth');
 //DELETE INVERTER
 Route::delete('/admin/inverter/{inverter}', [InvertersController::class, 'destroy'])->middleware('auth');


  /**---------------------------------------------------------------------------------------------
 *              ALL SOLAR LIGHTS ROUTES
 * ---------------------------------------------------------------------------------------------
 */

 Route::get('/admin/lights', [LightsController::class, 'index'])->middleware('auth');
 //CREATE LIGHT
 Route::get('/admin/lights/create', [LightsController::class, 'create'])->middleware('auth');
 //SAVE LIGHT
 Route::post('/admin/light', [LightsController::class, 'store'])->middleware('auth');
 //EDIT LIGHT
 Route::get('/admin/lights/{light}/edit', [LightsController::class, 'edit'])->middleware('auth');
 //UPDATE LIGHT
 Route::put('/admin/light/{light}', [LightsController::class, 'update'])->middleware('auth');
 //DELETE LIGHT
 Route::delete('/admin/light/{light}', [LightsController::class, 'destroy'])->middleware('auth');




  /**---------------------------------------------------------------------------------------------
 *              ALL SOLAR PRODUCTS CATEGORIES ROUTES
 * ---------------------------------------------------------------------------------------------
 */

 Route::get('/admin/categories', [CategoriesController::class, 'index'])->middleware('auth');
 //CREATE CAT
 Route::get('/admin/categories/create', [CategoriesController::class, 'create'])->middleware('auth');
 //SAVE CAT
 Route::post('/admin/category', [CategoriesController::class, 'store'])->middleware('auth');
 //EDIT CAT
 Route::get('/admin/categories/{category}/edit', [CategoriesController::class, 'edit'])->middleware('auth');
 //UPDATE CAT
 Route::put('/admin/category/{category}', [CategoriesController::class, 'update'])->middleware('auth');
 //DELETE LIGHT
 Route::delete('/admin/category/{category}', [CategoriesController::class, 'destroy'])->middleware('auth');



   /**---------------------------------------------------------------------------------------------
 *              ALL USERS ROUTES
 * ---------------------------------------------------------------------------------------------
 */

 Route::get('/login', [UsersController::class, 'login'])->name('login');
 Route::post('/users/authenticate', [UsersController::class, 'authenticate']);


 Route::get('/admin/users', [UsersController::class, 'index'])->middleware('auth');
 //CREATE USER
 Route::get('/admin/users/create', [UsersController::class, 'create'])->middleware('auth');
 //SAVE USER
 Route::post('/admin/user', [UsersController::class, 'store'])->middleware('auth');
 //LOG USER OUT
 Route::post('/logout', [UsersController::class, 'logout'])->middleware('auth');
 
 //DELETE USER
 Route::delete('/admin/user/{user}', [UsersController::class, 'destroy'])->middleware('auth');

//ROUTES FOR SHOWING SINGLE SUBJECT
Route::get('/admin/batteries/{battery}', [BatteriesController::class, 'show'])->middleware('auth');
Route::get('/admin/controllers/{controller}', [ControllersController::class, 'show'])->middleware('auth');
Route::get('/admin/panels/{panel}', [ControllersController::class, 'show'])->middleware('auth');
Route::get('/admin/fans/{fan}', [FansController::class, 'show'])->middleware('auth');
Route::get('/admin/freezers/{freezer}', [FreezersController::class, 'show'])->middleware('auth');
Route::get('/admin/inverters/{inverter}', [InvertersController::class, 'show'])->middleware('auth');
Route::get('/admin/lights/{light}', [LightsController::class, 'show'])->middleware('auth');

