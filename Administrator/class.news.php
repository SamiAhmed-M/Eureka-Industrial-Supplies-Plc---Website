<?php

class news {
	
private $NewsId;
private $News;
private $NewsDate;




  function Delete(){
	// Establish Database selection and connection
	include_once("chemicals.php");
	//Id refers to NewsId
        $Id=$_GET['NewsId'];
	// Specify the query to Delete Record
	$sql = "delete from news_master where news_master.NewsId='".$Id."'";
	// execute query
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
        if ($result)
	{
        echo '<script type="text/javascript">alert("News Record Deleted Succesfully");window.location=\'ManageNews0.php\';</script>';
	}
	else
	{
        echo '<script type="text/javascript">alert("Deletion failed!");window.location=\'ManageNews0.php\';</script>';
	}
        // Close The Connection
	mysqli_close ($con);
	
	} 


   function Edit(){
	// Establish Database selection and connection
	include_once("chemicals.php");
	$Id=mysqli_real_escape_string($con,$_POST['txtNewsId']);
	$News=mysqli_real_escape_string($con,$_POST['txtNews']);
	$NewsDate=mysqli_real_escape_string($con,$_POST['txtNewsDate']);
	if(empty($News))
	{
	echo '<script type="text/javascript">alert("News Field information Required!");window.location=\'ManageNews0.php\';</script>';
	exit();
	}
        
	// Specify the query to Update Records in flight table
	$sql = "Update news_master set News='".$News."',NewsDate='".$NewsDate."' where NewsId='".$Id."' ";
	// Execute query
	mysqli_query($con,$sql) or die(mysqli_error($con));
	
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("News Record Updated Succesfully");window.location=\'ManageNews0.php\';</script>';
	}



    function Add(){
	// Establish Database selection and connection
	include_once("chemicals.php");
	//$Id=mysqli_real_escape_string($con,$_POST['txtNewsId']);
	$News=mysqli_real_escape_string($con,$_POST['txtNews']);
	$NewsDate=mysqli_real_escape_string($con,$_POST['txtDate']);
	if(empty($News))
	{
	echo '<script type="text/javascript">alert("News Field information Required!");window.location=\'ManageNews0.php\';</script>';
	exit();
	}

        // Specify the query to Insert Record in news table
	$sql = "insert into news_master	(News,NewsDate)	values ('".$News."','".$NewsDate."')";
	// execute query
	mysqli_query($con,$sql) or die(mysqli_error($con));
        // Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("News Record Inserted Succesfully");window.location=\'ManageNews0.php\';</script>';

	}
}

?>