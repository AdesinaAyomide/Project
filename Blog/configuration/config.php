<?php
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'Blog');
$server= mysqli_connect ( DB_HOST , DB_USER , DB_PASS, DB_NAME );
     if($server === false) {
        die("error:cannot connect".mysqli_connect_error());
     }else{
     //echo "connected";
     }
