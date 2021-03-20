<h1>Dalyba</h1>
@if ($antras == 0) 
<p>Dalyba is nulio negalima</p>
@else
    {{$pirmas}} padalinus iš {{$antras}} gausime {{$pirmas / $antras}}
@endif