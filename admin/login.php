<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Login Admin
    </title>
  </head>
  <body class="bg-dark ">



<div class="d-flex align-items-center flex-column justify-content-center h-100 text-white my-5" id="header">
    <h1 class="display-4 my-5">- Login Admin -</h1>
    <form action="../includes/login-admin.php" method="POST">
        <div class="form-group">
            <input class="form-control form-control-lg" placeholder="ID Admin" type="text" name="id_adm" required="">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" placeholder="Password" type="password" name="password" required="">
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-lg btn-block" name="login">Login</button>
            <a class="btn btn-warning btn-lg btn-block" href="../">Batal</a>
        </div>
    </form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>