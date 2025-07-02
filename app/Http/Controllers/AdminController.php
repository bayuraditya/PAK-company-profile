<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Team;
use App\Models\Contact;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $totalProjects = Project::count();
        $totalTeams = Team::count();
        $totalUsers = User::count();
        $totalContacts = Contact::count();

        return view('admin.index', compact(
            'totalProjects',
            'totalTeams',
            'totalUsers',
            'totalContacts'
        ));
    }
}
