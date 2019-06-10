@extends('master')

@section('content')

	<style type="text/css">
		.login{

			margin: 30px auto;
			border: solid #ccc 0.5px;
			border-radius: 10px;
			padding: 20px;
		}
		h1{
			margin: 40px auto;
			text-align: center;
		}
	</style>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h1> Register </h1>
			<div class="login" class="form-group">
				
					@if(count($errors))
						<ul>
						@foreach($errors->all() as $error)
							<li style="color:red">{{$error}}</li>
						@endforeach
						</ul>
					@endif
				 
				<form action="users/store" method="post">
					@csrf
					<label>Username</label><br>
					<input type="text" name="username" class="form-control" autocomplete="off" autofocus><br>
					<label>Password</label><br>
					<input type="password" name="password" class="form-control" autocomplete="off"><br>
					<label>Confirm Password</label><br>
					<input type="password" name="password2" class="form-control" autocomplete="off"><br>
					<button class="btn btn-primary" type="submit">Valider</button>
				</form>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>

@stop

