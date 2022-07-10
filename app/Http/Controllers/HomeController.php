<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function toto()
    {
        return view('toto');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function province()
    {
        return view('pages.province');
    }
    public function partenaire()
    {
        return view('pages.partenaire');
    }
    public function agent()
    {
        return view('pages.agent');
    }
    public function reference_term()
    {
        return view('pages.terms-ref');
    }
    public function participant($reference_id)
    {
        return view('pages.participant', compact('reference_id'));
    }

    public function utilisateurs()
    {
        return view('pages.utilisateur');
    }
}
