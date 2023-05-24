<?php

namespace App\Http\Controllers;

use App\Models\timeTable;
use Illuminate\Http\Request;

class timeTableController extends Controller
{
    public function index(){
        $times = timeTable::all();
        return view('admin/dashboard', compact('times'));
    }
}
