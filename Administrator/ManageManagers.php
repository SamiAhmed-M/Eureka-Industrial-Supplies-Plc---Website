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
            <p id="breadcrumbs">You are here: <a href="ManageManagers.php">Manage Managers Account</a></p>
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
              <h2><span><a href="#">Welcome To Managers Account Control</a></span></h2>
               

                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="27" bgcolor="#A0B9F3"><strong>Register New Managers and View List of Managers</strong></td>
        </tr>
        <tr>
          <td height="26"><form id="form1" name="form1" method="post" action="InsertManagers.php">
            <table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="35"><span class="style10">Manager First Name:</span></td>
                <td><span id="sprytextfield3">
                  <label>
		  <div align="center">
                  <input type="text" name="txtManagerFirstName" id="txtManagerFirstName" size="35"/>
                  </div></label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
	      <tr>
                <td height="35"><span class="style10">Manager Middle Name:</span></td>
                <td><span id="sprytextfield7">
                  <label>
		  <div align="center">
                  <input type="text" name="txtManagerMiddleName" id="txtManagerMiddleName" size="35"/>
                  </div></label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td height="35"><span class="style10">Manager Last Name:</span></td>
                <td><span id="sprytextfield8">
                  <label>
		  <div align="center">
                  <input type="text" name="txtManagerLastName" id="txtManagerLastName" size="35"/>
                  </div></label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td height="35"><span class="style10">Manager Id:</span></td>
                <td><span id="sprytextfield4">
                  <label>
		  <div align="center">
                  <input type="text" name="txtManagerId" id="txtManagerId" size="35"/>
                  </div></label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td height="35"><span class="style10">User Name:</span></td>
                <td><span id="sprytextfield1">
                  <label>
		  <div align="center">
                  <input type="text" name="txtUserName" id="txtUserName" size="35"/>
                  </div></label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td><span class="style10">Password:</span></td>
                <td><span id="sprytextfield2">
                  <label>
		  <div align="center">
                  <input type="password" name="txtPassword" id="txtPassword" size="35"/>
                  </div></label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td height="35"><span class="style10">Manager E_Mail:</span></td>
                <td><span id="sprytextfield5">
                  <label>
		  <div align="center">
                  <input type="text" name="txtEmail" id="txtEmail" size="35"/>
                  </div></label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td height="35"><span class="style10">Manager Mobile:</span></td>
                <td><span id="sprytextfield6">
                  <label>
		  <div align="center">
                  <input type="text" name="txtMobile" id="txtMobile" size="35"/>
                  </div></label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
	      <tr>
                <td height="35"><span class="style10">Manager's Privilege:</span></td>
                <td><label><div align="center">
                  <select style="width: 225px" name="cmbManager" id="cmbManager">
                  <option value="Administrator">Administrator</option>
		  <option value="Manager">Manager</option>
                  </select>
                  </div></label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
		<div align="center">
                  <input type="submit" name="button" id="button" value="Register Manager" />
                </div></label></td>
              </tr>
            </table>
                    </form>            </td>
        </tr>
    
        <tr><form id="form2" method="post" action="ManageManagers1.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                      <tr>
                          
                          <td><label>
			      <div align="center">
			      <input type="submit" name="button" id="button" value="View Managers List" align="center" />
			      </div>
                              </label></td>
                        </tr>
                      </table>
                                        </form>
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
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
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