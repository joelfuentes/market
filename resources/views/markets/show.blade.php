@extends('layouts.app')
@section('main')
<h1>{{$market->name}}</h1>
<ul>
	<li>location city: {{$market->city}}</li>
	<li>website: {{$market->website}}</li>
</ul>

<form action="{{route('markets.store')}}" method="post">
	{{csrf_field()}}

	<!-- <input type="hidden" name="_token" value="DaBSErIR_WPPI"> -->


	<label for="name">Market Name</label>
	<input type="text" name="name">
	<label for="city">Market City</label>
	<input type="text" name="city">
	<label for="website">Market Website</label>
	<input type="text" name="website">
	<button type="submit">Create</button>
</form>
@endsection
