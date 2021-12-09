<?php
session_start();
session_destroy();
header("location:index.php?mes=<p> <u></u><b>You are logout.Please Login Here</b></u></p>");

?>