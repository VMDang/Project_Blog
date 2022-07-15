<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;

Class PostController extends Controller
{
    public function index(){
        return view('index');
    }
    public function add(){
        return view(('post/create'));
    }
    public function create(HttpRequest $request){
        print_r($request->all());
        exit;
    }
}


