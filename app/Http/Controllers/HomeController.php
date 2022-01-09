<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            "total_assignment" => Assignment::where("user_id", Auth::user()->user_id)->where("show_date", "<=", date("Y-m-d"))->where("assign_status_id", 1)->count(),
        ];
        return view('home', $data);
    }
}
