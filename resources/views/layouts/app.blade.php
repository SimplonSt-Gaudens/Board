<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <!-- Scripts -->
        <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>
    </head>
    <body>
        <div class="ui top attached menu">
            <a href="#" class="item">board</a>
            @if(!Auth::guest())
            <div class="right menu">
                <a href="" class="item">item</a>
                <a href="" class="item">item</a>
                <a href="{{url('/logout')}}" class="item">logout</a>
            </div>
            @endif
        </div>
        <div id="app" class="ui container centered grid">
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="/js/components/jquery.min.js"></script>
        <script src="/js/components/semantic.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>