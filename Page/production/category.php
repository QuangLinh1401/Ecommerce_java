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
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category</small></h2>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="input-group-text btn btn-outline-info" id="inputGroup-sizing-default">Search</button>
                      </div>
                      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="./form_category.php"><button type="button" class="btn btn-outline-info">Add Category</button></a>
                      <button type="button" class="btn btn-outline-info sort-top">Sort</button>
                      <select id="sort-top" name="sort-top">
                        <option value="id">Id</option>
                        <option value="saab">Name</option>
                      </select>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Note</th>
                          <th>Main Category</th>
                          <th>Date create</th>
                          <th>Date update</th>
                          <th>Change</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th><input type="checkbox" id="check-all" class="jus"></th>
                          <td>1</td>
                          <td>Shad Decker</td>
                          <td>Appetizer was changed</td>
                          <td>Appetizer</td>
                          <td>26/09/2022</td>
                          <td>26/09/2022</td>
                          <td><button type="button" class="btn btn-outline-success">Change</button></td>
                          <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                        </tr>
                        <tr>
                          <th><input type="checkbox" id="check-all" ></th>
                          <td>2</td>
                          <td>BonBon</td>
                          <td>Main Course was changed</td>
                          <td>Main Course</td>
                          <td>26/09/2022</td>
                          <td>26/09/2022</td>
                          <td><button type="button" class="btn btn-outline-success">Change</button></td>
                          <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                        </tr>
                        <tr>
                          <th><input type="checkbox" id="check-all" ></th>
                          <td>3</td>
                          <td>Shad Decker</td>
                          <td>Desserts was changed</td>
                          <td>Desserts</td>
                          <td>26/09/2022</td>
                          <td>26/09/2022</td>
                          <td><button type="button" class="btn btn-outline-success">Change</button></td>
                          <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                        </tr>
                        <tr>
                          <th><input type="checkbox" id="check-all" ></th>
                          <td>4</td>
                          <td>Shad Decker</td>
                          <td>Drink was changed</td>
                          <td>Drink</td>
                          <td>26/09/2022</td>
                          <td>26/09/2022</td>
                          <td><button type="button" class="btn btn-outline-success">Change</button></td>
                          <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                        </tr>
                      </tbody>
                    </table>
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
