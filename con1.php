<?php
$conn= mysqli_connect("localhost","root","","players");
if ($conn===false) {
    die ("erorr".mysqli_connect_erorr());
}
?>