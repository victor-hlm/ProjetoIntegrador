<?php
session_start();
session_destroy();

$msg = "Logout esfetuado";
header("location:index.php?msg=".$msg);

?>