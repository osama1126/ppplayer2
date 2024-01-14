<html>
<head><title>Home</title></head>
<style>
body {
background-color: D4EFDF;
align: center;
}
table, td {
border: 1px solid ;
virtual-align:20%;
margin: 20 0 20 0;
border-collapse: collapse;
border-radius: 8px;
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
.war {
color:red;
}
</style>
<body>
<?php
include 'header1.php';
if (isset($uname )) {
include 'con1.php';
$sql = "select * from players2";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($query );
if ($row) {
echo '<table>';
echo
'<tr><th>players</th><th>league</th><th>club</th><th>Image</th><th>Detalis</th>'
;
if ($ulevel == 1) {
echo'<th>Delete</th>';
}
echo'</tr>';
while ($row ) {
$sql1 = "select players from players1 where pno=".$row[0];
$query1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($query1);
echo '<tr
align="center"><td>'.$row1["players"].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td>
<td>
<img src="'.$row[3].'"width="50" height="60"></td>';
echo '<td><a href="details1.php?$id='.$row[0].'"><button> Detalis</button>
</a></td>';
if ($ulevel == 1) {
echo '<td><a onClick="javascript:return confirm(\'Are you sure to delete this
player\');" href="delete1.php?$id='.$row[4].'"> <button> Delete
</button></a></td></tr>';
}
$row = mysqli_fetch_row($query );
}
echo '</table>';
mysqli_close($conn);
}
}
else {
header('location:login1.php');
}
?>
</body>
</html>