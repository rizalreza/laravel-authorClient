@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row center">
			<center> <h3>Create Author</h3> </center><br>
			<div class="col-sm-6 col-sm-offset-3">
			<form class="" action="{{ route('author.store') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Nationality</label>
					<input type="text" class="form-control" name="nationality" required autofocus>
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save" name="">
				</div>
				
			</form>
			</div>
		</div>
	</div>
@endsection