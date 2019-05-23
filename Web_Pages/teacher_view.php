<?php
  include("config.php");
 ?>

<!DOCTYPE html>
<html>
    <head>

      <title>Teachers View</title>
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="./css/style5.css">
      <?php
        include("head.php");
       ?>
         <!-- Bootstrap CSS CDN -->


        <style>
            body {
              background-color:gray;
              color:darkblue;
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
                    <h3><a href="teacher.php">Teachers</a></h3>
                </div>

                <ul class="list-unstyled components">
                    </li>
                    <li>
                        <a href="teacher_view.php">View</a>
                    </li>
                    <li>
                        <a href="teacher_new.php">New</a>
                    </li>
                    <li>
                        <a href="teacher_edit.php">Edit</a>
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
              <h2 style="margin-top:100px">Teachers</h2>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Teacher ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Field</th>
                </tr>
                </thead>


              <?php
                      $STH = $DBH->query('SELECT * FROM teacher');
                      # setting the fetch mode
                      $STH->setFetchMode(PDO::FETCH_ASSOC);

                      while($row = $STH->fetch()) {
              ?>

              <tbody>


                <tr>
                  <td><?php echo $row['teacherID'];?></td>
                  <td><?php echo $row['fName'];?></td>
                  <td><?php echo $row['lName'];?></td>
                  <td><?php echo $row['tel'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['address'];?></td>
                  <td><?php echo $row['field'];?></td>
                </tr>

                </tbody>

                <?php
                    }
                ?>
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
