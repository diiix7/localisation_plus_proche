<?php
    try{
        $bdd=new PDO('mysql:host=localhost;dbname=Base','root','');
    }
    catch(Exception $e){
        die('Erreur: '.$e);
    }
?>