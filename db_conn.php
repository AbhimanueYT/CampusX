<?php 

$sName = "localhost";
$uName = "ct20org_ct20org";
$pass = "SCPct@2020";
$db_name = "ct20org_auth_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}