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
include "menu1.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">You are here: <a href="Forget.php">Change Password</a></p>
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
                <h2><span><a href="#">Welcome To Eureka Industrial Supplies Plc</a></span></h2>
               

                <form id="form2" method="post" action="ForPass.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left" valign="middle">Select User:</td>
                      <td><p>
			<label>
                          <input type="radio" name="rdUser" value="Administrator" checked="checked" id="rdUser_0" />
                          Administrator</label>
                        <br />
                        <label>
                          <input type="radio" name="rdUser" value="Manager" id="rdUser_1" />
                          Manager</label>
                        <br />
                        <label>
                          <input type="radio" name="rdUser" value="User" id="rdUser_2" />
                          User</label>
                        <br />
                      </p></td>
                    </tr>
                    <tr>
                      <td>User Name:</td>
                    <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" size="35"/>
                        </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td><select style="width: 238px" name="cmbQue" id="cmbQue">
                        <option selected="selected">Administrator ID</option>
                        <option>Manager ID</option>
                        <option>User ID or Passport No.</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" size="35"/>
                        </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                    </tr>
		    <tr>
                <td height="35"><span class="style10">Password:</span></td>
                <td><span id="sprytextfield5">
                  <label>
                  <input type="password" name="txtPass" id="txtPass" size="35"/>
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td height="35"><span class="style10">Re-enter Password:</span></td>
                <td><span id="sprytextfield6">
                  <label>
                  <input type="password" name="txtRePass" id="txtRePass" size="35"/>
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label><div align="center">
                        <input type="submit" name="button2" id="button2" value="Create New Password" />
                      </div></label></td>
                    </tr>
                  </table>
              </form>
                <p>&nbsp;</p>
              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "rightForget.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>
</body>
</html>