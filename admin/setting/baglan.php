<?php 
try{
    $db=new PDO("mysql:host=localhost;dbname=pdoporto",'root','');
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>