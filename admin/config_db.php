<?php
$mysqli = new mysqli("localhost", "magento", "magento@123#", "visiting");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>