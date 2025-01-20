<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(){
        $books= Book::orderBy('created_at', 'DESC')->where('status',1)->paginate(3);
        return view ('home',[
            'books' => $books
        ]);
    }
}
