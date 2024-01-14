<html>
<head><title>insert player</title>
<style>
body {
background-color: D4EFDF;
text-align:center;
}
h1 {
font-family:Brush Script MT, Brush Script Std, cursive;
color: #2E4053;
}
input[type=text] {
width: 60%;
padding: 14px 30px;
margin: 20px 0px 20px 0px;
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
input[type=radio]{
padding: 14px 30px;
margin: 10px 0px 20px 20px;
border: none;
border-radius: 8px;
cursor: pointer;
}
form{
color:#B2BABB;
padding: 20px 50px;
}
fieldset{
width: 60%;
margin:auto;
border-width:4px;
border-color:white;
color:white;
}
label {
color: #2E4053;
font-size:17;
font-weight: bold;
}
select {
background-color:#368686;
font-size:17px;
color: white;
border-radius: 8px;
border: 1px solid white;
width:20%;
text-align:center;
padding: 14px 0px;
margin: 8px 50px 8px 10px;
display: inline-block;
box-sizing: border-box;
position: sticky;
}
.alert{
color:red;
}
</style>
</head>
<body>
<?php include 'header1.php';?>
<div>
<fieldset >
<legend> <h1>Add player</h1></legend>
<?php
$ms1 = $ms2 = $ms3 =$ms4 = $ms5= $ms7="";
if(isset($_POST["submit"])){
if (empty($_POST['players'])) {
$ms1 = 'players is required';
}
if (empty($_POST['club'])) {
$ms2 = 'club is required';
}
if (empty($_FILES["photo"]["name"])) {
$ms3 = 'image is required';
}
$file_loc = 'image/';
$filename = basename($_FILES["photo"]["name"]);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$path = $file_loc . time().'.'. $ext;
$img_size = basename($_FILES["photo"]["size"]);
$img_type = strtolower(basename($_FILES["photo"]["type"]));
if ($img_size > 2000000 ) {
$ms4 ='image size no more 2GB';
}
if ($img_type !='png' && $img_type !='jpg' && $img_type !='' &&
$img_type!= 'jpeg') {
$ms5 ='png and jpg only';
}
if ($_POST['league']=='l2'){
$ms7 = 'league is required';
}
if ($ms1 =="" && $ms2 =="" && $ms3=="" && $ms4=="" && $ms5=="" && $ms7=="") {
include 'con1.php';
$player =$_POST['players'];
$clu =$_POST['club'];
$leag =$_POST['league'];
move_uploaded_file ($_FILES["photo"]["tmp_name"],$path);
$sql="insert into players2 (club,league,image,pno) values('$clu','$leag','$path','$player')";
if (mysqli_query($conn,$sql)) {
echo "players info has been inserted";
}
else
{
echo "error";
}
mysqli_close($conn);
}
}
?>
<form action="select1.php" method="post" enctype="multipart/form-data">
<label>player:</label> <select name="players">
<option value="p1">select</option>
<?php
include 'con1.php';
$sql = "select * from players1";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($query);
while ($row) {
echo '<option value="'.$row[0].'">'.$row[1].'</option>';
$row = mysqli_fetch_row($query);
}
mysqli_close($conn);
?>
</select>  <br><br>
<label>player:</label> <input type="text" name="players"><label
class="alert"><?php echo $ms1;?></label><br><br>
<label>club: </label>
<input type="radio" name="club" value="fcb" > <label>barcelona</label>
<input type="radio" name="club" value="liv"> <label>liverpool</label>
<input type="radio" name="club" value="hil"> <label>hilal</label>
<input type="radio" name="club" value="aln" > <label>alnasser</label>
<label class="alert"> <?php echo $ms2?></label><br><br>
<label>league: </label> <select name="league">
<option value='l2'> select </option>
<option value=spl> spl </option>
<option value=pl> pl </option>
<option value=liga> liga </option>
</select> <label class="alert"><?php echo $ms7;?></label><br><br>
<label>Image: </label>
<input type ="file" name="photo"><label class="alert"><?php echo $ms3. '
'.$ms4.' '.$ms5;?></label><br><br>
<input type="submit" name="submit" value="insert">
</form>
</fieldset>
</div>
</body>
</html>