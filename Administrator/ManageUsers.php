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
  <div id="main">
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
	    
            <p id="breadcrumbs">You are here:<strong><a href="ManageUsers.php">Manage Users</a></strong></p>
            <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
  


            <!-- Article -->
   <div class="article">
              <h2><span><a href="#">Welcome To Customers Record Management</a></span></h2>
     

       <div style="overflow:scroll; width:970px;height:400px" >      

        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>Customer List</strong></td>
        </tr>
        <tr>
          <td>
          <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>First Name</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Middle Name</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Last Name</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>User Name</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Address</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>City</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>E-Mail</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Mobile</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Birth Date</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Gender</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Nationality</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Passport No. or ID</strong></div></th>

<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>  </strong></div></th>

</tr>
<?php
//session_start();
 
// Establish Database selection and connection
include_once("chemicals.php");
// Specify the query to execute
$sql = "select * from user INNER JOIN account ON user.UserId=account.UserId ORDER BY user.UserId";
// Execute query
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['UserId'];
$Fname=$row['FirstName'];
$Mname=$row['MiddleName'];
$LName=$row['LastName'];
$UName=$row['UserName'];
$Password=$row['Password'];
$Address=$row['Address'];
$City=$row['City'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];
$BirthDate=$row['BirthDate'];
$Gender=$row['Gender'];
$Nationality=$row['Nationality'];
$Passport=$row['IDorPassportNo'];
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Fname;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mname;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $LName;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $UName;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Address;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $BirthDate;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Gender;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Nationality;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Passport;?></strong></div></td>

<td class="style3"><div align="left" class="style9 style5"><strong><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='DeleteUsers.php?UserId=<?php echo $Id;?>';}">Delete</a></strong></div></td>

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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>
</body>
</html>