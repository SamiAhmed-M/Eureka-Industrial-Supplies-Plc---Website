<?php
//to avoid resending of header 
ob_start();
session_start();
// Establish Database selection and connection
include_once("chemicals.php");

$UserName=mysqli_real_escape_string($con,$_POST['txtUser']);
$Password=mysqli_real_escape_string($con,$_POST['txtPass']);
$UserType=mysqli_real_escape_string($con,$_POST['cmbUser']);
if($UserType=="Manager")
{
$sql = "select administrator.AdministratorId,account.* from administrator INNER JOIN account ON administrator.AdminId=account.AdminId where account.UserName='".$UserName."' and account.Password='".$Password."' and account.Type='Manager'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['AdministratorId'];
$Fname=$row['FirstName'];
$Mname=$row['MiddleName'];
$FullName=$Fname . " " . $Mname;  
//$_SESSION['Name']=$row['FirstName'];
$_SESSION['Name']=$FullName;
header("location:Administrator/index1.php");
} 
mysqli_close($con);
}
if($UserType=="Administrator")
{
$sql = "select * from account where UserName='".$UserName."' and Password='".$Password."' and Type='Administrator'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['AdministratorId'];
$Fname=$row['FirstName'];
$Mname=$row['MiddleName'];
$FullName=$Fname . " " . $Mname;  
//$_SESSION['Name']=$row['FirstName'];
$_SESSION['Name']=$FullName;
header("location:Administrator/index.php");
} 
mysqli_close($con);
}

else if($UserType=="User")
{
$sql = "select * from account where UserName='".$UserName."' and Password='".$Password."' and Type='User'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['UserId'];
$Fname=$row['FirstName'];
$Mname=$row['MiddleName'];
$FullName=$Fname . " " . $Mname;  
//$_SESSION['Name']=$row['FirstName'];
$_SESSION['Name']=$FullName;
header("location:User/index.php");
} 
mysqli_close($con);
}

?>