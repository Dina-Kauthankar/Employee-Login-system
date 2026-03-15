<?php
    session_start();
    include "../config/db.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from employees where email = '$email'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        if($row['password'] == $password){
            $_SESSION['id'] = $row['empid'];
            header("Location: ../pages/user-board.php");
            exit();
        }else{
            // error
            header("Location: ../pages/login.html?error=2");
            
        }

    }else{
        // error
        header("Location: ../pages/login.html?error=1");
    }
?>