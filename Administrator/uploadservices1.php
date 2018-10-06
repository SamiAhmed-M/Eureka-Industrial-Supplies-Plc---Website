<?php
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

//include_once 'chemicals.php';
if(isset($_POST['btn-upload']))
{    
 // when button-upload button is clicked 

        //id no. (random number) given to the name of the new file to be uploaded i.e. idNumber-the original file name including the extension eg .jpg   
	$file = rand(1000,100000)."-".$_FILES['file']['name'];

        //Description by the uploader about the file to be uploaded 
        $imageDescription = mysqli_real_escape_string($con,$_POST['txtDescription']);

        //temporary location of the file to be uploaded
        $file_loc = $_FILES['file']['tmp_name'];

        //original file size
	$file_size = $_FILES['file']['size'];

        //the type of the file like .jpg, .png, .pdf saved as image/jpeg or image/png or image/bmp or image/gif or application/pdf
	$file_type = $_FILES['file']['type'];

        //folder in which the uploaded file is to be stored
	$folder="serviceuploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// change file name in lower case
	$new_file_name = strtolower($file);
	// change file name in lower case

        //replace the old name with the new file name	
	$final_file=str_replace(' ','-',$new_file_name);

        if ($file_type=="image/jpeg" or $file_type=="image/jpg" or $file_type=="image/png" or $file_type=="image/gif" or $file_type=="image/bmp")
       {
        //move the new file from the temporary location file_loc to serviceuploads/new file name in uploads folder	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_serviceuploads (file,Description,type,size) VALUES ('$final_file','$imageDescription','$file_type','$new_size')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
                window.location.href='CompanyServices1.php?success';
                </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='CompanyServices1.php?fail';
        </script>
		<?php
	}
       }
        else
       {
        echo '<script type="text/javascript">alert("Please upload image type .png or .jpeg or .gif or .bmp only!");window.location=\'CompanyServices1.php\';</script>';
	exit();

       }
}
?>