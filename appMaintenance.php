<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text.php; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Air TY</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <!--
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    -->
    <!-- iCheck -->
    <!--

    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    -->
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

    <!-- Select2 -->
    <!--

<link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    -->
    <!-- Switchery -->
    <!--
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    -->
    <!-- starrr -->
    <!--

    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
    -->
    <!-- bootstrap-daterangepicker -->
    <!--
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    -->
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="appMaintenance.php" class="site_title">

                   
                      <span>Air TY</span>
                       
             </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Leo</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

	    <?php include 'inc/sideMenu.php'?>
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Leo 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>

                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span id="notification" class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li id="ns-notify">
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>Leo</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
			  The defect is that the passenger seat 2C ...
                        </span>
                      </a>
                    </li>
		    <!--

					<li>
					  <div class="text-center">
					    <a>
					      <strong>See All Alerts</strong>
					      <i class="fa fa-angle-right"></i>
					    </a>
					  </div>
					</li>
		    -->
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div   class="right_col" role="main">

	  <div id="ns-received" class="">
            <div class="page-title">
              <div class="title_left">
		<h3 >Non-routine work card </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div   class="x_panel">
                  <div class="x_title">
                      <h2 class="ns-reset"> Request Received   </h2>  <br>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
		    <div id="blink" class="alert alert-info">
		      <h3>Work card number:  123456</h3>
		      <h4>Flight No: Ty123</h4>
		      <h4>
			The defect is that the passenger seat 2C was found loosen. Please help to check the aircraft maintenance manual about aircraft equipment.</h4>
		      <div class="checkbox">
			<label>
			  <input type="checkbox"  value=""> checked
			</label>
		      </div>

		    </div>
		    <div>
		      <a class="btn btn-success"  id="ns-submit" class="alert-link">Submit</a>
		    </div>
		  </div>
		</div>
	      </div>
	    </div>
	  </div>
            <!-- ns-response-->        
      <div id="ns-response" class="">
          <div class="page-title">
              <div class="title_left">
                  <h3>Non-routine work card </h3>
              </div>

              <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div   class="x_panel">
                      <div class="x_title">
                          <h2 class="ns-reset"> Request Received   </h2>  <br>

                          <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                          <br />

                          <div  class="alert alert-warning">
                              <h2 ><i class="fa fa-check"></i>  Non routine work card is completed. </h2>

                           
                          </div>
                          <div>
                              <a class="btn btn-success alert-link ns-reset" >Back</a>
                          </div>
 
                      </div>
                  </div>
              </div>
          </div>
          
          
      </div>        
            
            
	  <!-- /page content -->

	  <!-- footer content -->
	  <footer>
	    <div class="pull-right">
            <img id="logo" src="images/logo.png"> 
	    </div>
	    <div class="clearfix"></div>
	  </footer>
	  <!-- /footer content -->
	</div>
      </div>
      </div>    

      <!-- jQuery -->
      <script src="vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

      <!-- FastClick -->
      <!--
      <script src="vendors/fastclick/lib/fastclick.js"></script>
      -->
      <!-- NProgress -->
      <!--

      <script src="vendors/nprogress/nprogress.js"></script>
      -->

      <!-- bootstrap-progressbar -->
      <!--
      <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      -->

      <!-- iCheck -->
      <!--

      <script src="vendors/iCheck/icheck.min.js"></script>

      -->
      <!-- bootstrap-daterangepicker -->
      <!--

     <script src="vendors/moment/min/moment.min.js"></script>
      <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

      -->
      <!-- bootstrap-wysiwyg -->
      <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
      <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
      <script src="vendors/google-code-prettify/src/prettify.js"></script>
      <!-- jQuery Tags Input -->
      <!--

      <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
      -->
      <!-- Switchery -->
      <!--

     <script src="vendors/switchery/dist/switchery.min.js"></script>
      -->
      <!-- Select2 -->
      <!--

      <script src="vendors/select2/dist/js/select2.full.min.js"></script>
      -->
      <!-- Parsley -->
      <!--

      <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
      -->
      <!-- Autosize -->
      <!--

      <script src="vendors/autosize/dist/autosize.min.js"></script>
      -->
      <!-- jQuery autocomplete -->
      <!--

      <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
      -->
      <!-- starrr -->
      <!--
       <script src="vendors/starrr/dist/starrr.js"></script>
      -->
      <!-- Custom Theme Scripts -->
      <script src="build/js/custom.js"></script>



      <script>
		  $(document).ready(function () {
              $("#notification").hide();
            $("#logo").click(function(){  
                
                $("#notification").show().each(function () {
                  var elem = $(this);
                  setInterval(function () {
                    if (elem.css('visibility') == 'hidden') {
                      elem.css('visibility', 'visible');
                    } else {
                      elem.css('visibility', 'hidden');
                    }
                  }, 1000);
                });
            });
			$("#ns-received").hide();
            $("#ns-response").hide();

			$("#ns-notify").click(function () {
			  $("#ns-received").show();
			  $("#notification").hide();
			});
            
          $("#ns-submit").click(function(){
              $("#ns-received").hide();
              $("#ns-response").show();

          })

          $(".ns-reset").click(function(){
              $("#ns-received").hide();
              $("#ns-response").hide();
 

          })
          
          
		  });

      </script>




  </body>
</html>
