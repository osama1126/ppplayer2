<?php
session_start();
?>
<html>
<head><title>Log in Page</title>
<style>
body {
background-color: D4EFDF;
text-align:center;
}
h1 {
font-family:Brush Script MT, Brush Script Std, cursive;
color: #2E4053;
}
input[type=text],input[type="password"] {
width: 55%;
padding: 14px 30px;
margin: 8px 20px 8px 0px;
display: inline-block;
border: 1px solid #ccc;
border-radius: 8px;
box-sizing: border-box;
}
input[type=submit] {
width: 70%;
background-color: #454545;
color: white;
padding: 14px 30px;
margin: 20px 0px 20px 55px;
border: none;
border-radius: 8px;
cursor: pointer;
font-weight:bold;
font-size:16px;
}
input[type=submit]:hover {
background-color: #999999;
}
form{
color:#B2BABB;
padding: 20px 50px;
}
fieldset{
width: 70%;
margin:auto;
border-width:4px;
border-color:white;
color:white;
}
label {color: #2E4053;
font-size:15;
font-weight: bold;
}
.alert{
color:red;
}
font{
color:blue;
}
</style>
</head>
<body >
<div align="center">
<?php
$ms1 = $ms2 = $ms3 = "";
if (isset($_POST['submit'])) {
$uname =$_POST['username'];
$pass = $_POST['password'];
if (empty($uname)) {
$ms1 = 'Please enter username';
}
if (empty($pass)) {
$ms2 = 'Please enter password';
}
if ($ms1 =="" && $ms2==""){
include 'con1.php';
$sql ="select * from users where (uname='$uname' or email='$uname') and pass='$pass'";
$query = mysqli_query($conn,$sql);
$rslt = mysqli_fetch_assoc($query);
$row_num = mysqli_num_rows($query);
if ($row_num == 1 ) {
//$_SESSION['uid']= $rslt['id'];
$_SESSION['uname'] = $rslt['name'];
$_SESSION['ulevel'] = $rslt['level'];
header ("location:home1.php");
}
else {
$ms3 = 'username or password not correct';
}
}
}
?>

<fieldset >
<legend><h1>Log in</h1></legend>
<form action="login1.php" method="post" >
<label>username:</label> <input type="text" name="username"> <?php echo $ms1; ?> <br><br>
<label>Password:</label> <input type="password" name="password"> <?php echo $ms2; ?> <br><br>
<input type="submit" name ="submit" value="log in"><br><br>
<?php echo '<label class="alert">'. $ms3 .'</label>'; ?><br><br>
<label class="alert">Have not an account yet?</label> <a href="signup1.php">
Sign Up</a>
</form>
</fieldset>
</div>
</body>
</html>
