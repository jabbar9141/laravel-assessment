<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllClients()
    {
        $clients = User::where('user_type',config('assessment.user_type.client'))->paginate(15);
        return view('users.clients', compact('clients'));
    }
}
