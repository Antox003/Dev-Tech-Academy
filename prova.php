<?php


$password = "admin";

$hash_password= password_hash($password, PASSWORD_DEFAULT);

echo"<p>$hash_password</p>";



?>