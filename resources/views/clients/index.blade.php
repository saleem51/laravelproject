@extends('layout')


@section('content')
<h1>Clients</h1>

<ul>
   @foreach ($clients as $client )
       <li>{{$client->name}}</li>
   @endforeach
</ul>
<hr>
<form action="/salimaz/public/clients" method="POST">
    @csrf
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="pseudo"> 
    </div>
    <button type="submit" class="btn btn-primary mt-3">Ajouter le client</button>
</form>
@endsection