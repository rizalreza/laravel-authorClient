@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <center> <h3>List Book</h3> </center><br>
        <div class="col-md-8 col-md-offset-2">

          @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif

            <table class="table" >
           
                  <thead>
                    <tr>
                      
                      <th><center>Title</center></th>
                      <th><center>Author ID</center></th>
                      <th><center>Genres</center></th>
                      <th><center>Synopsis</center></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                  
                     @foreach($books as $book)
                      <td style="width:20%">{{ $book->title }}</td>
                      <td style="width:20%">{{ $book->author_id }}</td> 
                      <td style="width:15%">{{ $book->genres }}</td>
                      <td style="width:20%">{{ $book->synopsis }}</td> 
                      <td style="width:4%">  <a href="{{URL('book/' . $book->id . '/edit') }}" class="btn btn-xs btn-primary">Update</a>
                      </td> 
                      <td style="width:4%">  <a href="{{URL("/delete/{$book->id}")}}" class="btn btn-xs btn-primary">Delete</a>
                      </td>
    
                    </tr>
                    @endforeach
                  </tbody>
            
             </table>

            
        </div>
    </div>
</div>

@endsection