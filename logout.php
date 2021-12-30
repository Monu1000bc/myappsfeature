<?php
session_start();
session_unset();
session_destroy();
echo '<script>alert("logout Successfull")
window.location.href = "login.php";
</script>';


?>