<!DOCTYPE html>
<html>
  <head>
      <title>Second-Edition</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <style>
       .carousel-inner > .item > img,
       .carousel-inner > .item > a > img {
         width: 70%;
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
<br>
 <div id="myCarousel" class="carousel slide " data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="./Images/student.jpg" alt="Students" width="460" height="345">
        <div class="carousel-caption">
          <h3>Students</h3>
          <p>description</p>
        </div>
      </div>

      <div class="item">
        <img src="./Images/teacher.jpg" alt="Teachers" width="460" height="345">
        <div class="carousel-caption">
          <h3>Teachers</h3>
          <p>description.</p>
        </div>
      </div>

      <div class="item">
        <img src="./Images/course.jpg" alt="Courses" width="460" height="345">
        <div class="carousel-caption">
          <h3>courses</h3>
          <p>Description.</p>
        </div>
      </div>
    </div>

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
</div>

  <br><br><br>
<div class="container">
 <div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail">
			<a href="https://www.vaniercollege.qc.ca/">
				<img src="./Images/student1.jpg"/>
			</a>
				<div class="caption">
					<h1>Students</h1>
					<p>Description </p>
					<button class="btn btn-success">More</button>
				</div>
		</div>
     </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail">
			<a href="https://www.vaniercollege.qc.ca/">
			<img src="./Images/teacher1.jpg"/>
			</a>
				<div class="caption">
					<h1>Teachers</h1>
					<p>Description</p>
					<button class="btn btn-success">More</button>
				</div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail">
			<a href="https://www.vaniercollege.qc.ca/">
				<img src="./Images/course1.jpg"/>
			</a>
				<div class="caption">
					<h1>Courses</h1>
					<p>Description </p>
					<button class="btn btn-success">More</button>
				</div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail">
			<a href="https://www.vaniercollege.qc.ca/">
				<img src="./Images/news.jpg"/>
			</a>
				<div class="caption">
					<h1>Latest news</h1>
					<p>Description </p>
					<button class="btn btn-success">More</button>
				</div>
        </div>
    </div>
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
