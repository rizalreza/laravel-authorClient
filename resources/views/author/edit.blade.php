@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row center">
			<center> <h3>Edit Author</h3> </center><br>
			<div class="col-sm-6 col-sm-offset-3">
			<form class="" action="{{ url('/author/update')}}/{{$authorContent->id}}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Name</label>
					<input type="hidden" class="form-control" name="_method" value="PUT">
					<input type="text" class="form-control" name="name" value="{{$authorContent->name}}" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" value="{{$authorContent->email}}" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Nationality</label>
					<input type="text" class="form-control" name="nationality" value="{{$authorContent->nationality}}" required autofocus>
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save" name="">
				</div>
				
			</form>
			</div>
		</div>
	</div>
@endsection