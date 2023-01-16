<?php

    function conn(){
        $conn = mysqli_connect('localhost' , 'root' , '' , 'win');

        return $conn;
    }
?>