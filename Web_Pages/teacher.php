<?php
  include("config.php");
 ?>

<!DOCTYPE html>
<html>
    <head>

      <title>teacher</title>
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="./css/style5.css">
      <?php
        include("head.php");
       ?>
         <!-- Bootstrap CSS CDN -->


        <style>
                body {
                    background: url(./Images/student_student.jpg) no-repeat center center fixed;
                    background-size: cover;
                    color:white;
                }
       </style>
    </head>
    <body>
      <?php
        include("menu.php");
       ?>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Teacher</h3>
                </div>

                <ul class="list-unstyled components">
                    </li>
                    <li>
                        <a href="#">View</a>
                    </li>
                    <li>
                        <a href="#">New</a>
                    </li>
                    <li>
                        <a href="#">Edit</a>
                    </li>
                </ul>


            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container">
              <h2 style="margin-top:100px">Teacher</h2>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>StudentNo</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>2222222</td>
                    <td>john@example.com</td>
                    <td>cabendish</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>2222222</td>
                    <td>john@example.com</td>
                    <td>cabendish</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>2222222</td>
                    <td>john@example.com</td>
                    <td>cabendish</td>
                  </tr>
                </tbody>
              </table>
            </div>

        </div>



        <?php
          include("footer.php");
          include("jscript.php");
         ?>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>

    </body>
</html>
