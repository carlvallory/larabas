<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        $ip = request()->ip();

        return view('property.index', [
            'array' => [],
            'ip'    =>  $ip
        ]);
    }

    public function request()
    {
        $ip = request()->ip();

        return view('property.request', [
            'array' => [],
            'ip'    =>  $ip
        ]);
    }

    public function map()
    {
        $ip = request()->ip();

        return view('property.map', [
            'array' => [],
            'ip'    =>  $ip
        ]);
    }

}
