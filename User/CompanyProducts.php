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


    
        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">You are here: <a href="CompanyProducts.php">View Images of Company Products</a></p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
         

           
            <!-- /article -->
       <div class="article">
                <h2><span><a href="#">Welcome To Company Product List</a></span></h2>

           
               
       <div style="overflow:scroll; width:970px;height:650px" > 
     
       <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">          

        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>&nbsp;&nbsp;Company Products List</strong></td>
        </tr>
        <tr>
            <td>
            
            <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description</strong></div></th>

<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Product Image</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong></strong></div></th>
</tr>
<?php
// Establish Database selection and connection
include_once("chemicals.php");
	
// Specify the query to execute
$sql="SELECT Description, file FROM tbl_uploads";
// Execute query
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$image=$row ['file'];
          
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $row['Description'] ?></strong></div></td>

<td class="style3"><div align="left" class="style9 style5"><strong><?php echo '<img src="../Administrator/uploads/'.$image.'" width="360" height="150">' ?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><center><a href="EnlargeImage.php?ImageId=<?php echo $image;?>">Zoom_Out</a></center></strong></div></td>
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
       
      </td>
        </tr>
      </table>
        </div>
              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
             
<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
//-->
</script>
</body>
</html>