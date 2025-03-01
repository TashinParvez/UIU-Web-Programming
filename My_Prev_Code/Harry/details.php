<?php


include('connect_db.php');
if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    // sql query 
    $sql = "
      DELETE FROM pizzainfo
      WHERE id = $id_to_delete;";

    if (mysqli_query($conn, $sql)) {

        header("Location: index.php");
    } else {
        echo "Query of delete pizza didn't work" . mysqli_error($conn);
    }
}

$pizzainfo = null;

// check get request id 
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // sql query 
    $sql = "
    SELECT *
    FROM pizzainfo
    WHERE id = $id;
    ";

    // get query result
    $result = mysqli_query($conn, $sql);

    // conver to array
    $pizzainfo = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($pizzainfo);
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

    <!-- Body -->

    <?php
    if ($pizzainfo) {
    ?>
        <ul class="list-group col-5 mx-auto mt-xxl-5">
            <li class="list-group-item list-group-item-action list-group-item-dark" aria-current="true">Details of
                <b> <?php
                    echo $pizzainfo['title'];
                    ?> </b>
                Pizza
            </li>
            <li class="list-group-item">

                <b> Creator mail :</b>
                <?php
                echo htmlspecialchars($pizzainfo['email']);
                ?>
            </li>
            <li class="list-group-item">
                <b>Created: </b>
                <?php
                echo htmlspecialchars($pizzainfo['date']);
                ?>
            </li>
            <li class="list-group-item"><b>Ingridients :</b>
                <?php
                echo htmlspecialchars($pizzainfo['ingridients']);
                ?>
            </li>

            <!-- DELETE -->

            <form action="details.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizzainfo['id']; ?>">
                <button type="submit" class="btn btn-primary mx-auto mt-4" name="delete">Remove this Pizza</button>
            </form>

        </ul>
    <?php
    }
    ?>





</body>

</html>