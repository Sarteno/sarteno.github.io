<?php
if (isset($_GET['error'])) {
  $error = $_GET['error'];
  if ($error = 'ok') {
    echo "<h1>ERROR FALTAN DATOS</h1>";

  }
}

 ?>

<!DOCTYPE html>
<html>

<head>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./css/styles.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="orange darken-4">


    <div class="container login orange darken-4">
      <div class="card amber darken-4">
        <div class="row">
          <div class="col s12 m4 offset-m4">
            <h1 class="center-align text-orange text-accent-4">Login</h1>
            <hr>

            <div class="row">
              <div class="input-field  col s12">
                <form action="procesar_formulario.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Username" class="validate" id="input_text" data-length="10" name="username" autofocus="autofocus" required="required">
                <label for="username" class="white-text">Username</label>
                <span class="helper-text" data-error="No more than 10 characters" data-success="Good :D">No more than 10 characters</span>
              </div>
            </div>
            <div class="row">
              <div class="input-field  col s12">
                <input type="password" placeholder="Password" class="validate" id="password" name="password" minlength="8" required="required">
                <label for="password" class="white-text">Password</label>
              </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="login">Login
              <i class="material-icons right">send</i>
            </button> <br><br><br>
  </form>
          </div>
        </div>
      </div>
    </div>


  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
