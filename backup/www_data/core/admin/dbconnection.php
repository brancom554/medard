<?php
$con = @mysql_connect("localhost","mygenogr_root","cotonou2015");
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }

@mysql_select_db("mygenogr_db");
?>
