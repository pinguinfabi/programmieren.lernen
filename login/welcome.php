<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Menu</title>

  </head>
  <body>
<div class="container"> 
  <nav class="navbar navbar-expand-md navbar-dark">

    <a href="#" class="navbar-brand">
      <img src="https://cdn.discordapp.com/attachments/791255235712647179/791287025260691476/pinguin_drache.png" alt="Penguin" width="30" height="24"
      class="d-inline-block align-top">
       <span class="hidden">Bootstrap 5</span>
      </a>

    <button
       class="navbar-toggler"
       type="button"
       data-bs-toggle="collapse"
       data-bs-target="#toggleMobileMenu"
       aria-controls="toggleMobileMenu"
       aria-expanded="false"
       aria-lable="Toggle navigation"
    >

    <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="toggleMobileMenu">
      <ul class="navbar-nav ms-auto text-center">

        <li>
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HTML <span class="badge bg-secondary">New</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../Html/index.html#scrollspyheading1">First heading</a></li>
            <li><a class="dropdown-item" href="../Html/index.html#scrollspyHeading2">Second heading</a></li>
            <li><a class="dropdown-item" href="../Html/index.html#scrollspyHeading3">Third heading</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Css <span class="badge bg-secondary">New</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../Css/index.html#scrollspyHeading1">First heading</a></li>
            <li><a class="dropdown-item" href="../Css/index.html#scrollspyHeading2">Second heading</a></li>
            <li><a class="dropdown-item" href="../Css/index.html#scrollspyHeading3">Third heading</a></li>
          </ul>



        <li>
          <a class="nav-link" href="../index.html">Menu</a>
        </li>
        
      </ul>
    </div>
  </nav>





</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    
  </body>
</html>
