<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminPromoteController extends Controller
{
    public function promote_admin(int $id){
        $user = User::find($id);
    
        if ($user) {
            $userData['rules'] = 2;

            User::where('id', $id)->update($userData);
            return back()->with('message', 'User updated');
        }
    }

    public function promote_md(int $id){
        $user = User::find($id);
    
        if ($user) {
            $userData['rules'] = 1;

            User::where('id', $id)->update($userData);
            return back()->with('message', 'User updated');
        }
    }

    public function demote_md(int $id){
        $user = User::find($id);
    
        if ($user) {
            $userData['rules'] = 0;

            User::where('id', $id)->update($userData);
            return back()->with('message', 'User updated');
        }
    }
}
