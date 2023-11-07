<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLogin;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard.dashboard_view');
    }

}
