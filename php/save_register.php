<?php
    session_start();
    include "../config/db.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $salary = $_POST['salary'];
    $password = $_POST['password'];

    $check = "select * from employees
            where password = '$password'";
        
    $checking = mysqli_query($conn, $check);

    if(mysqli_num_rows($checking) > 0){
        // use different password
        header("Location: ../pages/register.html?pass=1");
    }else{
        $sql = "insert into employees (name, email, gender, age, role, salary, password)
            values ('$name','$email','$gender','$age','$role','$salary','$password')";
    
        mysqli_query($conn, $sql);

        header("Location: ../pages/login.html");
    }

?>