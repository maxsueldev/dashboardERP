<?php

@session_start();

if(isset($_SESSION['usu_login'])){
    session_destroy();
    header("Location:../login.php");
} else {
	print 1;
}

?>