<?php
    session_start();
  
    if (!isset($_SESSION['admin_id'])) {
      // Redirect to the login page
      header('Location: signin.php');
      exit;
  }

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

        <!-- Page Container START -->
        <div class="page-container">
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="container-fluid">
              <!-- Breadcrumb Start -->
              <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                  <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                  <ol class="breadcrumb float-right">
                    <li><a href="admin.php">Dashboard</a></li>
                    <li class="active">/ CFOS Dashboard</li>
                  </ol>
                </div>
              </div>
              <!-- Breadcrumb End -->
            </div>

            <div class="container-fluid">
              <!-- Title Count Start -->
              <div class="card-group">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                          <div>
                             <p class="text-muted">CFOS Dashboard</p>
                             <iframe title="CFOS" width="960" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZDQ4Y2I2ZWQtYmE0ZS00MGFhLTk0ZmMtZDQ0NTY5OWJkZDgxIiwidCI6ImNkY2JiMGUyLTlmZWEtNGY1NC04NjcwLTY3MjcwNzc5N2FkYSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Title Count End -->
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

  </body>
</html>