@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  <center><h2> Index</h2></center><br>
                  
                     <table class="table" >
                      @foreach($authors as $author)
                                <th colspan="2"> Author : {{$author->name}}</th>  
                            <tr>
                              <th><center>Title</center></th>
                              <th><center>Genres</center></th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach($books as $book)
                              @if($book->author_id == $author->id)
                              <tr>
                                <td><center>{{$book->title}}</center></td> 
                                <td><center>{{$book->genres}}</center></td> 
                                 
                              </tr>
                              @endif
                              @endforeach
                           @endforeach
                           
                          </tbody>
                           
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
