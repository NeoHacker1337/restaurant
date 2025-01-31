<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RestaurantManagementController;
use App\Http\Controllers\Admin\CuisineController;
use App\Http\Controllers\Admin\CustomerManagement;
use App\Http\Controllers\Admin\DeliveryManagement;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\InventoryCategoryController;
use App\Http\Controllers\InventoryItemController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\ModifierController;
use App\Http\Controllers\MenuTypeController;
use App\Http\Controllers\RestaurantMenuCardController;
use App\Http\Controllers\SpecialOfferController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use App\Http\Middleware\VendorMiddleware;
use App\Http\Middleware\DeliveryMiddleware;


// Frontend Controller
Route::get('/', [FrontendController::class, 'homepage'])->name('home.page');
Route::get('about-us', [FrontendController::class, 'aboutpage'])->name('about.page');
Route::get('contact', [FrontendController::class, 'contactpage'])->name('contact.page');
Route::get('teams', [FrontendController::class, 'teamspage'])->name('teams.page');
Route::get('recruitment', [FrontendController::class, 'recruitmentpage'])->name('recruitment.page');
Route::get('locations', [FrontendController::class, 'locationspage'])->name('locations.page');
Route::get('faq', [FrontendController::class, 'faqpage'])->name('faq.page');

Route::get('menu-restaurant', [FrontendController::class, 'menurestaurantpage'])->name('menu-restaurant.page');
Route::get('order', [FrontendController::class, 'orderpage'])->name('order.page');
Route::get('shop-details', [FrontendController::class, 'shoppage'])->name('shop.page');
Route::get('offers', [FrontendController::class, 'offerspage'])->name('offers.page');

Auth::routes();

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password.submit');
    Route::resource('restaurant-management', RestaurantManagementController::class);

    Route::post('/restaurants/delete/{id}', [RestaurantManagementController::class, 'delete'])->name('restaurants.delete');

    Route::resource('admin-profile', ProfileController::class);
    Route::resource('cuisines', CuisineController::class);
    Route::resource('customer-management', CustomerManagement::class);
    Route::resource('delivery-management', DeliveryManagement::class);
});


Route::middleware(CustomerMiddleware::class)->group(function () {
    Route::get('/customer/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('customer.dashboard');
    Route::resource('customer-profile', ProfileController::class);
});

Route::middleware(VendorMiddleware::class)->group(function () {
    Route::get('/vendor/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('vendor.dashboard');
    Route::resource('restaurant-profile', ProfileController::class);

    Route::resource('restaurant-menu-card', RestaurantMenuCardController::class);
    // Category Routes for e.g., "Appetizers", "Main Courses"
    Route::resource('categories', CategoryController::class);
    // Modifier Routes for e.g., "Extra Cheese", "Side Salad"
    Route::resource('modifiers', ModifierController::class);
    // Menu Type Routes for e.g., "Breakfast", "Lunch", "Dinner"
    Route::resource('menu-types', MenuTypeController::class);
    // Menu Item Routes 
    Route::resource('menu-items', MenuItemController::class);
    // Special Offer Routes 
    Route::resource('special-offers', SpecialOfferController::class);

    Route::resource('inventory-category', InventoryCategoryController::class);

    Route::resource('inventory-items',InventoryItemController::class);
});

Route::middleware(DeliveryMiddleware::class)->group(function () {
    Route::get('/delivery/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('delivery.dashboard');
    Route::resource('delivery-profile', ProfileController::class);
});
