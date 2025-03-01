<?php


include("connect_db.php");

//-------------------- get data from database ---------------------------

// write query 
$sql = "SELECT title, ingridients, id FROM pizzainfo";

// make/run query and get result
$result = mysqli_query($conn, $sql);


// fetch the resultend rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection 
// mysqli_close($conn);


// print_r($pizzas);


//--------------- $_GET  is a global ---------------

/*
    if (isset($_GET['submit'])) {  // get method show data in URL that is why POst method is more secred
        echo $_GET['email'];
        echo $_GET['pass'];
    }
*/

//--------------- $_POST  is a global ---------------

// $errors = array('email' = '', 'pass' = '');



if (isset($_POST['submit'])) { // post dont show data in URL


    if (empty($_POST['email'])) {
        // echo " Required an email address ";
    } else if (empty($_POST['pass'])) {
        echo " Required a Password ";
    } else {

        $email  = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Put a Valid email address";
        }

        $password = $_POST['pass'];

        // echo ' Email:  ' . htmlspecialchars($_POST['email']) . "<br>";
        // echo ' Pass:  ' . htmlspecialchars($_POST['pass']) . "<br>";
    }

    // ------------------------  Save data to database --------------

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $ingridients = mysqli_real_escape_string($conn, $_POST['ingridients']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);


    // creat insert sql

    $sql = "INSERT INTO pizzainfo (id, title, ingridients, email, pass) 
        VALUES (NULL, '$title', '$ingridients', '$email', '$password')";

    // save to database 

    if (mysqli_query($conn, $sql)) {
        // data insert
        // echo 'Data inserted';
        header('Location: index.php');
    } else {
        echo 'Insert Querey didn\'t work : ' . mysqli_errno($conn);
    }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From In PHP</title>


    <!-- bootstrap link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>

    <!-------------- Nav Bar -------------->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">From In PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-------------- Form -------------->

    <div class="container mt-3 col-4 mx-auto">

        <form action="FormInPHP.php" method="POST">

            <div class="mb-3">
                <label for="exampleInputTitle" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputTitle">
            </div>

            <div class="mb-3">
                <label for="exampleInputInd" class="form-label">Ingridients</label>
                <input type="text" name="ingridients" class="form-control" id="exampleInputInd">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>