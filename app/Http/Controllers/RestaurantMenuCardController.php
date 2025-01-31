<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\MenuType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantMenuCardController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::with(['category', 'menuType'])->get();
        $restaurantName = \App\Models\RestaurantProfile::where('user_id', Auth::user()->id)->first();

        return view('restaurant-panel.restaurant-menu-card.index', compact('menuItems','restaurantName'));
    }
}
