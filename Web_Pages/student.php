<?php
  include("config.php");
 ?>

<!DOCTYPE html>
<html>
    <head>

      <title>Student</title>
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
                        <h3>Students</h3>
                    </div>

                    <ul class="list-unstyled components">
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
        <div class="row clearfix">
		          <div class="col-md-12 column">
                   <h2>Student</h2>
          			<table class="table table-bordered table-hover" id="tab_logic">
          				    <thead>
          					         <tr >
                      						<th class="text-center">
                      							#
                      						</th>
                      						<th class="text-center">
                      							Student No.
                      						</th>
                      						<th class="text-center">
                      						Name
                      						</th>
                      						<th class="text-center">
                      							Phone
                      						</th>
                                  <th class="text-center">
                      						Email
                      						</th>
                                  <th class="text-center">
                      							Address
                      						</th>
          					          </tr>
          				      </thead>

          				          <tbody>
                          					<tr id='addr0'>
                            						<td>
                            						     1
                            						</td>
                            						<td>
                            						    <input type="text" name='StNo'  placeholder='Student No.' class="form-control"/>
                            						</td>
                            						<td>
                            						    <input type="text" name='Nam' placeholder='Name' class="form-control"/>
                            						</td>
                            						<td>
                            						    <input type="text" name='Pho' placeholder='Phone' class="form-control"/>
                            						</td>
                                        <td>
                            					    	<input type="text" name='Ema' placeholder='Email' class="form-control"/>
                            						</td>
                                        <td>
                            					    	<input type="text" name='Add' placeholder='Address' class="form-control"/>
                            						</td>
                          					</tr>

                                    <tr id='addr1'></tr>
                				  </tbody>
			           </table>
	        	   </div>
            </div>
	             <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
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

         <script type="text/javascript">
            $(document).ready(function(){
            var i=1;
            $("#add_row").click(function(){
            $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='StNo"+i+"' type='text' placeholder='Student No.' class='form-control input-md'/> </td><td><input  name='Nam"+i+"' type='text' placeholder='Name'  class='form-control input-md'></td><td><input  name='Pho"+i+"' type='text' placeholder='Phone'  class='form-control input-md'></td><td><input  name='Ema"+i+"' type='text' placeholder='Email' class='form-control input-md'></td> <td><input  name='Add"+i+"' type='text' placeholder='Address'  class='form-control input-md'></td>");

            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++;
            });
            $("#delete_row").click(function(){
            if(i>1){
            $("#addr"+(i-1)).html('');
            i--;
            }
            });

            });
         </script>

    </body>
</html>
