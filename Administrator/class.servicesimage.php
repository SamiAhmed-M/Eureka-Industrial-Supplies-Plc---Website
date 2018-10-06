<?php

class servicesimage {
	
private $Description;
private $file;
private $type;
private $size;


  function Delete(){
	
        //Id refers to ImageId
        $Id=$_GET['ImageId'];
	// Establish Database selection and connection
	include_once("chemicals.php");

	// Specify the query to Delete Record
	$sql = "delete from tbl_serviceuploads where file='".$Id."'";
	// execute query
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
        
        if ($result)
	{
	echo '<script type="text/javascript">alert("Image Deleted Succesfully");window.location=\'CompanyServices.php\';</script>';
	}
	else
	{
	echo '<script type="text/javascript">alert("Image not deleted!!!");window.location=\'CompanyServices.php\';</script>';
	}
       
	// Close The Connection
	mysqli_close ($con);	
	
	} 


   function Edit(){
	// Establish Database selection and connection
	include_once("chemicals.php");
	//Id refers to file name of the image
        $Id=mysqli_real_escape_string($con,$_POST['txtImageId']);

	$Description=mysqli_real_escape_string($con,$_POST['txtDescription']);
	
	if(empty($Description))
	{
	echo '<script type="text/javascript">alert("Information about the image is Required!");window.location=\'CompanyServices.php\';</script>';
	exit();
	}
        
	// Specify the query to Update Records in tbl_upload table
	$sql = "Update tbl_serviceuploads set Description='".$Description."' where file='".$Id."' ";
	// Execute query
	mysqli_query($con,$sql) or die(mysqli_error($con));
	
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("Image Description Updated Succesfully");window.location=\'CompanyServices.php\';</script>';
	}




    function Add(){
	// Establish Database selection and connection
	include_once("chemicals.php");

	// Specify the query to execute
	$sql="SELECT * FROM tbl_serviceuploads";
	// Execute query
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
	// Loop through each records 
	while($row = mysqli_fetch_array($result))
	{
	$image=$row ['file'];
	}

        if(isset($_POST['btn-upload']))
       {    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
        $imageDescription = mysqli_real_escape_string($con,$_POST['txtDescription']);
        $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="serviceuploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_serviceuploads(file,Description,type,size) VALUES('$final_file','$imageDescription','$file_type','$new_size')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='CompanyServices.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='CompanyServices.php?fail';
        </script>
		<?php
	}
      }
	 }
}

?>