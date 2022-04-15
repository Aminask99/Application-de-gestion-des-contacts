<?php

  require 'cnx.php';

  if(isset($_SESSION["active"]))
  {
    header("location: profil.php");
  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .circle {
        width: 600px;
        height: 300px;
        background-color: rgb(145, 145, 151);
        font-size: 28px;
    }

    .bodyy {
        background-image: url("img.jpg");
    }
</style>

<body class="bodyy">
    <nav class="navbar navbar-light Naav">
        <div class="container-fluid">
            <a class="navbar-brand text-white">Contacts list</a>

            <a class="navbar-brand text-secondary">login</a>
        </div>
    </nav>




    <div class="d-flex justify-content-center text-cente">

        <div class="circle text-center ">
            <H1 class="title ">Hello!</H1>


            <a class="linnk" href="signUp.php">sign up </a> to start creating your contacts list <br>
            Already haveaccount?
            <a class="linnk" href="Login.php">Login </a> here <br>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>