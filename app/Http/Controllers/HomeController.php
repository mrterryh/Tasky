<?php

namespace Tasky\Http\Controllers;

class HomeController extends Controller
{
    public function getHome()
    {
        return view('home.home');
    }
}