<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_icas = "localhost";
$database_icas = "icas";
$username_icas = "root";
$password_icas = "";
$icas = mysql_pconnect($hostname_icas, $username_icas, $password_icas) or trigger_error(mysql_error(),E_USER_ERROR); 
?>