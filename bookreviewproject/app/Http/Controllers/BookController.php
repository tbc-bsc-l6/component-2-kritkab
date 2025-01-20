<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('books.list');
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){

    }
    public function edit(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
