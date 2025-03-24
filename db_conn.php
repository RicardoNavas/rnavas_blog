<?php 

//Variables Locales

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "blog_db";


//Variables Servidor Nube

//$sName = "bgbwodc0q2eokwtaspus-mysql.services.clever-cloud.com";
//$uName = "u3srveybk7bljt84";
//$pass = "iHKEUzPTOTm90nMpPGIA";
//$db_name = "bgbwodc0q2eokwtaspus";




try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}