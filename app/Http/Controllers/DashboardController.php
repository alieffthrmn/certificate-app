<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Metod index berfungsi untuk menampilkan halaman dashboard
    public function index()
    {
        return view('dashboard.index');
    }
}
