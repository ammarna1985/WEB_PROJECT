<?php
  include("config.php");
 ?>

<!DOCTYPE html>
<html>
    <head>

      <title>Student New</title>
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

         $sql="INSERT INTO student (fName, lName, tel, email, address, major, supervisor) value (:firstname, :lastname, :phone,:email,:address,:major,:supervisor)";
         $STH = $DBH->prepare($sql);



          $firstname=safe_input($_POST['firstname']);
          $lastname=safe_input($_POST['lastname']);
          $phone=safe_input($_POST['phone']);
          $email=safe_input($_POST['email']);
          $address=safe_input($_POST['address']);
          $major=safe_input($_POST['major']);
          $supervisor=safe_input($_POST['supervisor']);



          $STH->bindParam(':firstname',$firstname );
          $STH->bindParam(':lastname',$lastname );
          $STH->bindParam(':phone',$phone);
          $STH->bindParam(':email',$email );
          $STH->bindParam(':address',$address );
          $STH->bindParam(':major',$major );
          $STH->bindParam(':supervisor',$supervisor );



         try {
            $STH->execute();

            echo '<script language="javascript">';
            echo 'window.alert("New student is added. Student Number is: ' . $DBH->lastInsertId() .'")';
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
                    <h3><a href="student.php">Student</h3>
                </div>

                <ul class="list-unstyled components">
                    </li>
                    <li>
                        <a href="student_view.php">View</a>
                    </li>
                    <li>
                        <a href="student_new.php">New</a>
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

            <br>
            <br>
        <div class="container">
        <div class="jumbotron" style="margin-top:48px">
           <form action="./student_new.php" method="post" autocomplete="on">

           <h2 >Student</h2>
           <br>
               <div class="form-group">
                 <label>First Name</label>
                 <input type="text" class="form-control" name="firstname" required="required" >
               </div>

               <div class="form-group">
                 <label>Last Name</label>
                 <input type="text" class="form-control" name="lastname" required="required" >
               </div>

               <div class="form-group">
                 <label>Phone</label>
                 <input type="tel" class="form-control" name="phone" required="required" >
               </div>

               <div class="form-group">
                 <label>Email </label>
                 <input type="email" class="form-control" name="email"  required="required">
               </div>

               <div class="form-group">
                 <label>Address</label>
                 <input type="text" class="form-control" name="address" required="required" >
               </div>

               <div class="form-group">
                 <label>Major</label>
                 <input type="text" class="form-control" name="major" required="required" >
               </div>

               <div class="form-group">
                 <label>Supervisor</label>
                 <input type="text" class="form-control" name="supervisor" required="required" >
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
