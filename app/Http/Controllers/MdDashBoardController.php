<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MdDashBoardController extends Controller
{
    public function index()
    {
        $count = Appointment::where('result', 0)->where('id_doctor', Auth::user()->id)->count();
        
        return view('md-lk', ['count' => $count]);
    }
}
