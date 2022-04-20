<?php
  require 'cnx.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cascading-right {
            margin-right: -50px;
            }

         @media (max-width: 991.98px) {
       .cascading-right {
             margin-right: 0;
             }
         }
    </style>

      
</head>

<body>
   <nav class="navbar navbar-light Naav">
        <div class="container-fluid">
            <a class="navbar-brand text-white">Contacts list</a>

            <a class="navbar-brand text-secondary">login</a>
        </div>
    </nav>


    <section class="text-center text-lg-start">
       
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right" style="
          background: hsla(0, 0%, 100%, 0.55);
          backdrop-filter: blur(30px);
          ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Sign up now</h2>
                            <form method="POST" action="" id="form" name="NomForm">

                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>

                                </div>

                                <div class="form-outline mb-4">
                                    <input type="" id="form2Example17" id="Username" name="Username"
                                        class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example17">Username</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example27" id="Password" name="Password"
                                        class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example27">Password</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example27" id ="Password_verify"name="Password_verify"
                                        class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example27">Password_verify</label>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="Sign_Up"
                                        type="button">Sign up</button>
                                </div>

                                <div class="mt-3 href">
                                    <p class="text-muted m-3 "> No account?<a class="linnk text-info"
                                            href="Login.php">Sign in </a> here.
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img class="imGe" src="image.jpeg" class="rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>