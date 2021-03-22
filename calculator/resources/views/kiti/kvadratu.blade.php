@extends('layout.layout')

@section('kvadratu')

<h1>Kelimas kvadratu</h1>
<form action="{{route('do-math')}}" method="post">
<div>{{$r}}</div>
X: <input type="text" name="x">
<button type="submit">Pakelk</button>
@csrf 

</form>
@endsection