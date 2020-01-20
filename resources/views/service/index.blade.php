@extends('app')

@section('title', 'Services')

@section('content')
        <h1>This is Service Page</h1>

        <form action="/service" method="post">
            <input type="text" name="name" autocomplete="off">

            
            @csrf

            <button> Add Service </button>
        </form>
       <p style="color: red;"> @error('name') {{ $message }} @enderror

        <ul>
            @forelse($services as $service)
               
            <li>{{$service->name}}</li>
            
            @empty
            <li>No services available</li>
            
            @endforelse
        </ul>
    
@endsection
    