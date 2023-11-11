<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
class UserController extends Controller
{
    public function show(string $id):View
    {
        return view("user.profile", [
            'user' => User::findOrFail($id)
        ]);
            
    }
}
