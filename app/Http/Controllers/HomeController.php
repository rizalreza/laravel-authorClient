<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function listIndex()
    {
        $client = New GuzzleHttpClient();
        $apiRequest = $client->request('GET','http://localhost:8080/api/book');

        $books = json_decode($apiRequest->getBody()->getContents());

         // Mendapatkan data author utk input select
          $apiAuthor = $client->request('GET','http://localhost:8080/api/author');
          $authors = json_decode($apiAuthor->getBody()->getContents());

        return view('home',['books' => $books, 'authors' => $authors]);
    }
}
