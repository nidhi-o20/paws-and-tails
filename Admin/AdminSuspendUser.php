<?php

session_start();
$showAlert = false;
$showError = false;
$userid = !empty($_GET['id']) ? $_GET['id'] : '';
if (!empty($userid) && is_numeric($userid)) {
    include('../DataBase/connection.php');
    $sql = "SELECT * from `user` where `user_id`= $userid";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows > 0) {
        $user = mysqli_fetch_assoc($result);
        $email = $user['email'];
        $sql1 = "INSERT INTO `suspend` (`user_id`,`email`) VALUES ('$userid','$email');";
        $sql1 .= "DELETE FROM `user` WHERE `user_id`='$userid'";
        if (mysqli_multi_query($conn, $sql1)) {
            $showAlert = true;
        } else {
            $showError = "User doesn't exist";
            exit();
        }
    } else {
        echo "user doesn't exist";
        exit();
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws and Tails | Manage Users</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/2c558ff8c9.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    if ($showAlert == true) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>User Suspended!
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        </button>
    </div> ';

        header("refresh: 2; url = ./AdminManageAccount.php");
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        </button>
    </div> ';
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>