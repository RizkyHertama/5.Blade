<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        // Ambil data
        $data = Product::all();

        return view('index', compact('data'));
    
    }

    public function sport(){

        // Ambil data
        $data = Product::all();

        return view('sport', compact('data'));
    }

    public function suv(){

        // Ambil data
        $data = Product::all();

        return view('suv', compact('data'));
    }

    public function mpv(){

        // Ambil data
        $data = Product::all();

        return view('mpv', compact('data'));
    }
}
