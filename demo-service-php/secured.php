<?php
include 'headers.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
     echo $_SERVER['HTTP_X_AUTH_PREFERRED_USERNAME'];
     echo "Hello it is  not secured";
}
?>
