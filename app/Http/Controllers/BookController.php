<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repository\Book\BookRepositoryInterface;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Routing\Redirector;

class BookController extends Controller
{
    //
    protected $Book;
    protected $baseUrl;
    protected $bookRepository;
    protected $student;

    public function __construct(BookRepositoryInterface $bookRepository,UrlGenerator $urlGenerator)
    {
//        $this->Book = new Book;

//        $this->middleware('auth:users');

        $this->bookRepository = $bookRepository;
        $this->baseUrl = $urlGenerator->to("/");
    }

    public function index(Request $request)
    {

        $data = $this->bookRepository->all($request->search);
        return view('panel/index' , compact('data' ));
    }

    public function lending(Request $request)
    {
        $this->bookRepository->lendingBook($request);
        return back();
    }

}
