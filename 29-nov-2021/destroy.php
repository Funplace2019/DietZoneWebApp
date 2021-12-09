<?php
session_start();
session_destroy();
header("location:login.php?mes=<p> <u></u><b>You are logout.Please Login Here</b></u></p>");

?>