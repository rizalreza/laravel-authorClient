<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class AuthorController extends Controller
{
	public function indexAuthor()
	{
	    $client = New GuzzleHttpClient();
	    $apiRequest = $client->request('GET','http://localhost:8080/api/author');
	    $authors = json_decode($apiRequest->getBody()->getContents());

	    return view('author.index',['authors' => $authors]);
    }

    public function createAuthor()
    {
    	return view('author.create');
    }

    public function storeAuthor(Request $request)
    {
    	$client = New GuzzleHttpClient();

    	$input = $request->all();
    	unset($input['_token']);

    	//Post to server
    	 $apiRequest = $client->request('POST','http://localhost:8080/api/author',[
        'form_params' => [

           'name' => $input['name'],
           'email' => $input['email'],
           'nationality' => $input['nationality'],
            ]
        ]);

    	return redirect()->route('author.index')->with('response', 'Add author successfully');

    }

     public function editAuthor($id)
       {
         $client = New GuzzleHttpClient();
         $response = $client->request('GET','http://localhost:8080/api/author/' . $id);

         $authorContent= json_decode($response->getBody()->getContents());
        
         return view('author.edit',['authorContent' => $authorContent]);

       }

    public function updateAuthor(Request $request, $id)
    {
        $client = New GuzzleHttpClient();
        $input = $request->all();

        //Update request
         $apiRequest = $client->request('PUT','http://localhost:8080/api/author/'. $id ,[
        'form_params' => [

            'name' => $input['name'],
            'email' => $input['email'],
            'nationality' => $input['nationality'],
            ]
        ]);

         return redirect()->route('author.index')->with('response', 'Update author successfully');


    }

    public function deleteAuthor($id)
    {
        $client= New GuzzleHttpClient();
        $apiRequest = $client->request('DELETE','http://localhost:8080/api/author/' . $id);

        return redirect()->route('author.index')->with('response','Delete author successfully');
    }
}
