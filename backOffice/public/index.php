<?php
require '../../models/bdd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Panel admin</title>
</head>
<body>
<?php
    include('../views/header.php');

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 1) {
            include('../views/home.php');
        } else if ($page == 2) {
            include('../views/call.php');
        } else if ($page == 3) {
            include('../views/connexion.php');
        }
    } else {
        include('../views/home.php');
    }

    include('../views/footer.php');
    ?>
</body>
</html>