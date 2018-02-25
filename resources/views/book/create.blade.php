@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row center">
			<center> <h3>Create Book</h3> </center><br>
			<div class="col-sm-6 col-sm-offset-3">
			<form class="" action="{{ route('book.store') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Book Title</label>
					<input type="text" class="form-control" name="title" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Author</label>
					<select type="text" class="form-control" name="author_id" required autofocus>
						<option value="">Select Author</option>
                        @foreach ($contentAuthor as  $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                    </select>

				</div>

				<div class="form-group">
					<label for="">Genres</label>
					<input type="text" class="form-control" name="genres" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Synopsis</label>
					<textarea type="text" class="form-control" name="synopsis" style=" height: 150px" required autofocus></textarea> 
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save" name="">
				</div>
				
			</form>
			</div>
		</div>
	</div>
@endsection