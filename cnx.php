<?php 
  session_start();
 function connexion(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gestion_contacts";
        // Create connection
        $connect = mysqli_connect($servername, $username, $password,$dbname);
        return $connect;
    
  }
  $con=connexion();
  
                                            class login {
                                                // Properties (modificateur d'acces : public , private , proteted (héritage) )
                                                    public $Username;
                                                    public $Password;
                                                    public $Password_verify;
                                                // CONSTRUCTOR 
                                            function __construct($name, $pass,$passv) {
                                                    //  this /self 
                                                    $this->Username = $name;  //had shy ly fy const hwa ly at affiktih fy dakshy ly fy lclass
                                                    $this->Password = $pass;
                                                    $this->Password_verify = $passv;
                                                }
                                            }
                                        //  ----------------------------------------- signup -----------------------------------------------

                                                 // require 'cnx.php';
                                                if(isset($_POST['Sign_Up'])){
                                                    //  input value 
                                                    $Username=$_POST['Username'];
                                                    $Password=$_POST['Password'];
                                                    $Password_verify=$_POST['Password_verify'];
                                                    // INSTANCIATION 
                                                    $test = new login($Username,$Password,$Password_verify);
                                                    $user=$test ->Username;
                                                    $pass=$test->Password;
                                                    $passv=$test->Password_verify;
                                                    // sql 
                                                    $query="INSERT INTO signup(Username,Password,Password_verify) values('$user','$pass','$passv')";
                                                    $var = mysqli_query($con,$query);

                                                    // $_SESSION["timesignUp"]=time();
                                                    setcookie('time_signup',time(),time()+24*3600);
                                                    header("location: Login.php");
                                                    die();
                                                }
                                        // ------------------------------------------- sign in --------------------------------------------


                                                if(isset($_POST['Login'])) {

                                                    $result = $con ->query("select * from signup ");

                                                    if ($result->num_rows > 0)
                                                    {
                                                            while($row = $result->fetch_assoc()) {

                                                                if($_POST['Username'] == $row["Username"])
                                                                {
                                                                    if($_POST['Password'] == $row["Password"])
                                                                    {
                                                                            $_SESSION["User"] = $row["Username"];

                                                                            $_SESSION["active"] = "true";

                                                                            $_SESSION["timelogin"]=time();

                                                                    
                                                                        header("Location: profil.php");
                                                                        die();
                                                                        break;
                                                                    }
                                                                    
                                                                }
                                                            
                                                            }
                                                    }
                                                    else
                                                    {
                                                        header("Location: Login.php");	
                                                        die();
                                                    }
                                                
                                                }
                                           
                                        // <!-- -----------------------------------------Contact-------------------------------------------->



                                            class contac {
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
                                           
                                                if(isset($_POST['add'])){


                                                    $name=$_POST['name'];
                                                    $Phone=$_POST['Phone'];
                                                    $Email=$_POST['Email'];
                                                    $Address=$_POST['Address'];
                                                     // INSTANCIATION 
                                                    $tes = new contac($name,$Phone,$Email,$Address);
                                                    $Name=$tes->name;
                                                    $Phon=$tes->Phone;
                                                    $email=$tes->Email;
                                                    $address=$tes->Address;
                                                                   
                                                    $query="INSERT INTO contact (name ,Phone ,Email ,Address ) values('$name','$Phone','$Email','$Address') ";
                                                    mysqli_query($con,$query);
                                                    header('Contact.php');
                                                }
                        
                                        //    <!-- --------------------------------- update -------------------------------->



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
                                                if(isset($_GET["id"])) {
                                                                    
                                                        
                                                    $id=$_GET['id'];
                                                    $req = "SELECT * FROM contact where id ='$id' ";
                                                    $res =  $con -> query($req) ;
                                                    $row = $res -> fetch_assoc();
                                                if(isset($_POST['update'])) {
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
                                                                          
                                                                  
                                                    }
                                                }
                                                         
                                                                
                                                                  
      ?>