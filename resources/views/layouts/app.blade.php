<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bright: @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('assets/styles/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="wrapper">
        <div class="logo">
            <img src="{{url('assets/images/bright_logo_cropped.png')}}" />
        </div>
        <nav class="global--navigation">
            <ul class="navigation-list">
                <li class="navigation-list-item active"><a href="{{route('home')}}">Home</a></li>
                <li class="navigation-list-item"><a href="{{route('vision')}}">Vision</a></li>
                @if(!Auth::user())
                    <li class="navigation-list-item"><a href="{{route('login')}}" class="flat-button">Inloggen</a></li>
                @else
                    <li class="navigation-list-item"><a href="{{route('home')}}">{{Auth::user()->name}}
                            ({{Auth::user()->role}})</a></li>
                    <li class="navigation-list-item"><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif
            </ul>
        </nav>
    </div>
</header>

@yield('content')

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script type="text/javascript">
    $(document).on("ready", function () {
        $(".module-container").flip();
    })
</script>
</body>
</html>
