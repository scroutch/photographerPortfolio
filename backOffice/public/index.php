<?php
require '../../models/bdd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Panel admin</title>
</head>
<body>
<div class="row">
        <?php
        if (isset($_SESSION['errorMess'])) {
            echo $_SESSION['errorMess'];
            unset($_SESSION['errorMess']);
        }
        ?>
</div>
<?php
    include('../views/header.php');

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 1) {
            include('../views/home.php');
        } else if ($page == 2) {
            include('../views/formAjout.php');
        } else if ($page == 3) {
            include('../views/connexion.php');
        }
    } else {
        include('../views/home.php');
    }

    include('../views/footer.php');
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>