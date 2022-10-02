<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include "./general/meta.php"; ?>
    
    <title>BonBon!</title>
    
    <?php include "./general/link_css.php"; ?>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <?php include "./general/sidebar.php"; ?>

        <!-- top navigation -->
        <?php include "./general/top_nav.php"; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>
        
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view size-avatar" src="./images/font-face.jpg" width="120" height="120" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Quang Linh</h3>
        
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Vinh Phu - Thuan An - Binh Duong
                        </li>
                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Student
                        </li>
                      </ul>

                      <a href="./edit_account.php"><button type="button" class="btn btn-outline-info"><i class="fa fa-edit m-right-xs"></i>Edit Profile</button></a>
                      <br/>
        
                    </div>
                    <div class="col-md-9 col-sm-9 ">
                      <!-- start of user-activity-graph -->
                      <!-- end of user-activity-graph -->
        
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active">
                            <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" style="color: rgb(0, 129, 41);font-weight: 500;">
                              Profile
                            </a>
                          </li>
                          <li role="presentation" class="">
                            <a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" style="color: rgb(0, 129, 41);font-weight: 500;">
                              Power
                            </a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
        
                            <!-- start recent activity -->
                            <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                <label class="col-md-4"><span class="bb">First Name</span>: <span>Linh</span></label>
                                <label class="col-md-4"><span class="bb">Last Name</span>: <span>Quang</span></label>
                                <label class="col-md-4"><span class="bb">Gender</span>: <span>Male</span></label>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4"><span class="bb">Occupation</span>: <span>Student</span></label>
                                <label class="col-md-4"><span class="bb">Number phone</span>: <span>094344159</span></label>
                                <label class="col-md-4"><span class="bb">Date</span>: <span>14/01/2001</span></label>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4"><span class="bb">Power</span>: <span>Admin</span></label>
                                <label class="col-md-4"><span class="bb">Status</span>: <span>Active</span></label>
                                <label class="col-md-4"><span class="bb">Home Town</span>: <span>Gia Lai</span></label>
                              </div>
                              <div class="form-group">
                                <label class="col-md-6"><span class="bb">Email</span>: <span>quanglinh140101@gmail.com</span></label>
                                <label class="col-md-6"><span class="bb">Password</span>: <span>Quanglinh@140101</span></label>
                              </div>
                              <div class="form-group">
                                <label class="col-md-12"><span class="bb">Address</span>: <span>Thuan an - Binh Duong</span></label>
                              </div>
                            </div>
                            <!-- end recent activity -->
        
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <h1>Your powers:</h1>
                            <ul>
                              <li>Category Management</li>
                              <li>Interface Management</li>
                              <li>Product Handling</li>
                              <li>Order Tracking</li>
                              <li>Administrators</li>
                            </ul>
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

      </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include "./general/footer.php"; ?>
        <!-- /footer content -->
    </div>

    <?php include "./general/link_js.php"; ?>
	
  </body>
</html>
