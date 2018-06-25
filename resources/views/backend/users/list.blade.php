@extends('layouts.app')

@section('content')
    <div class="wrapper">
        @foreach($users as $user)
            {{$user->name}} <a href="{{route('bright.get', ['id' => $user->id])}}"> Bright geven</a>
        @endforeach
    </div>
@endsection