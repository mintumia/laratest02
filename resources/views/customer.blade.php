<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Controller</title>
    <link rel="stylesheet" href="/libraries/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <h2>Hello from Customer Controller</h2>

    <a href="{{route("customer.signup")}}">Signup Now</a>

    <table class="table table-bordered border-secondary text-center">
        <thead >
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>


            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->dob}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->status}}</td>
            </tr>
            @endforeach




        </tbody>


    </table>







</div>

<script src="/libraries/bootstrap.min.js"></script>
</body>
</html>




