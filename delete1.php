<?php
include 'con1.php';
$id = $_GET['$id'];
$sql="delete from players2 where no =$id";
if (mysqli_query($conn,$sql)){
echo'<script>
alert("player successfully deleted");
window.location.href ="home1.php";
</script>';
mysqli_close($conn);
}
?>
