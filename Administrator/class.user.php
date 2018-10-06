<?php

include_once("class.account.php");

class user extends account{
	
private $PassengerId;
private $Address;
private $City;
private $Mobile;
private $Email;
private $DateOfBirth;
private $Gender;
private $Nationality;
private $PassportNo;


// Administrators can not edit or register user by themselves but they can delete unwanted customers

  function Delete(){
	// Establish Database selection and connection
	include_once("chemicals.php");

	//Id of UserId from ManageUsers.php
        $Id=$_GET['UserId'];
	// Specify the query to Delete Record
        $sql = "delete user.*,account.* from user INNER JOIN account ON user.UserId=account.UserId where user.UserId='".$Id."'";
        // execute query
	$objQuery = mysqli_query($con,$sql) or die(mysqli_error($con));
        if ($objQuery)
	{
	echo '<script type="text/javascript">alert("Customer Record Deleted Succesfully");window.location=\'ManageUsers.php\';</script>';
	}
	else
	{
	echo "Not Deleted!";
	}
	// Close The Connection
	mysqli_close ($con);
	
	
	} 

      }
?>