<?php
if(!isset($_SESSION))
{
session_start();
}
	// Establish Database selection and connection
	include_once("chemicals.php");

        // Function 
	function checkSpecialFeedback($feedback){
	//Checks for the usage of any of the special characters in the user feedback
	return preg_match('/[\'~`\!@#\$%\^\&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\?\\\]/',$feedback) ? TRUE : FALSE;
	}
	
	if(checkSpecialFeedback($_POST['txtFeedback']) != FALSE )
		{
		echo '<script type="text/javascript">alert("Please do not use special characters in your feedback.");window.location=\'Feedback.php\';</script>';
		exit();
	        }
        else
            {
        //if the checks are ok i.e. no special characters in the Feedback we assign the feedback to a variable
        $Feedback=mysqli_real_escape_string($con,$_POST['txtFeedback']);
            }


	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	if(empty($Feedback))
	{
	echo '<script type="text/javascript">alert("Feedback information Required!");window.location=\'Feedback.php\';</script>';
	exit();
	}
	
 
	// Specify the query to Insert Record
	$sql = "insert into feedback (UserId,Feedback,FeedbackDate) values('".$Id."','".$Feedback."','".$FDate."')";
	// execute query
	mysqli_query($con,$sql) or die(mysqli_error($con));
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';

?>