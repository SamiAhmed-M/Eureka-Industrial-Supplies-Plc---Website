<?php 
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Eureka Industrial Supplies Plc</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">You are here: <a href="CompanyServices.php">Manage Images of Company Services</a></p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
              <h2><span><a href="#">Welcome to Company Services Image Upload Panel</a></span></h2>
               

                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="27" bgcolor="#A0B9F3"><strong>Upload Images of Company Services</strong></td>
        </tr>
        <tr>
          <td height="26">
               
	<form id="form1" name="form1" action="uploadservices.php" method="post" enctype="multipart/form-data">
            
            <table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="35"><span class="style10">Description about image:</span></td>
                <td><span id="sprytextfield1">
                  <label>
                  <textarea name="txtDescription" id="txtDescription" cols="35" rows="5"></textarea>
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
	      <tr>
                <td height="35"><span class="style10">Browse and Upload:</span></td>
                <td><span id="sprytextfield11">
                  <label>
                  <input type="file" name="file" />
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
	      
              <tr>
                <td>&nbsp;</td>
                <td><label><div align="center">
                  <button type="submit" name="btn-upload" id="button">upload</button>
                </div></label></td>
              </tr>
            </table>
                    </form>            </td>
        </tr>

       <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...and included in the list below.</label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload image files(JPEG, JPG, PNG, BMP & GIF only) and Width X Height not more than 800px X 800px</label>
        <?php
	}
	?>


        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>Company Services Image List</strong></td>
        </tr>
        <tr>
            <td>
            <div style="overflow:scroll; width:630px;height:400px" >
            <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>File Name</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>File Type</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>File Size(KB)</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Service Image</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Delete</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Edit</strong></div></th>
</tr>
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
          
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $row['file'] ?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $row['Description'] ?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $row['type'] ?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $row['size'] ?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo '<img src="serviceuploads/'.$image.'" width="360" height="150">' ?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="uploadservicesEdit.php?ImageId=<?php echo $image;?>">Edit</a></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='DeleteServicesImages.php?ImageId=<?php echo $image;?>';}">Delete</a></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
<tr>
<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
<?php
// Close the connection
mysqli_close($con);
?>
</table>
     </div>    
      </td>
        </tr>
      </table>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
//-->
</script>
</body>
</html>