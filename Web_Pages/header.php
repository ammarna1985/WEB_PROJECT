<!DOCTYPE html>
<html>
  <head>
      <title>Main Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <style>
          .carousel-inner > .item > img,
          .carousel-inner > .item > a > img {
           width: 100%;
           margin: auto;
          }

          .bg-4 {
            background-color: #2f2f2f;
            color: #ffffff;
          }
      </style>
  </head>

  <body>
     <div class="container-fluid">
          <nav class="navbar navbar-inverse">
              <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="logo.png" alt="LOGO" style="height:60px"></a>
              </div>
              <ul class="nav navbar-nav">
                  <li ><a href="index.php">HOME</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">ABOUT SBU</a></li>
                      <li><a href="#">HISTORY</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DEPARTMENTS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">ART</a></li>
                      <li><a href="#">COMPUTER</a></li>
                      <li><a href="#">ENGINEERING</a></li>
                      <li><a href="#">MEDICINE</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">CONTACT US</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
          </nav>
        </div>
