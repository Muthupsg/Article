<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Times Articles</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top scrolling-navbar"
    style="width:100%; background-color: #00ff;">
    <div class="container-fluid" style="width:100%;">
      <a class="navbar-brand" style="color: #ffffff;" href="index.php">
        <i class="fas fa-hospital"></i>
        Times Articles </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php" style="color: #ffffff;">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href='register.php' class="nav-link" routerLinkActive="active" style="color: #ffffff;">
            Registration
          </a>
        </li>
		<li class="nav-item">
          <a href='login.php' class="nav-link" routerLinkActive="active" style="color: #ffffff;">
            Login
          </a>
        </li>
        <li class="nav-item">
          <a routerLink="/pharmacy" class="nav-link" routerLinkActive="active" style="color: #ffffff;">
            About Us
          </a>
        </li>
        <li class="nav-item">
          <a routerLink="/laboratory" class="nav-link" routerLinkActive="active" style="color: #ffffff;">
            Contact Us
          </a>
        </li>
      </ul>
    </div>
  </nav>
  </body>
  </html>
