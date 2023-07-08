<?php
namespace App\Http\Controllers\Global\Profile;

use App\Http\Controllers\Controller;


class ProfileController extends Controller
{
    public function index()
    {
		$profile ="";
        return view('global.profile.index', compact('profile'));
    }
}

