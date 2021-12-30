<?php
SESSION_start();
$conn=mysqli_connect("localhost", "root", "", "rgf");
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
    <form action="" method="POST">
        <input type="text" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        <input type="submit" name="u_login">
    </form>


    <?php
  if(isset($_POST['u_login']))
  {
      $email=$_POST['email'];
      $password=$_POST['password'];

      $query = "SELECT * FROM `login_user` where email = '$email' && password = '$password'";
      $result = mysqli_query($conn,$query);
      $get_row = mysqli_num_rows($result);

      if($get_row == 1){

        $_SESSION['email']=$email;

        echo '<script>alert("Login Successfull")
        window.location.href = "home.php";
        </script>';
      }
      else{
        echo '<script>alert("User not found")
        window.location.href = "login.php";
        </script>';
      }
  }

?>
    
</body>
</html>