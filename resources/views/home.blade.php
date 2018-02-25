@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <center><h2> Index</h2></center>
                </div>

                <div class="panel-body">
                     <table class="table" >
                          <thead>
                            <tr>
                              <th><center>Author</center></th>
                              <th><center>Title</center></th>
                              <th><center>Genres</center></th>
                    
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                 @foreach($books as $book)
                                  <td style="width:20%">{{ $book->author_id }}</td> 
                                  <td style="width:20%">{{ $book->title }}</td>
                                  <td style="width:15%">{{ $book->genres }}</td>
                                 
                            </tr>
                                 @endforeach
                          </tbody>
                    
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
