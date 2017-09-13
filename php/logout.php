<?php
session_start();
session_destroy();
$redirectURL = '../index.html';
echo "<script> alert('You are logging out!') </script>";
header("Refresh:0.1;url={$redirectURL}");

?>