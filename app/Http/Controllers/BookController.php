<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class BookController extends Controller
{
   public function indexBook()
   {
	   	$client = New GuzzleHttpClient();
	   	$apiRequest = $client->request('GET','http://localhost:8080/api/book');

	   	$books = json_decode($apiRequest->getBody()->getContents());

         // Mendapatkan data author utk input select
          $apiAuthor = $client->request('GET','http://localhost:8080/api/author');
          $contentAuthor = json_decode($apiAuthor->getBody()->getContents());
          // dd($books);
	        
           // dd($contentAuthor);

	   	return view('book.index',['books' => $books,'contentAuthor' => $contentAuthor]);
   }

   public function createBook()
   {
       // Mendapatkan data author utk input select
      $client = New GuzzleHttpClient();
      $apiAuthor = $client->request('GET','http://localhost:8080/api/author');
      $contentAuthor = json_decode($apiAuthor->getBody()->getContents());

	  return view('book.create', ['contentAuthor' => $contentAuthor]);
   }

   public function storeBook(Request $request)
   	{
   	  $client = New GuzzleHttpClient();

	   $input = $request->all();
	   unset($input['_token']);

     


	   //Post to server
	   $apiRequest = $client->request('POST','http://localhost:8080/api/book',[
	   	'form_params' => [

	   'title' => $input['title'],
      'author_id' => $input['author_id'],
	   'genres' => $input['genres'],
	   'synopsis' => $input['synopsis'],
		]
	   	]);

	   	return redirect()->route('book.index')->with('response', 'Add book successfully');
   }

   public function editBook($id)
   {
   	 $client = New GuzzleHttpClient();
   	 $response = $client->request('GET','http://localhost:8080/api/book/' . $id);

   	 $books = json_decode($response->getBody()->getContents());

      // Mendapatkan data author utk input select
      $responseAuthor = $client->request('GET','http://localhost:8080/api/author');
      $authors = json_decode($responseAuthor->getBody()->getContents());
   	
   	 return view('book.edit',['books' => $books, 'authors'=> $authors]);

   }

   public function updateBook(Request $request, $id)
   {

   	$client = New GuzzleHttpClient();
   	$input = $request->all();
   		
	   $apiRequest = $client->request('PUT','http://localhost:8080/api/book/'. $id ,[
	   	'form_params' => [

	   'title' => $input['title'],
      'author_id' => $input['author_id'],
	   'genres' => $input['genres'],
	   'synopsis' => $input['synopsis'],
		]
	   	]);

	  return redirect()->route('book.index')->with('response', 'Update book successfully');

   }

   public function deleteBook($id)
   {
   	$client = New GuzzleHttpClient();
	   $apiRequest = $client->request('DELETE','http://localhost:8080/api/book/'. $id);
      $books = json_decode($apiRequest->getBody()->getContents());

	   return redirect()->route('book.index',['books' => $books] )->with('response', 'Delete book successfully');

   }

}
