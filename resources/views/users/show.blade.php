@extends('app')

@section('content')
<div class="container">
	<div class="row">

		<h1>Show a user</h1>
		<p>ID : {{ $user->id }}</p>
		<p>Nom : {{ $user->name }}</p>
		<p>E-mail : {{ $user->email }}</p>
	</div>
</div>
@endsection
