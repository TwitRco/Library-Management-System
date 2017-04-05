<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Fateha </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
          <div class="col-md-3 left_col" style="">
            <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span> Dashboard </span></a>
              </div>

              <div class="clearfix"></div>

              <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <!-- <img src="" alt="..." class="img-circle profile_img"> -->
                </div>
                <?php if($_COOKIE["status"] == "logged_in"){ ?>
                <div class="profile_info">

                  <span>Welcome,</span>
                  <h2> <?php echo $_COOKIE["lastname"]; ?></h2>
                </div>
              </div>
              <?php } ?>
              <!-- /menu profile quick info -->

              <br />

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">

                  <ul class="nav side-menu">
                    <li>
                        <a href="projects.php">About Us</a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /sidebar menu -->

              <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top"  href="#">

                </a>
              </div>
              <!-- /menu footer buttons -->
            </div>
          </div>

          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">

            </div>
          </div>
          <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <!-- <input type="text" class="form-control" placeholder="Search for..."> -->

                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>User Report <small>Activity report</small></h2> -->

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/profile/fateha.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Israt Jahan Fateha</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Dahaka, Bangladesh
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Studying Bsc. in CSE
                        </li>

                        <!-- <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul> -->

                      
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <!-- <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li> -->
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>

                        <li>
                          <p>Competitive Programming</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="20"></div>
                          </div>
                        </li>


                        <li>
                          <p>Graphics Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>

                        <li>
                          <p>C & C++</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>

                        <li>
                          <p>HTML & CSS & JAVA </p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                          </div>
                        </li>

                        <li>
                          <p>PHP & MySql</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                          </div>
                        </li>

                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">




                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>

                                <div class="message_wrapper">
                                  <h4 class="heading">Project on Library Management</h4>
                                  <ul>
                                    <li>Landing</li>
                                    <li>Help</li>
                                    <li>View Book</li>
                                    <li>Navigation</li>
                                    <li>Members' Pages</li>
                                    <li>Form Making</li>
                                  </ul>
                                  <br />


                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>

                                  </p>
                                </div>
                              </li>

                                  </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Project Name</th>
                                  <!-- <th>Client Company</th> -->
                                  <th class="hidden-phone">Days Spent</th>
                                  <th>Contribution</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Food Order Management System</td>
                                  <!-- <td>Deveint Inc</td> -->
                                  <td class="hidden-phone">2</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="15"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>The Lost King (Game)</td>
                                  <!-- <td>Deveint Inc</td> -->
                                  <td class="hidden-phone">60</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-danger" data-transitiongoal="20"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Tic Tac Toe Game</td>
                                  <!-- <td>Deveint Inc</td> -->
                                  <td class="hidden-phone">15</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="10"></div>
                                    </div>
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">



                                <!-- <h5><b>Facebook: </b><a href="https://www.facebook.com/isratjahan.fateha">https://www.facebook.com/isratjahan.fateha</a> </h5>
                                <h5><b>Twitter: </b><a href="https://twitter.com/FatehaJahan?lang=en">https://twitter.com/FatehaJahan?lang=en</a></h5>

                                <h5><b>Github: </b><a href="https://github.com/Fateha9106">https://github.com/Fateha9106</a></h5>
                                <h5><b>Education:</b>Studies BSc. in Computer Science and Engineering at Daffodil International University</h5>
                                <h5><b>Hobby: </b>Listening music, Browsing, playing games, reading books, chatting with only few friends</h5>
                              </address> -->
                              <table style="width:100%">

                                <tr>
                                  <td><h5><b>Address: </b></h5></td>
                                  <td><h5>Dhaka, Bangladesh</h5></td>

                                </tr>
                                <tr>
                                  <td><h5><b>Education:</b></h5></td>
                                  <td>BSC in Computer Science & Engineerin</td>
                                </tr>
                                <!-- <tr>
                                  <td><h5><b>Email: </b> </h5></td>
                                  <td><h5><a href="fateha9106@gmail.com">fateha9106@gmail.com</a> </h5></td>

                                </tr> -->
                                <tr>
                                  <td><h5><b>Hobby: </b></h5></td>
                                  <td><h5>Listening music, Browsing, playing games, reading books, chatting with only few friends</h5></td>
                                </tr>
                                <!-- <tr>
                                  <td><h5><b>Facebook: </b> </h5></td>
                                  <td><h5><a href="https://www.facebook.com/isratjahan.fateha">https://www.facebook.com/isratjahan.fateha</a> </h5></td>
                                </tr> -->
                              </table>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>

                              <a href="fateha9106@gmail.com">
                                <img src="images/profile/em.png" alt="Email" style="width:30px;height:30px;border:0">
                              </a>
                              <a href="https://www.facebook.com/isratjahan.fateha">
                                <img src="images/profile/febu.png" alt="Facebook" style="width:30px;height:30px;border:0">
                              </a>
                              <a href="https://twitter.com/FatehaJahan?lang=en">
                                <img src="images/profile/tw.png" alt="Twitter" style="width:30px;height:30px;border:0">
                              </a>
                              <a href="https://github.com/Fateha9106">
                                <img src="images/profile/git.png" alt="Github" style="width:30px;height:30px;border:0">
                              </a>


                          </div>
                        </div>
                      </div>
                    </div>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
