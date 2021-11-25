<?php

    require('operations.php');

    if(isset(($_POST['signup']))){

        $email = $_POST['email'];
        $role = $_POST['role'];
        $status = $_POST['status'];
        $password = $_POST['password'];

        $signup = new Operations();
        $signup->signup($email, $role, $status, $password);
        echo "<script>alert('Your signup was successful, please proceed to login')</script>";
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD APP</title>
</head>
<body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">NPS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>

    <main class="container mt-5">
        <h3 class="font-weight-bold text-center">Add Nanny</h3>
        <div class="card py-3 px-3">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Role</label>
                    <input type="text" name="role" class="form-control" id="exampleInputPassword1" placeholder="Role">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="text" name="status" class="form-control" id="exampleInputPassword1" placeholder="Status">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" name="signup" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>