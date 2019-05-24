<?php
  include("config.php");
 ?>

<!DOCTYPE html>
<html>
    <head>

      <title>Course New</title>
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

                }
       </style>
    </head>
    <body>
      <?php
        include("menu.php");
       ?>

       <?php
       if (isset($_POST['submit']))
       {

         $sql="INSERT INTO course (name, description) value (:name, :description)";
         $STH = $DBH->prepare($sql);



          $name=safe_input($_POST['name']);
          $description=safe_input($_POST['description']);



          $STH->bindParam(':name',$name );
          $STH->bindParam(':description',$description);




         try {
            $STH->execute();

            echo '<script language="javascript">';
            echo 'window.alert("New Course is added. Course number is: ' . $DBH->lastInsertId() .'")';
            #echo 'document.getElementById("form").reset()';
            echo '</script>';

         } catch (\Exception $e) {
           echo '<p class="text-danger">' ?> <?php echo $e->getMessage().'</p>';
         }


       }

       ?>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><a href="course.php">Course</h3>
                </div>

                <ul class="list-unstyled components">
                    </li>
                    <li>
                        <a href="course_view.php">View</a>
                    </li>
                    <li>
                        <a href="course_new.php">New</a>
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
        <div class="jumbotron" style="margin-top:48px">
           <form action=" " method="post" autocomplete="on">

           <h2 >Course</h2>
           <br>

               <div class="form-group">
                 <label>Name</label>
                 <input type="text" class="form-control" name="name" required="required" >
               </div>


               <div class="form-group">
                 <label>Description</label>
                 <input type="text" class="form-control" name="description" required="required" >
               </div>


               <div class="form-group">
                   <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                   <button type="reset" name="reset" value="Submit" class="btn btn-primary"> Reset</button>
               </div>
               </div>


           </form>

       </div>
       </div>
             <br><br>

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
