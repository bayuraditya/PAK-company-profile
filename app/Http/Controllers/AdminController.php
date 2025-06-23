<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // $admins = User::where('role', 'admin')->get(); // filter khusus admin
        $admins = 2 ;// filter khusus admin
        return view('admin.index', compact('admins'));
    }
}
