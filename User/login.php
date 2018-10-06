<?php
session_start();
// Establish Database selection and connection
include_once("chemicals.php");

$UserName=mysqli_real_escape_string($con,$_POST['txtUser']);
$Password=mysqli_real_escape_string($con,$_POST['txtPass']);
$UserType=mysqli_real_escape_string($con,$_POST['cmbUser']);
if($UserType=="User")
{
$sql = "select * from account where UserName='".$UserName."' and Password='".$Password."' and Type='User'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'AboutUs.php\';</script>';
}
else
{
$_SESSION['ID']=$row['UserId'];
$Fname=$row['FirstName'];
$Mname=$row['MiddleName'];
$FullName=$Fname . " " . $Mname;  
//$_SESSION['Name']=$row['FirstName'];
$_SESSION['Name']=$FullName;
header("location:index.php");
} 
mysqli_close($con);
}

?>