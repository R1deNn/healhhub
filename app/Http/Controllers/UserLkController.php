<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLkController extends Controller
{
    public function index()
    {
        $count = Appointment::where('result', 0)->where('id_user', Auth::user()->id)->count();
        
        return view('user-lk', ['count' => $count]);
    }
}
