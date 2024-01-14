<html>
<head><title>Sign Up Page</title>
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
<body>
<div align="center">
<?php
$ms1 = $ms2 = $ms3 = $ms4 = $ms5 = "";
if (isset($_POST['submit'])) {
if (empty($_POST['name'])) {
$ms1 = 'name is requird';
}
if (empty($_POST['username'])) {
$ms2 = 'username is requird';
}
if (empty($_POST['password1'])) {
$ms3 = 'password is requird';
}
if (empty($_POST['password2'])) {
$ms4 = 'password conformation is requird';
}
$name = $_POST['name'];
$uname = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['password1'];
$pass2 = $_POST['password2'];
if ($pass1 !==$pass2) {
$ms5 = "mismatched passwords ";
}
if ($ms1 =="" && $ms2 =="" && $ms3 =="" && $ms4=="" && $ms5=="") {
include 'con1.php';
$sql ="insert into users (name,uname,pass,email)
values('$name','$uname','$pass1','$email')";
$query = mysqli_query($conn,$sql);
if ($query ) {
echo 'than you for registration !';
}
}
}
?>
<fieldset >
<legend><h1>Sign Up</h1></legend>
<form action="signup1.php" method="post" >
<label>Name :</label> <input type="text" name="name"> <label
class="alert"><?php echo $ms1; ?></label> <br><br>
<label>Email :</label> <input type="text" name="email"> <br><br>
<label>User name : </label> <input type="text" name="username"><label
class="alert"><?php echo $ms2; ?></label> <br><br>
<label>Password: </label><input type="password" name="password1"> <label
class="alert"><?php echo $ms3; ?> </label><br><br>
<label>Re-Password: </label> <input type="password" name="password2"> <label
class="alert"><?php echo $ms4; ?></label> <br><br>
<input type="submit" name ="submit" value="Register"><br><br>
<?php echo $ms5;?><br><br>
<font>already a member? </font><a href="login1.php">log in</a>
</form>
</fieldset>
</div>
</body>
</html>

