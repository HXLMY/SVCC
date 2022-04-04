<?php
require 'functions.php';
include 'header.html';
if (isset($_POST["login"])){
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    
    //email check
    if(mysqli_num_rows($result) === 1){
        
        //password check
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            echo "<script>
            document.location.href = 'index.html';
            </script>";
        }
    }

    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <title>Login</title>
  </head>
  <body>
  <?php 
    if (isset($error)) {
        echo "<script>
                    alert('Invalid Username or Password');
            </script>";
    } ?>
    <section class="form my-5 mx-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 text-center">
            <img src="assets/img/logoBorneo.png" alt="SVCC Borneo" class="img-fluid" />
          </div>
          <div class="col-lg-7">
            <form action="" method="post">
              <div class="form-row my-5 mb-3">
                <div class="col-lg-7">
                  <h1 class="text-center fw-bold">Log In</h1>
                  <input
                    type="email"
                    name= "email"
                    id= "email"
                    placeholder="Type Email Addreass"
                    class="form-control my-3 p-4"
                    required
                  />
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-lg-7">
                  <input
                    type="password"
                    name= "password"
                    id="password"
                    placeholder="password"
                    class="form-control my-3 p-4"
                    required
                  />
                </div>
              </div>
              <div class="form-row mb-4">
                <div class="col-lg-7">
                  <button class="btn btn p-2" type="submit" name="login" id="login" >LOGIN</button>
                  <p class="text-center mt-3">
                    Don't have an account? Register
                    <a href="registrasi.php">here.</a>
                  </p>
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7 d-flex justify-content-center">
                  <a href="https://www.instagram.com/svcc.borneo/"
                    ><i
                      class="bi bi-instagram me-4"
                      style="font-size: 1.5rem; color: grey"
                    ></i
                  ></a>
                  <a href="https://www.tiktok.com/@svccborneo"
                    ><i
                      class="bi bi-tiktok me-4"
                      style="font-size: 1.5rem; color: grey"
                    ></i
                  ></a>
                  <a href="https://www.youtube.com/channel/UCcdKNpWGRHoJ2h0dQg4Swdg"
                    ><i
                      class="bi bi-youtube"
                      style="font-size: 1.5rem; color: grey"
                    ></i
                  ></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>