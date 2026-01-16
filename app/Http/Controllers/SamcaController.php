<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamcaController extends Controller
{
    public function index()
    {
        return view('samca.home');
    }

    public function affiche()
    {
        return view('samca.affiche');
    }

    public function magazine()
    {
        return view('samca.magazine');
    }
}
