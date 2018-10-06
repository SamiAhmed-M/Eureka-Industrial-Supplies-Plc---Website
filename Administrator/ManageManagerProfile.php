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
include "menu1.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">You are here: <a href="ManageManagerProfile.php">Edit Profile</a></p>
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
                <h2><span><a href="#">Edit Manager Detail</a></span></h2>
               <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Record</span></td>
                  </tr>
                  <tr>
                    <td>
<?php
$Id=$_SESSION['ID'];
// Establish Database selection and connection
include_once("chemicals.php");
// Specify the query to execute
$sql = "select administrator.*,account.* from administrator INNER JOIN account ON administrator.AdminId=account.AdminId where administrator.AdministratorId='".$Id."'";
// Execute query
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['AdminId'];
$ManagerId=$row['AdministratorId'];
$FirstName=$row['FirstName'];
$MiddleName=$row['MiddleName'];
$LastName=$row['LastName'];
$UserName=$row['UserName'];
$Password=$row['Password'];
$EMail=$row['e_mail'];
$MobileTel=$row['Admin_Tel'];

}

?>
        
                        <form method="post" action="UpdateManagers1.php">
                          <table width="100%" border="0">
                            <tr>
                              <td height="36"><span class="style8">Manager Id</span></td>
                              <td><span id="sprytextfield1">
                                <label><div align="center"> 
                                <input name="txtSupervisorId" type="text" id="txtSupervisorId" readonly="true" size="35" value="<?php echo $ManagerId;?>" />
                                </div></label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Man. First Name:</span></td>
                              <td><span id="sprytextfield2">
                                <label><div align="center">
                                <input name="txtSupervisorFirstName" type="text" id="txtSupervisorFirstName" size="35" value="<?php echo $FirstName;?>" />
                                </div></label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
			    <tr>
                              <td height="36"><span class="style8">Man. Middle Name:</span></td>
                              <td><span id="sprytextfield3">
                                <label><div align="center">
                                <input name="txtSupervisorMiddleName" type="text" id="txtSupervisorMiddleName" size="35" value="<?php echo $MiddleName;?>" />
                                </div></label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
			    <tr>
                              <td height="36"><span class="style8">Man. Last Name:</span></td>
                              <td><span id="sprytextfield4">
                                <label><div align="center">
                                <input name="txtSupervisorLastName" type="text" id="txtSupervisorLastName" size="35" value="<?php echo $LastName;?>" />
                                </div></label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">User Name:</span></td>
                              <td><span id="sprytextfield5">
                                <label><div align="center">
                                <input name="txtUserName" type="text" id="txtUserName" size="35" value="<?php echo $UserName;?>" />
                                </div></label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Password:</span></td>
                              <td><span id="sprytextfield6">
                                <label><div align="center">
                                <input name="txtPass" type="password" id="txtPass" size="35" value="<?php echo $Password;?>" />
                                </div></label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Man. E_Mail:</span></td>
                              <td><span id="sprytextfield7">
                                <label><div align="center">
                                <input name="txtEMail" type="text" id="txtEMail" size="35" value="<?php echo $EMail;?>" />
                                </div></label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Man. Mobile:</span></td>
                              <td><span id="sprytextfield8">
                                <label><div align="center">
                                <input name="txtMobile" type="text" id="txtMobile" size="35" value="<?php echo $MobileTel;?>" />
                                </div></label>
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
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
//-->
</script>
</body>
</html>