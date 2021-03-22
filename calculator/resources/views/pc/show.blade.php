@extends('layout.layout')

@section('postCalc')

<h1>Calculator</h1>
<form action="{{route('do-smth')}}" method="post">
<div>{{$r}}</div>
X: <input type="text" name="x">
Y: <input type="text" name="y">
<button type="submit">DO MATH</button>
@csrf

</form>
@endsection