<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'title' => 'Profile Masjid'
        ]);
    }
}