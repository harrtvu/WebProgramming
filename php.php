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

$servername="localhost";
$serveruser="user";
$serverpassword="12345";
$dbname="finalproject";
$conn= new mysqli($servername,$serveruser,$serverpassword,$dbname);
$isLogin=false;
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
		 
		header('Location: member.php');
		$loginError="";
		
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






$conn->close();
?>

