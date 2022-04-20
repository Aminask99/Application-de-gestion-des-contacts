<?php
    require 'cnx.php';
    // session_start();

    if(!isset($_SESSION["active"]))
 {
     header("location: Login.php");
 }
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
     <title>Document</title>
   
</head>

<body>
       <nav class="navbar navbar-light Naav">
            <div class="container-fluid">
                <a class="navbar-brand text-white">Contacts list</a>
                <div class="d-flex">
                    <a class="navbar-brand text-secondary"href="Contact.php">Contacts</a>
                    <a  class="navbar-brand text-secondary"href="logout.php">logout</a>
                </div>
            </div>
        </nav>

    <section class="text-center">
      
        <div class="p-5 bg-image" style="
        background-image: url('im.png');
        height: 300px;
        "></div>

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5"> Add Contacts </h2>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">add</th>
                                    <th scope="col">delet</th>
                                </tr>
                            </thead>
                         
                        <?php
                            $req="SELECT * FROM contact ";
                            $res = mysqli_query( $con,$req);
                            while($user=mysqli_fetch_assoc($res)){
                            $id=$user['id'];
                          
                          echo" <tr>
                          <td class='py-3'> ".$user['name'] . "</td>
                          <td class='py-3'>{$user['Phone']}</td>
                          <td class='py-3'>{$user['Email']}</td>
                          <td class='py-3'>{$user['Address']}</td>" ; ?>
                          <td class="py-3">
                            <a  href="Contact.php?id=<?php echo $user['id']; ?>" type="button" class="btn btn-sm"  onclick="modells()">
                              <i class="fal fa-pen pe-2 text-info"></i>
                            </a>
                          </td>
                          <td>
                            <a href='delet.php?id=<?php echo $user['id']; ?>' type='button' class='btn  btn-sm '>
                              <i class='fal fa-trash text-info'></i>
                           </a>
                            </td>
                          </tr>
                           <?php
                            
                            }
                        ?>
                       </button>

                             
                        </table>
                        <form name="NomForm" id="form" method="post">

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <p id="message_0" class="text-danger"></p>
                                        <input type="" id="form3Example1" name="name" class="form-control" />
                                        <label class="form-label" for="form3Example1"> name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <p id="message" class="text-danger"></p>
                                        <input type="" id="form3Example2" name="Phone" class="form-control " />
                                        <label class="form-label" for="form3Example2">Phone</label>

                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <p id="message_1" class="text-danger"></p>
                                <input type="" id="form3Example3" name="Email" class="form-control" />
                                <label class="form-label" for="form3Example3">Email </label>
                            </div>
                            <div class="form-outline mb-4">
                                <p id="message_2" class="text-danger"></p>
                                <input type="" id="form3Example4" name="Address" class="form-control" />
                                <label class="form-label" for="form3Example4">Address</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="add">
                                Save
                            </button>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




   <div id="model_parent" class="parent">
        <div class="models">
            <button onclick="close_()" class="btnnn">X</button>
            <form action="" method="POST" class="formlair ps-3 pe-3 ">
                <h2 class="fw-bold mb-5 text-center text-light"> Add Contacts </h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <p id="message_0" class="text-danger"></p>
                            <input type="" id="form3Example1" name="name" value="<?php  echo $row['name'];?>" class="form-control" />
                            <label class="form-label text-light " for="form3Example1">name</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <p id="message" class="text-danger"></p>
                            <input type="" id="form3Example2" name="Phone" value="<?php  echo $row ['Phone'];  ?>" class="form-control " />
                            <label class="form-label text-light " for="form3Example2">Phone</label>

                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <p id="message_1" class="text-danger"></p>
                    <input type="" id="form3Example3" name="Email" value="<?php echo $row ['Email']; ?>" class="form-control" />
                    <label class="form-label text-light" for="form3Example3">Email</label>
                </div>
                <div class="form-outline mb-4">
                    <p id="message_2" class="text-danger"></p>
                    <input type="" id="form3Example4" name="Address" value="<?php echo $row ['Address'];?>" class="form-control" />
                    <label class="form-label text-light" for="form3Example4">Address</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4" name="update">
                  update
                </button>


            </form>
        </div>
 </div>
    <script src="jsScript.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        let uri = location.href
            if(uri.split('?')[1]) {
                document.getElementById("model_parent").style.display = "flex"
            }
        })

    </script>
</body>

</html>