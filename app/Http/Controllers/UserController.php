<?php

namespace App\Http\Controllers;

use App\Students;
use App\Category;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function form()
    {
        $student = Students::all();
        return view("form",[
            "students" => $student
        ]);
    }
}

