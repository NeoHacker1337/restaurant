<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        return view('frontend.homepage');
    }

    public function aboutpage()
    {
        return view('frontend.about');
    }

    public function contactpage()
    {
        return view('frontend.contact');
    }

    public function teamspage()
    {
        return view('frontend.teams');
    }

    public function recruitmentpage()
    {
        return view('frontend.recruitment');
    }

    public function locationspage()
    {
        return view('frontend.locations');
    }

    public function faqpage()
    {
        return view('frontend.faq');
    }

    public function menurestaurantpage()
    {
        return view('frontend.menu-restaurant');
    }

    public function orderpage()
    {
        return view('frontend.order');
    }

    public function shoppage()
    {
        return view('frontend.shop-details');
    }

    public function offerspage()
    {
        return view('frontend.offers');
    }
}
