<?php
    $conn = mysqli_connect("localhost", "root", "", "EMS");

    if(!$conn){
        die(
            "Connection Failed"
        );
    }
?>