<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new User
     */    
    public function create(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user);
    }

    /**
     * Lists all created users
     */
    public function index(Request $request)
    {
        $users = User::all();
        return response()->json($users);
    }
}
