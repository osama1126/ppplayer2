<html>
<head><title>players Details</title>
<style>
body {
background-color: D4EFDF;
align: center;
}
table, td {
border: 1px solid ;
virtual-align:20%;
margin: 10 0 40 0;
border-collapse: collapse;
font-size:18px;
}
td {
background-color: #96D4D4;
width: 200;
text-align: center;
}
h3 {
color : blue;
}
th{
color:#2E4053;
font-size: 18;
height:40px;
background-color: #F7F9F9;
border: 1px solid grey;
}
.bn{
width: 15%;
background-color: #454545;
color: white;
padding: 14px 30px;
margin: 20px 0px 20px 30px;
border-radius: 8px;
}
.ig{
width: 100px;
height: auto;
}
</style>
</head>
<body>
<?php
include 'con1.php';
$id =$_GET['$id'];
$sql = "select * from players2 where no=$id";
$query = mysqli_query($conn,$sql);
echo '<div align ="center">';
echo '<table border ="1" width ="30%" bgcolor="beige">';
$rslt = mysqli_fetch_assoc($query);
echo'<th align="center" bgcolor="brown" style="color:white" > All Details </td></th>';
echo'<tr align="center"><td>'.$rslt['no'].'</td></tr>';
echo'<tr align="center"><td>'.$rslt['league'].'</td></tr>';
echo'<tr align="center"><td>'.$rslt['club'].'</td></tr>';
echo'<tr align="center"><td><img src="'.$rslt['image'].'" width="50"
height="50"></tr></td>';
echo'<tr align="center"><td>'.$rslt['pno'].'</td></tr>';
echo'<tr align="center"><td><a href="home1.php"><button> Back </button></a></td></tr>
</table>';
echo '</div>';
?>

</body>
</html>