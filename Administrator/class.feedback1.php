<?php

class feedback1 {
	
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
        echo '<script type="text/javascript">alert("Feedback Record Deleted Succesfully");window.location=\'Feedback1.php\';</script>';
	}
	else
	{
        echo '<script type="text/javascript">alert("Deletion failed!");window.location=\'Feedback1.php\';</script>';
	}
        // Close The Connection
	mysqli_close ($con);
	
	} 
 
}

?>