<?php
$conn=mysqli_connect("localhost", "root", "", "rgf");
if(!$conn){
    // echo"notrun";

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="full name">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="rgbtn">
    </form>
<?php
if(isset($_POST['rgbtn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "INSERT INTO `login_user` (`name`, `email`, `password`, `date_time`) VALUES ('$name', '$email', '$password', current_timestamp());";
    // echo"run_qq";

    //$result = mysqli_query($conn,$query);
     if($conn->query($query) == true)
    {
        echo '<script>alert("Registraton Successfull")
        window.location.href = "login.php";
        </script>';
    }
    else{
        echo '<script>alert("Not Registraton ")
        window.location.href = "registration.php";
        </script>';
    }

}


?>    
</body>
</html>