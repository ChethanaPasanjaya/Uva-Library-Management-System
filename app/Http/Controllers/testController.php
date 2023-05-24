<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function getData()
    {
        $id = "B0001";
        $book = Book::where('book_id', $id)->get();
        return view('admin.test', compact('book'));
    }
}
