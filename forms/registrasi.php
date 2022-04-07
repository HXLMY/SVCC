<!-- <?php
require 'functions.php';
include 'header.html';
if (isset($_POST["register"])){
    
    if(register($_POST) > 0){
        echo "<script>
        alert('registration successful');
        document.location.href = 'login.php';
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="../assets/img/logoBorneo.png" rel="icon" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="styleForms.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <title>Registrasi</title>
  </head>
  <body>
    <section class="form my-5 mx-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="" method="post" class="form-regis w-100">
              <div class="form-row my-5 mb-3">
                <div class="col-lg-6">
                  <h1 class="text-center fw-bold">Register</h1>
                  <input type="text" placeholder="username" name="username" id="username" class="form-control my-3 p-4" required />
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-lg-6">
                  <input type="email" placeholder="email" name="email" id="email" class="form-control my-3 p-4" required />
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-lg-6">
                  <input type="text" placeholder="job" name="job" id="job" class="form-control my-3 p-4" required />
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-lg-6">
                  <input type="password" placeholder="password" name="password" id="password" class="form-control my-3 p-4" required />
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-lg-6">
                  <input type="password" placeholder="confirm password" name="password2" id="password2" class="form-control my-3 p-4" required />
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-lg-6">
                  <button name="register" id="register" class="btn btn-secondary p-2" type="submit">Create Account</button>
                </div>
              </div>
              <div class="form-row">
                <div class="sosmed col-lg-7 d-flex justify-content-center mb-3">
                  <a href="https://www.instagram.com/svcc.borneo/"><i class="bi bi-instagram me-4" style="font-size: 1.5rem; color: grey"></i></a>
                  <a href="https://www.tiktok.com/@svccborneo"><i class="bi bi-tiktok me-4" style="font-size: 1.5rem; color: grey"></i></a>
                  <a href="https://www.youtube.com/channel/UCcdKNpWGRHoJ2h0dQg4Swdg"><i class="bi bi-youtube" style="font-size: 1.5rem; color: grey"></i></a>
                </div>
              </div>
            </form>
          </div>
          <div class="logo col-lg-6 text-center mt-5">
            <img src="../assets/img/logoBorneo.png" alt="SVCC Borneo" class="img-fluid mb-3" style="width: 60%; margin-top: 8vh" />
            <p>Already have an Account? Login <a href="login.php">here.</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
