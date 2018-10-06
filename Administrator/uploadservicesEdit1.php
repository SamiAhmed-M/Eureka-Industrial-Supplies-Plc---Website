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
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style11 {color: #192666}
-->
    </style>
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
            <p id="breadcrumbs">You are here: <a href="CompanyServices1.php">Manage Company Services Images</a></p>
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
                <h2><span><a href="#">Edit Company Services Image Detail</a></span></h2>
               

                <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Record</span></td>
                  </tr>
                  <tr>
                    <td>
<?php
$Id=$_GET['ImageId'];
// Establish Database selection and connection
include_once("chemicals.php");
// Specify the query to execute
$sql = "select * from tbl_serviceuploads where file='".$Id."'";
// Execute query
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['file'];
$Description=$row['Description'];

}

?>
                        <form method="post" action="UpdateServicesImages1.php">
                          <table width="100%" border="0">
                            <tr>
                              <td height="32"><span class="style8">File Name:</span></td>
                              <td><span id="sprytextfield1">
                                <label> 
                                <input name="txtImageId" type="text" id="txtImageId" readonly="true" value="<?php echo $Id;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Description:</span></td>
                              <td><span id="sprytextfield2">
                                <label>
                                <textarea name="txtDescription"  id="txtDescription" cols="35" rows="5" wrap="virtual"><?php echo $Description;?></textarea>
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
			    <tr>
                              <td></td>
                              <td><div align="center"><input type="submit" name="submit" value="Update Record" /></div></td>
                            </tr>
</table>
                        </form>
                        <?php
// Close the connection
mysqli_close($con);
?>

                        </td>
                  </tr>
                </table>
                <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right1.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>