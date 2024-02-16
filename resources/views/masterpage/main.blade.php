<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta name="viewport" content="{{ csrf_token() }}">
    <title>Project </title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    @yield('styles')

</head>
<body>


@component('masterpage.header')
@endcomponent

<main>

@yield('content')

</main>


@component('masterpage.footer')
@endcomponent

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
@yield('scripts')
    
</body>
</html>