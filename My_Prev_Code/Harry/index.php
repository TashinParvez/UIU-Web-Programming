<?php


// connect database
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'pizza';


// connection obj
$conn = mysqli_connect($servername, $username, $password, $databasename);

// check connection
if (!$conn) {
    die("Sorry failed to connect: " . mysqli_connect_error());
}


//-------------------- get data from database ---------------------------

// write query 
$sql = "SELECT title, ingridients, id 
FROM pizzainfo 
ORDER BY date DESC";

// make/run query and get result
$result = mysqli_query($conn, $sql);


// fetch the resultend rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection 
mysqli_close($conn);


// print_r($pizzas);


// ---------------------------------------

// foreach ($pizzas as $pizza) {
//     echo  $pizza['id'] . "<br>";
//     echo  $pizza['title'] . "<br>";
//     echo  $pizza['ingridients'] . "<br>";
// }


// -----------------------------------------

// separate all ingridents
// print_r(explode(',', $pizzas[0]['ingridients']));




// ------------------------ Rendering Data to the Browser --------------







//--------------- $_GET is a global ---------------

/*
if (isset($_GET['submit'])) { // get method show data in URL that is why POst method is more secred
echo $_GET['email'];
echo $_GET['pass'];
}
*/

//--------------- $_POST is a global ---------------

// $errors = array('email' = '', 'pass' = '');

/*

if (isset($_POST['submit'])) { // post dont show data in URL


if (empty($_POST['email'])) {
echo " Required an email address ";
} else if (empty($_POST['pass'])) {
echo " Required a Password ";
} else {

$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "Put a Valid email address";
}

$password = $_POST['pass'];

// echo ' Email: ' . htmlspecialchars($_POST['email']) . "<br>";
// echo ' Pass: ' . htmlspecialchars($_POST['pass']) . "<br>";
}
}

*/



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

    <!-- Body -->

    <div class="container mt-2">
        <div class="row">
            <?php
            foreach ($pizzas as $pizza) { ?>

                <div class="col s6 md3">

                </div>

            <?php } ?>

        </div>
    </div>

    <!-- Cards -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        foreach ($pizzas as $pizza) { ?>
            <div class="col">
                <div class="card h-100">
                    <img src="pizza_image.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title">
                            <?php echo htmlspecialchars($pizza['title']);  ?>
                        </h5>
                        <p class="card-text">
                            <!-- <?php echo htmlspecialchars($pizza['ingridients']);  ?>  -->

                            <?php $elements = (explode(',', $pizza['ingridients']));    ?>

                        <p><b>Used ingridients</b></p>
                        <ol class="list-group-numbered">
                            <?php
                            foreach ($elements as $ing) { ?>
                                <li class="list-group-item">
                                    <?php echo htmlspecialchars($ing); ?>
                                </li>
                            <?php } ?>
                        </ol>

                        </p>


                    </div>



                    <div class="card-footer d-flex justify-content-between">
                        <small class="text-muted">Last updated
                            <?php echo htmlspecialchars($pizza['id']); ?>
                            (ID) mins ago
                        </small>

        

                        <a href="details.php?id=<?php echo $pizza['id']; ?>" class="btn btn-outline-secondary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            More Info
                        </a>


                    </div>


                </div>
            </div>
        <?php } ?>

    </div>





</body>

</html>