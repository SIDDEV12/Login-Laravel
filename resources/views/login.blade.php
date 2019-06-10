@extends('master')

@section('content')

	<style type="text/css">
		.login{

			margin: 100px auto;
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
			<h1> Login </h1>
			<div class="login" class="form-group">
				<form>
					<label>Username</label><br>
					<input type="text" name="username" class="form-control"><br>
					<label>Password</label><br>
					<input type="password" name="password" class="form-control"><br>
					<button class="btn btn-primary">Valider</button>
					<span style="margin-left: 180px">
						<a href="register">Register</a>
					</span>
				</form>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>

	


@stop

