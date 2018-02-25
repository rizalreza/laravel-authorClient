@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <center> <h3>Author List</h3> </center><br>
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
                      <th><center>Name</center></th>
                      <th><center>Email</center></th>
                      <th><center>Nationality</center></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     @foreach($authors as $author)
                      <td style="width:20%">{{ $author->name }}</td>
                      <td style="width:15%">{{ $author->email }}</td>
                      <td style="width:20%">{{ $author->nationality }}</td> 
                      <td style="width:4%">  <a href="{{URL('author/' . $author->id . '/edit') }}" class="btn btn-xs btn-primary">Update</a>
                      </td> 
                      <td style="width:4%">  <a href="{{url("/delete/{$author->id}")}}" class="btn btn-xs btn-danger">Delete</a>
                      </td>
    
                    </tr>
                    @endforeach
                  </tbody>
            
             </table>

            
        </div>
    </div>
</div>

@endsection