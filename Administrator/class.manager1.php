<?php

include_once("class.account.php");

class manager1 extends account{
	
private $AdministratorId;
private $Mobile;
private $Email;


     function Edit(){
	// Establish Database selection and connection
	include_once("chemicals.php");

        function checkEmail($email){
 	return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
	}

	$Id = mysqli_real_escape_string($con,$_POST['txtSupervisorId']);
	if (!is_numeric($Id))
	{
	echo '<script type="text/javascript">alert("Supervisor Id should be numeric data type!");window.location=\'ManageManagerProfile.php\';</script>';
	exit();
	}
	$FirstName=mysqli_real_escape_string($con,$_POST['txtSupervisorFirstName']);
	$MiddleName=mysqli_real_escape_string($con,$_POST['txtSupervisorMiddleName']);
	$LastName=mysqli_real_escape_string($con,$_POST['txtSupervisorLastName']);
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
        echo '<script type="text/javascript">alert("Please enter valid email address!");window.location=\'ManageManagerProfile.php\';</script>';
	exit();
                }
	$MobileTel=mysqli_real_escape_string($con,$_POST['txtMobile']);
	if (!is_numeric($MobileTel))
	{
	echo '<script type="text/javascript">alert("Mobile telephone should be numeric data type!");window.location=\'ManageManagerProfile.php\';</script>';
	exit();
	}
	// Specify the query to Update Record
	$sql = "Update administrator s JOIN account a ON (s.AdminId = a.AdminId) set s.e_mail='".$EMail."',s.Admin_Tel='".$MobileTel."',a.UserName='".$UserName."',a.Password='".$Password."',a.FirstName='".$FirstName."',a.MiddleName='".$MiddleName."',a.LastName='".$LastName."' where s.AdminId = a.AdminId and s.AdministratorId='".$Id."'";
	// Execute query
	mysqli_query($con,$sql) or die(mysqli_error($con));
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("Manager Record Updated Succesfully");window.location=\'ManageManagerProfile.php\';</script>';


	}
    }
?>