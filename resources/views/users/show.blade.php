@extends('master')

@section('content')

	<?php 
		$Num= 1;
	?>

	<h1 style="text-align: center">Liste des Utilisateurs</h1>


	<div class="row">
		<div class="col-sm-2"></div>

		<div class="col-sm-8">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Num</th>
						<th>Nom</th>
						<th>Rank</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td><?php echo $Num++ ?></td>
						<td>{{$user->username}}</td>
						<td>{{$user->rank}}</td>
						<td>
							<button class="btn btn-primary">Modifier</button>
							<button class="btn btn-danger">Supprimer</button>
						</td>
					</tr>

					@endforeach
				</tbody>
			</table>

		</div>
	</div>

@stop