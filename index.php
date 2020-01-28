
<?php 

  
  include 'core/connection.php'; 
  
  
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Login</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newuser">Create new account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Help</a>
      </li>
    </ul>
  </div>
</nav>







      <section>
        <br><br>
        <div style="width:50%;" class="container from-group">
        
          <form>
            <label for="exampleFormControlInput1">user</label>
            <input  type="email" class="input form-control" name="mail" placeholder="e-mail" required="on" autocomplete="off">
            <label for="exampleFormControlInput2">password</label>
            <input id="password" type="password" class="input form-control"  name="password" placeholder="password" required="on" autocomplete="off">

              <div class="form-check mb-2 mr-sm-2">
                <br>
                  <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                  <label class="form-check-label" for="inlineFormCheck">
                  Remember me
                </label>
              </div>

              <button type="submit" class="btn btn-primary mb-2">iniciar sesion</button>
              <a href="newuser">Create new Account</a>
          </form>


        </div>

      </section>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="js/App.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>