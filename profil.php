<?php  include 'cnx.php';

  if(!isset($_SESSION["active"]))
 {
     header("location:Login.php");
 }
  
  if(isset($_SESSION['User']))
  {
    $user= $_SESSION['User'];
  }
  else{
    $user="session makinach";
  }

//  login time
  if(isset($_SESSION["timelogin"]))
  {
    $currentTimeinSeconds=$_SESSION["timelogin"];
    // $currentTimeinSeconds=strtotime("-1 hours");
    $currentDate = date("Y-m-d h:i:sa", $currentTimeinSeconds);
  }
// sign up time

  if (isset($_COOKIE["time_signup"]))
  {
    $Time=$_COOKIE["time_signup"];
    // $Time=strtotime("-1 hours");
    $date = date("y-m-d h:i:sa",  $Time);
  }
  else{
    $date="cookie not exist!!";
  }

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="stt.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .bgJ{
        background-color: #bae0f7;
}
      .babt{
    padding-left: 80px;
}
    </style>
</head>

<body class="bgJ">
    <section>

        <nav class="navbar navbar-light Naav">
            <div class="container-fluid">
                <a class="navbar-brand text-white">Contacts list</a>
                <div class="d-flex">
                    <a class="navbar-brand text-secondary" href="Contact.php"> <?php echo  $user; ?> </a>
                    <a class="navbar-brand text-secondary" href="Contact.php">Contacts</a>
                    <a class="navbar-brand text-secondary" href="logout.php">logout</a>
                </div>
            </div>
        </nav>


        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="card p-3 py-4">
                        <div class="text-center "> <img class="phImg" src="bo3.jpg" width="100" class="rounded-circle">
                        </div>
                        <div class="text-center mt-3">
                            <h1 class="p-4">Welcome, <span class="user"> <?php echo  $user; ?> </span></h1>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Your Profil :</li>
                                <li class="list-group-item fw-bolder">Username : <label class=" babt fw-normal ms-5">
                                        <?php echo  $user; ?> </label></li>
                                <li class="list-group-item fw-bolder">Signup date : <label class=" fw-normal ms-5">
                                       <?php echo $date;?> </label></li>
                                <li class="list-group-item fw-bolder">Last login : <label class="fw-normal ms-5">
                                        <?php echo $currentDate; ?> </label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>