<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>
    
    @include('components.header')

    @include('components.jumbotron')

    @include('components.comics')

    @include('components.navByIcons')

    @include('components.footerLinks')

    @include('components.footerFollow')

</body>
</html>