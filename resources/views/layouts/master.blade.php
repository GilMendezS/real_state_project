<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="base_url" content="{{url('/')}}" >
    <meta name="csrf-token"  content="{{csrf_token()}}" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Materialize Css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    @yield('extra-css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Inmobiliaria</title>
</head>
<body>
    <header>
            @include('partials.navbar')
    </header>
    <aside>
        @if (Auth::check())
            @include('partials.sidebar')
        @endif
    </aside>
    <main>
        <div class="container-fluid" id="app">
            @yield('content')                
        </div>
    </main>
    @if (!Auth::check())
        @include('partials.footer')
    @endif
    
    <!--Materialize Js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>