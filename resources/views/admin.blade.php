<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    body {
        padding: 20px;

    }

    .card {

        margin: 50px;
    }
    </style>
</head>

<body>

    @foreach($all as $employee)
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h1 class="card-title">{{$employee->name}}</h5>
                <h4 class="card-text">{{$employee->jobTitle}}</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Address : {{$employee->address}}</li>
            <li class="list-group-item">Email : {{$employee->email}}</li>
            <li class="list-group-item">Age : {{$employee->age}}</li>
        </ul>
        <div class="card-body">
            Phone Number: {{$employee->phoneNumber}}
        </div>
    </div>
    @endforeach
</body>

</html>