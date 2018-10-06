<?php
session_start();
$UserName=$_POST['txtUserName'];
$Question=$_POST['cmbQue'];
$Answer=$_POST['txtAnswer'];
$UserType=$_POST['rdUser'];

if($UserType=="User")
{
// Establish Database selection and connection
include_once("chemicals.php");
$sql = "select user.*,account.* from user INNER JOIN account ON user.UserId=account.UserId where account.UserName='".$UserName."' and account.Type='".$UserType."' and user.Question='".$Question."' and user.IDorPassportNo='".$Answer."'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
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