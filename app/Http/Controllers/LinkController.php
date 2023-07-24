<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class LinkController extends Controller
{
    public function about() {
        return view('about');
    }
    public function blog() {
        return view('blog');
    }
    public function contact() {
        return view('contact');
    }
    public function index() {
        return view('index');
    }
    public function postdetail() {
        return view('postdetail');
    }
    public function postpage() {
        $data = Session::get('tenet');

        return view('postpage')->with('post',null);
    }
}
