<?php

    include './inc/db.php';

    $conn = conn();
    $sql = "SELECT * FROM `users`";

    $result = mysqli_query($conn , $sql);
    $users = mysqli_fetch_all($result , MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class=" container">

    <div class=" position-relative overflow-hidden p-3 text-center bg-light">
        <div class=" col-md-5 p-lg-5 mx-auto my-5">
            <h1 class=" display-4 fw-normal">اربح مع نور</h1>
            <p class=" lead fw-normal">باقي على فتح التسجيل</p>
            <p class=" lead fw-normal">للسحب على ربج نسخة محانية من البرنامج</p>
            <a href="" class="btn btn-outline-secondary">Coming soon</a>
        </div>
    </div>


    <ul class=" list-group list-group-flush">
        <li class=" list-group-item"></li>
    </ul>

        <form action="./inc/form.php" method="post" class=" col-6">
            <input type="text" name="first_name" id="" class="my-3 form-control">
            <input type="text" name="last_name" id="" class="my-3 form-control">
            <input type="email" name="email" id="" class="my-3 form-control">
            <button class=" btn btn-primary">Send</button>
        </form>

        <div class=" col-sm-6">
        <?php foreach($users as $user){
            echo '
            <div class=" col-sm-6">
            <div class=" card my-2 bg-light">
                <h5 class="card-title">'. htmlspecialchars($user['firstName']).' '. htmlspecialchars($user['lastName']) .'</h5>
                <p>'.htmlentities($user['email']).'</p>';
             }?>
             </div>
    </div>
</body>
</html>