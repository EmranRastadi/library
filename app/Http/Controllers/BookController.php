<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class BookController extends Controller
{
    //
    protected $Book;
    protected $baseUrl;
    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->Book = new BookController;
//        $this->middleware('auth.users');
        $this->baseUrl = $urlGenerator->to("/");
    }

    public function index()
    {
        return view('layouts/master');
    }

}
