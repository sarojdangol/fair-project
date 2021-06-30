<?php
session_start();
session_destroy();
// echo "<script type='text/javascript'>alert('succesfully logged out');
// </script>";
header('location:index.php');
 ?>




