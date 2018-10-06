<?php

include_once("class.account.php");

class manager extends account{
	
private $AdministratorId;
private $Mobile;
private $Email;




  function Delete(){
	// Establish Database selection and connection
	include_once("chemicals.php");		
	//Id refers to AdminId not AdministratorId(The company ID of the manager)
        $Id=$_GET['UserId'];
	// Specify the query to Delete Record
	$sql = "delete administrator.*,account.* from administrator INNER JOIN account ON administrator.AdminId=account.AdminId where administrator.AdminId='".$Id."' and administrator.AdministratorId!=1";
	// execute query
	$objQuery = mysqli_query($con,$sql) or die(mysqli_error($con));
        if ($objQuery)
	{
	echo '<script type="text/javascript">alert("Manager Record Deleted Succesfully");window.location=\'ManageManagers.php\';</script>';
	}
	else
	{
	echo "Not Deleted!";
	}
	// Close The Connection
	mysqli_close ($con);
	
	
	} 


   function Edit(){
	// Establish Database selection and connection
	include_once("chemicals.php");
       function checkEmail($email){
 	return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
	}

$Id = mysqli_real_escape_string($con,$_POST['txtManagerId']);
$FirstName=mysqli_real_escape_string($con,$_POST['txtManagerFirstName']);
$MiddleName=mysqli_real_escape_string($con,$_POST['txtManagerMiddleName']);
$LastName=mysqli_real_escape_string($con,$_POST['txtManagerLastName']);
$UserName=mysqli_real_escape_string($con,$_POST['txtUserName']);
$Password=mysqli_real_escape_string($con,$_POST['txtPass']);
//$EMail=mysqli_real_escape_string($con,$_POST['txtEMail']);
if(checkEmail($_POST['txtEMail']) != FALSE)
                {
         //if the checks are ok for the email we assign the email address to a variable
        $EMail=mysqli_real_escape_string($con,$_POST['txtEMail']);
                }
        else
                {
        // if all is not well we echo an error message
        echo '<script type="text/javascript">alert("Please enter valid email address!");window.location=\'ManageManagers.php\';</script>';
	exit();
                }
$MobileTel=mysqli_real_escape_string($con,$_POST['txtMobile']);
if (!is_numeric($MobileTel))
	{
	echo '<script type="text/javascript">alert("Mobile telephone should be numeric data type!");window.location=\'ManageManagers.php\';</script>';
	exit();
	}
// Specify the query to Update Record
$sql = "Update administrator s JOIN account a ON (s.AdminId = a.AdminId) set s.e_mail='".$EMail."',s.Admin_Tel='".$MobileTel."',a.UserName='".$UserName."',a.Password='".$Password."',a.FirstName='".$FirstName."',a.MiddleName='".$MiddleName."',a.LastName='".$LastName."' where s.AdminId = a.AdminId and s.AdministratorId='".$Id."'";
// Execute query
mysqli_query($con,$sql) or die(mysqli_error($con));
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Manager Record Updated Succesfully");window.location=\'ManageManagers.php\';</script>';

	}



    function Add(){
	// Establish Database selection and connection
	include_once("chemicals.php");
	
	function checkEmail($email){
 	return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
	}

        $Id=mysqli_real_escape_string($con,$_POST['txtManagerId']);
	
	$FirstName=mysqli_real_escape_string($con,$_POST['txtManagerFirstName']);
	$MiddleName=mysqli_real_escape_string($con,$_POST['txtManagerMiddleName']);
        $LastName=mysqli_real_escape_string($con,$_POST['txtManagerLastName']);
        $UserName=mysqli_real_escape_string($con,$_POST['txtUserName']);
	$Password=mysqli_real_escape_string($con,$_POST['txtPassword']);
        //$EMail=mysqli_real_escape_string($con,$_POST['txtEmail']);
	if(checkEmail($_POST['txtEmail']) != FALSE)
                {
        // if the checks are ok for the email we assign the email address to a variable
        $EMail=mysqli_real_escape_string($con,$_POST['txtEmail']);
                }
        else
                {
        // if all is not well we echo an error message
        echo '<script type="text/javascript">alert("Please enter valid email address!");window.location=\'ManageManagers.php\';</script>';
	exit();
                }
        $MobileTel=mysqli_real_escape_string($con,$_POST['txtMobile']);
	if (!is_numeric($MobileTel))
	{
	echo '<script type="text/javascript">alert("Mobile telephone should be numeric data type!");window.location=\'ManageManagers.php\';</script>';
	exit();
	}
	$ManagerType=mysqli_real_escape_string($con,$_POST['cmbManager']);
	
	//Check if the manager Id is already available
        $sql1 = "select * from administrator where AdministratorId = '".$Id."'";
	// execute query
	$result1 = mysqli_query($con,$sql1) or die(mysqli_error($con));
	$records = mysqli_num_rows($result1);
	if ($records!=0)
	{
	echo '<script type="text/javascript">alert("Duplicate manager Id");window.location=\'ManageManagers.php\';</script>';
	exit();
	}
	// Specify the query to Insert Record in administrator table
	$sql = "insert into administrator (AdministratorId,e_mail,Admin_Tel) values ('".$Id."','".$EMail."','".$MobileTel."')";
	// execute query
	mysqli_query($con,$sql) or die(mysqli_error($con));
        //last_insert_id() in mysql or mysqli_insert_id() in php gets the value of the autoincrement field from the last insert query.
        $AdminId=mysqli_insert_id($con);
        // Specify the query to Insert Record in account table
        $sql2 = "insert into account (AdminId,UserName,Password,FirstName,MiddleName,LastName,Type) values ('".$AdminId."','".$UserName."','".$Password."','".$FirstName."','".$MiddleName."','".$LastName."','".$ManagerType."')";
	// execute query
	mysqli_query($con,$sql2) or die(mysqli_error($con));
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Manager Record Inserted Succesfully");window.location=\'ManageManagers.php\';</script>';

	}
}
?>