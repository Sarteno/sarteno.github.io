<?php

if(!empty($_POST['username']) && !empty($_POST['password'])){
  $error = 'Ok';
  $username = $_POST['username'];
  $password = $_POST['password'];
}else{
  $error = 'faltan_datos';
  header("Location:index.php?error=$error");
}


 ?>
<!DOCTYPE html>
<html>

<head>
  <style media="screen">
    .dropdown-content {
      width: max-content !important;
      height: auto !important;
    }
  </style>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="orange darken-4">
<div class="navbar-fixed">
  <nav class="amber darken-4">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">CH3D3R</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-nav">
          <i class="material-icons">menu</i>
        </a>
<ul class="right hide-on-med-and-down">
  <li><a href="#" class="">Home</a></li>
    <li><a href="#" class="">algo</a></li>
      <li><a href="#" class=""><?php echo "$username"; ?></a></li>
</ul>
      </div>
    </div>
  </nav>
</div>

<ul class="sidenav amber darken-4" id="mobile-nav">
  <li><a href="#" class="">Home</a></li>
    <li><a href="#" class="">algo</a></li>
      <li><a href="#" class=""><?php echo "$username"; ?></a></li>
      <!-- Dropdown Trigger -->
<a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider" tabindex="-1"></li>
  <li><a href="#!">three</a></li>
  <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
  <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
</ul>

</ul>










    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
//sidenav
const sideNav = document.querySelector('.sidenav');
M.Sidenav.init(sideNav, {});
const dropDown = document.querySelector('.dropdown-trigger');
M.Dropdown.init(dropDown, {
  hover: true,
  closeOnClick: true

});

</script>
</body>

</html>
