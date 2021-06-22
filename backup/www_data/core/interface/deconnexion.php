<?php
@session_start();
require "dbconnection.php";

//session_unregister();
session_destroy();

header("Location:../../index.php");

?>