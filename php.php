<?php
$servername="localhost";
$serveruser="user";
$serverpassword="12345";
$dbname="finalproject";
$requiredField = true;
$registerUserErrors="";
$registerPassErrors="";
$registerRetypePassErrors="";
$registerLog1="";
$loginError="";
$isLogin=false;
$memberUserLog="";
session_start();

$conn= new mysqli($servername,$serveruser,$serverpassword,$dbname);
if($conn->connect_error){
	die("Connect failed: " . $conn->connect_error);
}
if(empty($_POST["signUser"]))
{
	$registerUserErrors = "Username is required";
	$requiredField=false;
}
if(empty($_POST["signPass"])){
	$registerPassErrors = "Password is required";
	$requiredField=false;
}
if(empty($_POST["retypePass"])||$_POST["signPass"]!=$_POST["retypePass"])
{
	$registerRetypePassErrors = "Invalid retyped password";
	$requiredField=false;
}

if($requiredField===true){
	$stmt = $conn->prepare("INSERT INTO finalproject (username, password)
		VALUES (?, ?)");
	$stmt->bind_param("ss",$username,$password);
	$username=$_POST["signUser"];
	$password=$_POST["signPass"];
	$stmt->execute();
	$registerLog1 = "Registration successful";
	$stmt->close();
}


if(isset($_POST["loginUser"])&&isset($_POST["loginPass"])){

$sql = "SELECT username, password FROM finalproject";
$result = $conn->query($sql);

if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
		if($row["username"]==$_POST["loginUser"]&&$row["password"]==$_POST["loginPass"])
		{
			$isLogin=true;
			break;
		}

	}
	if($isLogin==true)
	{
		$_SESSION["user"]=$_POST["loginUser"];
		$_SESSION["pass"]=$_POST["loginPass"];
		header('Location: member.php');
		
	}
	else
	{
		
		$loginError="Invalid username or password";
		

	}
	
}
else
{
	$loginError="No registered accounts";
	
}
}
if(isset($_POST["memberUser"])){
	if($_POST["memberUser"]!=""){
		if($_POST["memberUser"]!=$_SESSION["user"]){

	$stmt=$conn->prepare("UPDATE finalproject SET username=? WHERE username=?");
	if(!$stmt) {
  die($mysqli->error);
}
	$stmt->bind_param("ss",$usernameSet,$usernameWhere);

	$usernameSet=$_POST["memberUser"];
	$usernameWhere=$_SESSION["user"];
	//excute the prepare statment
	if(!$stmt->execute()) {
  die($stmt->error);
}
  $_SESSION["user"]=$_POST["memberUser"];
$memberUserLog="Username successfully changed";
$stmt->close();	
}
else
{
	$memberUserLog="Username the same";
}
}
else
{
$memberUserLog="Error username empty";
}
}

if(isset($_POST["memberOldPass"])&&isset($_POST["memberNewPass"])&&isset($_POST["memberConfirmPass"])){
	if($_POST["memberOldPass"]!=""&&$_POST["memberNewPass"]!=""&&$_POST["memberConfirmPass"]!=""){
		if($_POST["memberNewPass"]==$_POST["memberConfirmPass"]){
			if($_POST["memberNewPass"]!=$_SESSION["pass"]){
	$sql ="SELECT password FROM finalproject";
	$result = $conn->query($sql);
	$isMemberPass=false;
if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
		if($row["password"]==$_POST["memberOldPass"])
		{
			$isMemberPass=true;
			break;
		}

	}
}
else
{
	$memberPassLog="Empty row";
}
if($isMemberPass==true){
		$stmt=$conn->prepare("UPDATE finalproject SET password=? WHERE password=?");
	if(!$stmt) {
  die($mysqli->error);
}
	$stmt->bind_param("ss",$passwordSet,$passwordWhere);

	$passwordSet=$_POST["memberNewPass"];
	$passwordWhere=$_SESSION["pass"];
	//excute the prepare statment
	if(!$stmt->execute()) {
  die($stmt->error);
}
  $_SESSION["pass"]=$_POST["memberNewPass"];
$memberPassLog="Password successfully changed";
$stmt->close();	
}
else{
	$memberPassLog="Error, incorrect password";
}
}
else
{
	$memberPassLog="Password the same";
}
}
else
{
	$memberPassLog="New Password does not match the confirming password";
}
}
else{
	$memberPassLog="Error, old password or new password is not filled in";
}
}
else{
	$memberPassLog="";
}



$conn->close();
?>

