<?php
 require 'cnx.php';
if (isset($_GET["id"])){

    $id = $_GET['id'];
    $req = "DELETE FROM contact where id = '$id' ";
    $con -> query($req);
    header('location:Contact.php');  
}


?>