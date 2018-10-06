<?php

class feedback {
	
private $FeedbackId;
private $Feedback;
private $FeedbackDate;

  function Delete(){
	// Establish Database selection and connection
	include_once("chemicals.php");
	
        //Id refers to FeedbackId
        $Id=$_GET['FeedbackId'];
	// Specify the query to Delete Record
	$sql = "delete from feedback where FeedbackId='".$Id."'";
	// execute query
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
        if ($result)
	{
        echo '<script type="text/javascript">alert("Feedback Record Deleted Succesfully");window.location=\'Feedback.php\';</script>';
	}
	else
	{
        echo '<script type="text/javascript">alert("Deletion failed!");window.location=\'Feedback.php\';</script>';
	}
        // Close The Connection
	mysqli_close ($con);
	
	} 


   function Add(){
	if(!isset($_SESSION))
	{
	session_start();
	}
	$Feedback=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	if(empty($Feedback))
	{
	echo '<script type="text/javascript">alert("Feedback information Required!");window.location=\'Feedback.php\';</script>';
	exit();
	}
	// Establish Database selection and connection
	include_once("chemicals.php");
	
	// Specify the query to Insert Record
	$sql = "insert into feedback (UserId,Feedback,FeedbackDate) values('".$Id."','".$Feedback."','".$FDate."')";
	// execute query
	mysqli_query($con,$sql) or die(mysqli_error($con));
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';

	}

}

?>