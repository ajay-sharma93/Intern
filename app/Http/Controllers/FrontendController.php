<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function create()
    {
        // return $request;

        return view('frontend.create');
    }

    public function list()
    {
        return view('frontend.list');
    }
    // public function saveDetail(Request $request)
    // {
    //     // Category::create
    // }
}
