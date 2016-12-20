@extends('layouts.guest')

@section('content')
       
    <h1>Products overview</h1>
    <a href="/overview/description">description</a>
    @foreach($product as $p) 
        {{$p->name}}
    
    @endforeach
}

@endsection