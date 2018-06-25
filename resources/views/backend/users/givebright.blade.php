@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <form method="POST" action="{{route('bright.give', ['id' => $user->id])}}">
            Hoeveel Bright wilt u {{$user->name}} geven?</b>
            @csrf
            <input type="text" name="amount" placeholder="Bright" />
            <input type="submit" value="Geven" />

            <br/><br />
            Hij heeft er al <b>{{$user->bright}}
        </form>
    </div>
@endsection