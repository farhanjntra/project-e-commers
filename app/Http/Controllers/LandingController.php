<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function admin()
    {
        return view('admin.layout.index');
    }

    public function index()
    {
        return view('user.index');
    }

    public function bestSeller()
    {
        return view('user.best-seller.index');
    }

    public function newArrival()
    {
        return view('user.arrival.index');
    }
    public function tentang()
    {
        return view('user.tentang.index');
    }
}
