<?php
session_start();
$id = $_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CFOS - Admin</title>

    <!-- bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets-admin/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets-admin/fonts/line-icons.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets-admin/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets-admin/css/responsive.css">

  </head>

  <body>
    <div class="app header-default side-nav-dark">
      <div class="layout">
        <!-- Header START -->
        <?php include 'template/header-admin.html';?>
        <!-- Header END -->

        <!-- Side Nav START -->
        <?php include 'template/sidenav-admin.html';?>
        <!-- Side Nav END -->

        <?php
        include 'backend/dbcon.php';
        $sql = "select * from admins where admin_id=$id";

        $result = mysqli_query( $conn, $sql );

        while ( $row1 = mysqli_fetch_array( $result ) ) {
        ?>
        <?php echo $row1['admin_name'] ?>
        <?php ?>

        <!-- Page Container START -->
        <div class="page-container">
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="container-fluid">
              <!-- Breadcrumb Start -->
              <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                  <h4 class="page-title">Edit Profile</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                  <ol class="breadcrumb float-right">
                    <li><a href="profile-view.php">Profile</a></li>
                    <li class="active"> / Edit Profile</li>
                  </ol>
                </div>
              </div>
              <!-- Breadcrumb End -->
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">User Profile Form</h4>
                    </div>
                    <div class="card-body">
                      <p class="card-description">
                        Enter all details
                      </p>
                      <form class="forms-sample" method="post" action="profile-engine.php">
                        <div class="form-group row">
                          <label for="name" class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" id="name" value="<?php echo $row1['admin_name']; ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="email" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" id="email" value="<?php echo $row1['admin_email']; ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="mobile" class="col-sm-3 col-form-label">Mobile</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $row1['admin_mobile']; ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="password" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                          <input type="password" class="form-control" name="password" id="password" value="<?php echo $row1['admin_password']; ?>">
                          </div>
                        </div>
                        <div class="custom-control custom-checkbox m-b-20">
                          <!-- <input type="checkbox" class="custom-control-input" id="password_toggle" onclick="togglePasswordVisibility()" value="check">
                          <label class="custom-control-label" for="password_toggle">Show password</label> -->
                        </div>
                        <button type="submit" class="btn btn-warning" name="save">Update</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Wrapper END -->

          <!-- Footer START -->
          <?php include 'template/footer-admin.html';?>
          <!-- Footer END -->

        </div>
        <!-- Page Container END -->
      </div>
    </div>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

     <!-- jQuery first, then Popper.js, then bootstrap JS -->
    <script src="assets-admin/js/jquery-min.js"></script>
    <script src="assets-admin/js/popper.min.js"></script>
    <script src="assets-admin/js/bootstrap.min.js"></script>
    <script src="assets-admin/js/jquery.app.js"></script>
    <script src="assets-admin/js/main.js"></script>
    <script src="../assets/js/editprofile.js"></script>
  </body>
</html>