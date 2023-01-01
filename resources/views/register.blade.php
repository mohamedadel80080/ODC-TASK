<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    div,
    label {
        margin: 10px;
    }

    form {
        margin: 10px;
        padding: 30px;

        border-radius: 20px;
        text-align: center;
        border: 2px solid black;

    }
    </style>
</head>

<body>


    <form method="POST" action="/register">
        @csrf

        <div class="form-group ">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group ">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address">
        </div>

        <div class="form-group ">
            <label for="inputAddress">job Title</label>
            <input type="text" class="form-control" name="jobTitle">
        </div>
        <div class="form-group ">
            <label for="inputAddress2">Age</label>
            <input type="number" class="form-control" name="age">
        </div>

        <div class="form-group ">
            <label for="inputCity">Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group ">
            <label for="phoneNumber">Phone Number</label>
            <input type="number" class="form-control" name="phoneNumber">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 15px ;">Sign in</button>
    </form>
</body>


</html>