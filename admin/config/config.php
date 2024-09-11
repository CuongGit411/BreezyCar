<?php
$mysqli = new mysqli("localhost","root","","carbreezy");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Ket noi Mysqli that bai: " . $mysqli -> connect_error;
  exit();
}
?>