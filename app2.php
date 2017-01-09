<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text.php; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  IVE (Tsing Yi)</title>

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

  <body class="nav-md" >
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="app2.php" class="site_title"><img src="images/logo.png">  </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Smith</h2>
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
                    <img src="images/user.png" alt="">John Smith
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
		    <!--
                    <span id="notification" class="badge bg-green">2</span>
		    -->
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
		    <!--
		     <li>
		       <a>
			 <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
			 <span>
			   <span>John Smith</span>
			   <span class="time">3 mins ago</span>
			 </span>
			 <span class="message">
			   Seat unstable at ty123
			 </span>
		       </a>
		     </li>

		     <li>
		       <a>
			 <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
			 <span>
			   <span>John Smith</span>
			   <span class="time">1 mins ago</span>
			 </span>
			 <span class="message">
			   Seat unstable at ty123
			 </span>
		       </a>
		     </li>
		    -->
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div   class="right_col" role="main">
          <div id="ns-form" class="">
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
                    <h2 id="hideFormVal">Request Submission </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="flight-no">Flight No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="flight-no" required="required" class="form-control col-md-7 col-xs-12" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Details <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

			  <div id="alerts"></div>
			  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
			    <div class="btn-group">
			      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
			      <ul class="dropdown-menu">
			      </ul>
			    </div>

			    <div class="btn-group">
			      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
			      <ul class="dropdown-menu">
				<li>
				  <a data-edit="fontSize 5">
				    <p style="font-size:17px">Huge</p>
				  </a>
				</li>
				<li>
				  <a data-edit="fontSize 3">
				    <p style="font-size:14px">Normal</p>
				  </a>
				</li>
				<li>
				  <a data-edit="fontSize 1">
				    <p style="font-size:11px">Small</p>
				  </a>
				</li>
			      </ul>
			    </div>

			    <div class="btn-group">
			      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
			      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
			      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
			      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
			    </div>

			    <div class="btn-group">
			      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
			      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
			      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
			      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
			    </div>

			    <div class="btn-group">
			      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
			      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
			      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
			      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
			    </div>

			    <div class="btn-group">
			      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
			      <div class="dropdown-menu input-append">
				<input class="span2" placeholder="URL" type="text" data-edit="createLink" />
				<button class="btn" type="button">Add</button>
			      </div>
			      <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
			    </div>
<!--
			    <div class="btn-group">
			      <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
			      <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
			    </div>
-->
			    <div class="btn-group">
			      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
			      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
			    </div>
			  </div>


			  <div id="editor" class="editor-wrapper"></div>

			  <textarea name="descr" id="descr" style="display:none;"></textarea>

			  <br />

			</div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <a  class="btn btn-success" id="submit" > Submit</a>

                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
	  <!-- response -->
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
                    <h2>Request Submitted  <small></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

		    <div  class="alert alert-warning">
		      <h2 id="blink" > <i class="fa fa-warning"></i> Your request is submitted !</h2>


		      Work card number is 123456.  <br>
		      Your request will handle shortly. <br>
		    </div>

		    <div>
		      <a class="btn btn-success" href="app2.php" class="alert-link">Back</a>
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
            <img src="images/logo.png"> 
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


      <!-- bootstrap-wysiwyg -->
      <script>
		  $(document).ready(function () {
			function initToolbarBootstrapBindings() {
			  var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
				'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
				'Times New Roman', 'Verdana'
			  ],
					  fontTarget = $('[title=Font]').siblings('.dropdown-menu');
			  $.each(fonts, function (idx, fontName) {
				fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
			  });

			  $('a[title]').tooltip({
				container: 'body'
			  });

			  $('.dropdown-menu input').click(function () {
				return false;
			  })
					  .change(function () {
						$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
					  })
					  .keydown('esc', function () {
						this.value = '';
						$(this).change();
					  });

			  $('[data-role=magic-overlay]').each(function () {
				var overlay = $(this),
						target = $(overlay.data('target'));
				overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
			  });

			  if ("onwebkitspeechchange" in document.createElement("input")) {
				var editorOffset = $('#editor').offset();

				$('.voiceBtn').css('position', 'absolute').offset({
				  top: editorOffset.top,
				  left: editorOffset.left + $('#editor').innerWidth() - 35
				});
			  } else {
				$('.voiceBtn').hide();
			  }
			}

			function showErrorAlert(reason, detail) {
			  var msg = '';
			  if (reason === 'unsupported-file-type') {
				msg = "Unsupported format " + detail;
			  } else {
				console.log("error uploading file", reason, detail);
			  }
			  $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
					  '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
			}

			initToolbarBootstrapBindings();

			$('#editor').wysiwyg({
			  fileUploadError: showErrorAlert
			});
			/*
						 $("#flight-no").val("JAL1234");
						 $('#editor').html("The defect is that the passenger seat 2C was found loosen. \n\
						 Please help to check the aircraft maintenance manual about aircraft equipment.")
						 .css("font-size", "200%");
						 */
			window.prettyPrint;
			prettyPrint();
			$("#ns-response").hide();

		  });
      </script>
      <!-- /bootstrap-wysiwyg -->


      <script>
		  $(document).ready(function () {

			$("#submit").click(function () {

			  $("#ns-form").hide();
			  $("#ns-response").show();
			  $('#blink').each(function () {
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

			$("#flight-no").click(function () {
			  $("#flight-no").val("ty123");
			  $('#editor').html("The defect is that the passenger seat 2C was found loosen. \n\
			Please help to check the aircraft maintenance manual about aircraft equipment.")
					  .css("font-size", "200%");
			});


			$("#hideFormVal").click(function () {
			  $("#flight-no").val("");
			  $('#editor').html("");

			});


		  });
      </script>






  </body>
</html>
