<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        $ip = request()->ip();

        return view('index', [
            'array' => [],
            'ip'    =>  $ip
        ]);
    }

    public function about()
    {
        $ip = request()->ip();

        return view('about', [
            'array' => [],
            'ip'    =>  $ip
        ]);
    }

    public function contact()
    {
        $ip = request()->ip();

        return view('contact', [
            'array' => [],
            'ip'    =>  $ip
        ]);
    }

}
