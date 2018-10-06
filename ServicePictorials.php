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


    
        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">You are here: <a href="ServicePictorials.php">View Pictures of Our Services</a></p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
         

           
            <!-- /article -->
       <div class="article">
                

           
               
       <div style="overflow:scroll; width:970px;height:450px" > 
     
       <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">          

        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>&nbsp;&nbsp;Picture Gallery of Our Services</strong></td>
        </tr>
        <tr>
            <td>
            
            <table width="100%" border="1" bordercolor="#1CB5F1" >

<?php
// Establish Database selection and connection
include_once("chemicals.php");
	
// Specify the query to execute
$sql="SELECT Description, file FROM tbl_serviceuploads ORDER BY file";
// Execute query
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
//set counter to 0
$flag=0;
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
//counter is zero then we are start new row  
        if ($flag==0){
            echo '<tr>';
        }
$image=$row ['file'];

echo '<td class="style3">';
echo '<div align="left" class="style9 style5">';
echo '<strong>';
echo '<a href="EnlargeImage.php?ImageId='.$image.'"><img src="Administrator/serviceuploads/'.$image.'" width="150" height="150"></a>';
echo '</strong>';
echo '</div>';
echo '</td>';

//if our counter is greater then 4 we set counter to zero  showing items in a row ... from 0 to 4 and close tr tag  
        if ($flag>4){
            $flag=0;
            echo '</tr>';
        };  
        $flag = $flag + 1;
           
?>
                                                                     
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
<tr>
<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Service Pictures"; ?> </div></td>
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