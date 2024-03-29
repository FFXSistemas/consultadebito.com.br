<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta Débito</title>
    <link rel="stylesheet" href="/build/css/template.css">

    <style>
        body::before{
            content: "";
            width: 100%;
            height: 7px;
            background: #136799;
            position: absolute;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        @include('components._navbar')
    </div>
    <div class="content">
        @yield('content')
    </div>
        @include('components._footer')

</body>
<script src="/build/js/template.js"></script>
@yield('extra-scripts')
</html>