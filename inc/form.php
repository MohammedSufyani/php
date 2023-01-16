<?php

    require_once "./db.php";

    $conn = conn();

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $q = "INSERT INTO `users` VALUES (null , '$first_name' , '$last_name' , '$email')";

    $r = mysqli_query($conn , $q);

    mysqli_close($conn);

    echo"<script> window.location.href='../index.php';</script>";
?>