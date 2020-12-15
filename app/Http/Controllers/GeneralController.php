<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function show_service() {
        return view('service');
    }
    public function show_pricelist() {
        return view('pricelist');
    }
    public function show_catalogue() {
        return view('catalogue');
    }
    public function show_promo() {
        return view('promo');
    }
    public function show_gallery() {
        return view('gallery');
    }
    public function show_aboutme() {
        return view('aboutme');
    }
    public function show_contact() {
        return view('contact');
    }
}
