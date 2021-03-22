@extends('layout.layout')

@section('postCalc')

<h1>Calculator</h1>
<form action="{{route('do-math')}}" method="post">
<div>{{$r}}</div>
X: <input type="text" name="x">
Y: <input type="text" name="y">
<button type="submit">Calculate</button>
@csrf 
{{-- ^apsaugo nuo nesamoningu neteisingu formu --}}
</form>
@endsection