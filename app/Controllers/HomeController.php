<?php

namespace App\Controllers;

use Chibi\Request;
use Chibi\Response;
use Chibi\Controller\Controller;

class HomeController extends Controller
{
    /**
     * Home Page
     * @throws \Chibi\Exceptions\ViewNotFoundException
     */
    public function index()
    {
        flash('error', [
            'Bad Credentials'
        ]);
        return view('home');
    }
}
