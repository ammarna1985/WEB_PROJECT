<?php
  include("config.php");
 ?>

<!DOCTYPE html>
<html>
  <head>
      <title>Second-Edition</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <style>
       .carousel-inner > .item > img,
       .carousel-inner > .item > a > img {
         width: 100%;
         margin: auto;
       }
      </style>
  </head>

  <body>
     <div class="container-fluid">
          <nav class="navbar navbar-inverse">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Final Project</a>
              </div>
              <ul class="nav navbar-nav">
                  <li ><a href="#">Home</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1-1</a></li>
                      <li><a href="#">Page 1-2</a></li>
                      <li><a href="#">Page 1-3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Teachers <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1-1</a></li>
                      <li><a href="#">Page 1-2</a></li>
                      <li><a href="#">Page 1-3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1-1</a></li>
                      <li><a href="#">Page 1-2</a></li>
                      <li><a href="#">Page 1-3</a></li>
                    </ul>
                  </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
          </nav>
        </div>
          <!--Slider-->
          <div id="myCarousel" class="carousel slide " data-ride="carousel" style="height:400px;">
          <ol class="carousel-indicators">
               <?php

                       $STH = $DBH->query('SELECT * FROM slider');
                       # setting the fetch mode
                       $STH->setFetchMode(PDO::FETCH_ASSOC);
                       $counter=0;

                       while($row = $STH->fetch()) {
                  ?>
                          <li data-target="#myCarousel" data-slide-to="<?php echo $counter; ?>" <?php if($counter==0) {echo 'class="active"';} ?> ></li>

                  <?php
                          $counter=$counter + 1;
                      }
                  ?>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                       <?php
                           $STH = $DBH->query('SELECT * FROM slider');
                           # setting the fetch mode
                           $STH->setFetchMode(PDO::FETCH_ASSOC);
                           $counter=0;

                           while($row = $STH->fetch()) {
                          ?>
                              <div <?php if($counter==0) {echo 'class="item active"';} else {echo 'class="item"';}?>>
                                <a href="<?php echo $row['Link_Address']; ?>">
                                  <img src="<?php echo $row['Image']; ?>"  style="height:400px;">
                                </a>
                                <div class="carousel-caption">
                                  <h3><?php echo $row['Header_Text']; ?></h3>
                                  <p><?php echo $row['Description_Text']; ?></p>
                                </div>
                              </div>
                      <?php
                          $counter=$counter + 1;
                          }
                      ?>

                  </div>
                  <!-- Wrapper for slides -->





                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>

</div>

  <br><br><br>
<div class="container">
 <div class="row">
   <?php

              $STH = $DBH->query('SELECT * FROM thumbnail');
              # setting the fetch mode
              $STH->setFetchMode(PDO::FETCH_ASSOC);
              while($row = $STH->fetch()) {
       ?>
                 <div class="col-sm-6 col-md-4 col-lg-3" >
                   <div class="thumbnail">
                     <a href="<?php echo $row['Link_Address']; ?>">
                       <img src="<?php echo $row['Image']; ?>" style="width:150; height:175px;"/>
                     </a>
                     <div class="caption">
             					<h1><?php echo $row['Header_Text']; ?></h1>
             					<p><?php echo $row['Description_Text']; ?></p>
             				</div>
                   </div>
                 </div>
           <?php
               }
         ?>
 </div>
</div>



<hr>
<div class="container-fluid">
		<footer>
				<div class="jumbotron">
					<p class="pull-right"><a href="#">Back to top</a></p>
					<p>&copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
				</div>
		</footer>

</div>


    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>

    <script src="../../assets/js/vendor/holder.min.js"></script>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
