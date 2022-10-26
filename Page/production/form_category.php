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
        <!-- page content -->
        <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Category</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Category</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="" action="" method="post" novalidate>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">id</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" data-validate-length-range="6" data-validate-words="2" name="id" placeholder="1" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="name" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Note<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="note" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Date Create<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="date_create" type="date" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Date Update<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="date_update" type="date" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Main Category<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="dropdown">
                                                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Main Category
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <a class="dropdown-item" href="">Appetizer</a>
                                                      <a class="dropdown-item" href="">Main Course</a>
                                                      <a class="dropdown-item" href="">Dessrts</a>
                                                      <a class="dropdown-item" href="">Drink</a>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="form-group aaaa">
                                            <div class="col-md-6 offset-md-3">
                                                <button type='submit' class="btn btn-primary">Submit</button>
                                                <a href="./Category.php"><button type="button" class="btn btn-outline-info">Undo</button></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
        <!-- /page content -->
      </div>
    </div>
    <!-- footer content -->
    <?php include "./general/footer.php"; ?>
    <!-- /footer content -->
    </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

	
  </body>
</html>