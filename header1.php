<html>
<body>
<head>
<style>
.btn{
width:80%;
}
table, td {
border-top: 1px solid white;
border-bottom: 1px solid white;
width: 70%;
margin-left: auto;
margin-right: auto;
padding: 3;
border-collapse: collapse;
}
td {
width: 200;
text-align: center;
}
h3 {
color : blue;
}
font{
color : blue;
margin-left:60%;
}
img {
margin-bottom: 20;
margin-top: 20;
width: 70%;
height:10%;
}
font {
font-size:20;
font-family:arial;
color:#922B21;
}
</font>
</style>
</head>
<?php session_start();
//$uid =$_SESSION['uid'];
$uname = $_SESSION['uname'];
$ulevel =$_SESSION['ulevel'];
echo '<font>welcome <b>'. $uname. '</b></font> ';
echo '<a href="logout1.php"><button calss="btn">Logout</button> </a>';
?>
<header>
<div id="top-header">
<div id="logo" align="center">
<a href=home1.php><img src="image/header.jpg" width="60%"
height="20%"></a>
</div>
<!-- Navigation Menu -->
<nav>
<table> <tr>
<td> <a href="home1.php"><button class="btn">Home</button>
</a></td>
<td> <a href="os1.php"><button
class="btn">Insert players</button> </td>
<td> <a href="select1.php"><button
class="btn">Insert players</button> </a> </td>
</tr></table>
</nav>
</div>
</header>
</body>
</html>