<?php

include_once("class.account.php");


class user extends account{
	
private $UserId;
private $Address;
private $City;
private $Mobile;
private $Email;
private $DateOfBirth;
private $Gender;
private $Nationality;
private $IDorPassportNo;



  function Delete(){

	// Establish Database selection and connection
	include_once("chemicals.php");
	//Id of UserId from ManageUsers.php
        $Id=$_GET['UserId'];
	// Specify the query to Delete Record
        $sql = "delete user.*,account.* from user INNER JOIN account ON user.UserId=account.UserId where user.UserId='".$Id."' ";
	// execute query
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
        //mysqli_fetch_array and mysqli_num_row functions will not have value because it is delete operation not select operation
	//$row = mysqli_fetch_array($result);
	//$records = mysqli_num_rows($result);
	if (mysqli_affected_rows()==0)
	{
	echo '<script type="text/javascript">alert("User can not be deleted!!!");window.location=\'ViewUsers.php\';</script>';
	}
        else
       {
        if ($result)
	{
	echo '<script type="text/javascript">alert("User Record Deleted Succesfully");window.location=\'ViewUsers.php\';</script>';
	}
	else
	{
	echo "Not Deleted!";
	}
       	
	// Close The Connection
	mysqli_close ($con);
		
	} 

      }


   function Edit(){
	// Establish Database selection and connection
	include_once("chemicals.php");
	
        function checkEmail($email){
 	return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
	}

$Id=mysqli_real_escape_string($con,$_POST['txtId']);
$Fname=mysqli_real_escape_string($con,$_POST['txtFirstName']);
$Mname=mysqli_real_escape_string($con,$_POST['txtMiddleName']);
$Lname=mysqli_real_escape_string($con,$_POST['txtLastName']);
$Uname=mysqli_real_escape_string($con,$_POST['txtUserName']);
$Password=mysqli_real_escape_string($con,$_POST['txtPass']);
$Address=mysqli_real_escape_string($con,$_POST['txtAddress']);
$City=mysqli_real_escape_string($con,$_POST['txtCity']);
//$Email=mysqli_real_escape_string($con,$_POST['txtEMail']);
if(checkEmail($_POST['txtEMail']) != FALSE)
                {
         //if the checks are ok for the email we assign the email address to a variable
         $Email=mysqli_real_escape_string($con,$_POST['txtEMail']);
                }
        else
                {
        // if all is not well we echo an error message
        echo '<script type="text/javascript">alert("Please enter valid email address!");window.location=\'ManageProfile.php\';</script>';
	exit();
                }

$Mobile=mysqli_real_escape_string($con,$_POST['txtMobile']);
if (!is_numeric($Mobile))
	{
	echo '<script type="text/javascript">alert("Mobile telephone should be numeric data type!");window.location=\'ManageProfile.php\';</script>';
	exit();
	}

$BirthDate=mysqli_real_escape_string($con,$_POST['txtBirthDate']);
$Gender=mysqli_real_escape_string($con,$_POST['txtGender']);
$Nationality=mysqli_real_escape_string($con,$_POST['txtNationality']);
$IDorPassport=mysqli_real_escape_string($con,$_POST['txtPassport']);

// Specify the query to Update Record
$sql = "Update account,user set account.FirstName='".$Fname."',account.MiddleName='".$Mname."',account.LastName='".$Lname."',account.UserName='".$Uname."',account.Password='".$Password."',user.Address='".$Address."',user.City='".$City."',user.Email='".$Email."',user.Mobile='".$Mobile."',user.BirthDate='".$BirthDate."',user.Gender='".$Gender."',user.Nationality='".$Nationality."',user.IDorPassportNo='".$IDorPassport."' where user.UserId='".$Id."' and  account.UserId='".$Id."' ";

// Execute query
mysqli_query($con,$sql) or die(mysqli_error($con));
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Profile Record Updated Succesfully");window.location=\'index.php\';</script>';
	}


    function Register(){
	// Establish Database selection and connection
        include_once("chemicals.php");
	
	function checkEmail($email){
 	return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
	}

	$FirstName=mysqli_real_escape_string($con,$_POST['txtFirstName']);
        $MiddleName=mysqli_real_escape_string($con,$_POST['txtMiddleName']);
        $LastName=mysqli_real_escape_string($con,$_POST['txtLastName']);
        $UserName=mysqli_real_escape_string($con,$_POST['txtUserName']);
	$Password=mysqli_real_escape_string($con,$_POST['txtPass']);
        $Repassword=mysqli_real_escape_string($con,$_POST['txtRePass']);
        if ($Password!=$Repassword)
         {
           echo '<script type="text/javascript">alert("Please check your password.");window.location=\'signup.php\';</script>';
         }
        $Address=mysqli_real_escape_string($con,$_POST['txtAddress']);
        $City=mysqli_real_escape_string($con,$_POST['txtCity']);
        //$EMail=mysqli_real_escape_string($con,$_POST['txtEMail']);
	if(checkEmail($_POST['txtEMail']) != FALSE)
                {
         //if the checks are ok for the email we assign the email address to a variable
                $EMail=mysqli_real_escape_string($con,$_POST['txtEMail']);
                }
        else
                {
        // if all is not well we echo an error message
        echo '<script type="text/javascript">alert("Please enter valid email address!");window.location=\'signup.php\';</script>';
	exit();
                }

        $Mobile=mysqli_real_escape_string($con,$_POST['txtMobile']);
	if (!is_numeric($Mobile))
	{
	echo '<script type="text/javascript">alert("Mobile telephone should be numeric data type!");window.location=\'signup.php\';</script>';
	exit();
	}

        $BirthDay=mysqli_real_escape_string($con,$_POST['cmbDate']);
	$BirthMonth=mysqli_real_escape_string($con,$_POST['cmbMonth']);
        $BirthYear=mysqli_real_escape_string($con,$_POST['cmbYear']);
        $date_value="$BirthYear-$BirthMonth-$BirthDay";
        $Gender=mysqli_real_escape_string($con,$_POST['cmbGender']);
        $Nationality=mysqli_real_escape_string($con,$_POST['txtNationality']);
        $IDorPassport=mysqli_real_escape_string($con,$_POST['txtPassport']);
	// Specify the query to Insert Record into passenger table
	$sql = "insert into user (Address,City,Email,Mobile,BirthDate,Gender,Nationality,IDorPassportNo) values('".$Address."','".$City."','".$EMail."','".$Mobile."','".$date_value."','".$Gender."','".$Nationality."','".$IDorPassport."')";
	// execute query
	mysqli_query($con,$sql) or die(mysqli_error($con));
	//last_insert_id() in mysql or mysqli_insert_id() in php gets the value of the autoincrement field from the last insert query.
        $UserId=mysqli_insert_id($con);
        // Specify the query to Insert Record in account table
        $sql1 = "insert into account (UserId,UserName,Password,FirstName,MiddleName,LastName,Type) values ('".$UserId."','".$UserName."','".$Password."','".$FirstName."','".$MiddleName."','".$LastName."','User')";
        // execute query
	mysqli_query($con,$sql1) or die(mysqli_error($con));
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Account Created Succesfully!");window.location=\'AboutUs.php\';</script>';

	}

}

?>