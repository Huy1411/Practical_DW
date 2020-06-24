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
    public function index()
    {
        return view("form");
    }
    public function show()
    {
        return view("notification");
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|min:6",
            "telephone" => "required|min:6",
            "feedback" => "required|min:6|max:100",
        ]);
        try {
            Students::create([
                "name" => $request->get("name"),
                "email" => $request->get("email"),
                "telephone" => $request->get("telephone"),
                "feedback" => $request->get("feedback"),
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/notification");
    }


}

