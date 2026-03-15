<?php
    session_start();
    include "../config/db.php";

    if(!isset($_SESSION['id'])){
        header("Location: ../index.php");
        exit();
    }
    

    $empid = $_SESSION['id'];
    

    $sql = "select * from employees
            where empid = '$empid'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>

                <li><a href="../php/logout.php">Logout</a></li>

            </ul>
        </nav>
        
    </header>
    <h1>Welcome <?php echo $row['name']; ?></h1>

    <main>
        <section>
        <h2>Here are your following details: </h2>
        <table>
            <tr>
                <th>NAME</th>
                <td><?php echo  $row['name'];?></td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td><?php echo  $row['email'];?></td>
            </tr>
            <tr>
                <th>GENDER</th>
                <td><?php echo  $row['gender'];?></td>
            </tr>
            <tr>
                <th>AGE</th>
                <td><?php echo  $row['age'];?></td>
            </tr>
            <tr>
                <th>ROLE</th>
                <td><?php echo  $row['role'];?></td>
            </tr>
            <tr>
                <th>SALARY</th>
                <td><?php  echo $row['salary'];?></td>
            </tr>
        </table>
        </section>
    </main>
</body>
</html>