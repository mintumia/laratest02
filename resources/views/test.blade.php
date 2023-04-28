<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/libraries/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

@if(session('name'))

    <h2>My name is : {{session('name')}}</h2>


@endif

{{--<h2>My name is : {{$name}}</h2>--}}
{{--<h2>My age is : {{$age}}</h2>--}}

<script src="/libraries/bootstrap.min.js"></script>
</body>
</html>
