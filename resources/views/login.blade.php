<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Name</title>
    <link rel="stylesheet" href="/libraries/bootstrap.min.css">
</head>
<body>
{{--<h2>Name is : {{$customer->name}}</h2>--}}
{{--<h2>Email is : {{$customer->email}}</h2>--}}

@foreach($customer as $cust)

   <h2>Name : {{$cust->name}}</h2>
   <h2>Email : {{$cust->name}}</h2>
@endforeach



<script src="/libraries/bootstrap.min.js"></script>
</body>
</html>
