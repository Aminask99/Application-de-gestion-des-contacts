<?php

class cont {
    // Properties (modificateur d'acces : public , private , proteted (héritage) )
        public $name;
        public $Phone;
        public $Email;
        public $Address;
    // CONSTRUCTOR 
    function __construct($Name, $Phon,$email,$address) {
        //  this /self 
        $this->name = $Name;  //had shy ly fy const hwa ly at affiktih fy dakshy ly fy lclass
        $this->phoone = $Phon;
        $this->emaill = $email;
        $this->Addresss = $address;
    }
 }
        $id=$_GET['id'];
        $req = "SELECT * FROM contact where id ='$id' ";
        $res =  $con -> query($req) ;
        $row = $res -> fetch_assoc();
        if(isset($_POST['update'])){
        $name= $_POST['name'];
        $Phone= $_POST['Phone'];
        $Email=$_POST['Email'];
        $Address=$_POST['Address'];

        $tes = new cont($name,$Phone,$Email,$Address);
        $Name=$tes->name;
        $Phon=$tes->Phone;
        $email=$tes->Email;
        $address=$tes->Address;

        $req = " UPDATE contact SET  name = '$name',Phone ='$Phone', Email = '$Email', Address ='$Address' where id = '$id' ";
        $con  -> query($req);
        header('location: Contact.php');
        // <!-- ---------------------------- update------------------------- -->
       
}
?>