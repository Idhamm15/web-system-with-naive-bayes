<?php

namespace App\Http\Controllers;

use App\Models\DataTraining;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        return view('pages.Beranda');
    }
}
