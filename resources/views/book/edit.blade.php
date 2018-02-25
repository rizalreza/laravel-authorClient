@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row center">
			<center> <h3>Edit Book</h3> </center><br>
			<div class="col-sm-6 col-sm-offset-3">
			<form class=""  action="{{ url('/book/update')}}/{{$books->id}}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Book Title</label>
					   <input type="hidden" class="form-control" name="_method" value="PUT">
					<input type="text" class="form-control" name="title" value="{{$books->title}}" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Author</label>
					<select type="text" class="form-control" name="author_id" required autofocus>
						<option value="">Select Author</option>
                        @foreach ($authors as  $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                    </select>

				</div>
				
				<div class="form-group">
					<label for="">Genres</label>
					<input type="text" class="form-control" name="genres" value="{{$books->genres}}" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Synopsis</label>
					<textarea type="text" class="form-control" name="synopsis" style=" height: 150px" required autofocus>{{$books->synopsis}}</textarea> 
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save" name="">
				</div>
				
			</form>
			</div>
		</div>
	</div>
@endsection