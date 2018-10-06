<?php
//to avoid resending of header 
ob_start();
session_start();
// Establish Database selection and connection
include_once("chemicals.php");

$UserName=mysqli_real_escape_string($con,$_POST['txtUserName']);
$Question=$_POST['cmbQue'];
$Answer=mysqli_real_escape_string($con,$_POST['txtAnswer']);
$UserType=$_POST['rdUser'];
$Password=mysqli_real_escape_string($con,$_POST['txtPass']);
$Repassword=mysqli_real_escape_string($con,$_POST['txtRePass']);
        if ($Password!=$Repassword)
         {
           echo '<script type="text/javascript">alert("Please check your password entry!");window.location=\'Forget.php\';</script>';
         }

//if($UserType!="Administrator" or $UserType!="Manager" or $UserType!="User")
//{
//echo '<script type="text/javascript">alert("Please provide user type information!");window.location=\'Forget.php\';</script>';
//}

if($UserType=="Administrator")
{
$sql = "select administrator.*,account.* from administrator INNER JOIN account ON administrator.AdminId=account.AdminId  where account.UserName='".$UserName."' and administrator.Question='".$Question."' and administrator.AdministratorId='".$Answer."' and account.Type='Administrator' ";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$AdministratorId=$row['AdministratorId'];
$AdminId=$row['AdminId'];
$sql1 = "Update account set account.Password='".$Password."' where account.AdminId='".$AdminId."' and  account.Type='Administrator' ";
// Execute query
mysqli_query($con,$sql1) or die(mysqli_error($con));
} 
mysqli_close($con);
echo '<script type="text/javascript">alert("You can login with your new password Succesfully");window.location=\'AboutUs.php\';</script>';
}

else if($UserType=="Manager")
{
$sql = "select administrator.*,account.* from administrator INNER JOIN account ON administrator.AdminId=account.AdminId  where account.UserName='".$UserName."' and administrator.Question='Administrator ID' and administrator.AdministratorId='".$Answer."' and account.Type='Manager' ";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$AdministratorId=$row['AdministratorId'];
$AdminId=$row['AdminId'];
$sql1 = "Update account set account.Password='".$Password."' where account.AdminId='".$AdminId."' and  account.Type='Manager' ";
// Execute query
mysqli_query($con,$sql1) or die(mysqli_error($con));
} 
mysqli_close($con);
echo '<script type="text/javascript">alert("You can login with your new password Succesfully");window.location=\'AboutUs.php\';</script>';
}

else 
{
$sql = "select user.*,account.* from user INNER JOIN account ON user.UserId=account.UserId where account.UserName='".$UserName."' and user.Question='".$Question."' and user.IDorPassportNo='".$Answer."' and account.Type='User' ";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$UserId=$row['UserId'];
$sql1 = "Update account set account.Password='".$Password."' where account.UserId='".$UserId."' and  account.Type='User' ";
// Execute query
mysqli_query($con,$sql1) or die(mysqli_error($con));
} 
mysqli_close($con);
echo '<script type="text/javascript">alert("You can login with your new password Succesfully");window.location=\'AboutUs.php\';</script>';
}
ob_flush();
?>