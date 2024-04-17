<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{
    /*public function index(){
        $data = DB::table('books')->select('id', 'isbn',
        'title', 'author', 'description',
        'date_published')->get();
        DD($data);
        return view('books.index', ['books' => $data]);
    }*/
    function show(){
        $data=Book::all();
        return view('book',['book'=>$data]);
    }
}