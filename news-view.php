<?php
session_start();
$id = $_SESSION[ 'admin_id' ];
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

        <!-- Page Container START -->
        <div class="page-container">
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="container-fluid">
              <!-- Breadcrumb Start -->
              <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                  <h4 class="page-title">View News</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                  <ol class="breadcrumb float-right">
                    <li><a href="news-view.php">News</a></li>
                    <li class="active"> / View News</li>
                  </ol>
                </div>
              </div>
              <!-- Breadcrumb End -->
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">List of news on online shopping scams</h4>
                    </div>
                    <div class="card-body">
                      <h4 class="mt-0 box-title"></h4>
                      <p class="text-muted m-b-20 box-content"></p>
                      <div class="table-responsive">
                        <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                              <th scope="row">#</th>
                              <th>Date</th>
                              <th>Author</th>
                              <th>Title</th>
                              <th>Link</th>
                              <th colspan="2">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
					    include 'backend/dbcon.php';
					    $sql = "select * from newss ORDER BY news_date desc";

					    $result = mysqli_query($conn,$sql);

					    while ($row1 = mysqli_fetch_array($result)) {
				      ?>
                  <tr>
                  <th scope="row"><?php echo $row1['news_id']; ?></th>
                    <td><?php echo $row1['news_date']; ?></td>
                    <td><?php echo $row1['news_author']; ?></td>
                    <td><?php echo $row1['news_title']; ?></td>
                    <td><a href="<?php echo $row1['news_link']; ?>"><?php echo $row1['news_link']; ?></a></td>
					      <td><form method="post" action="news-update.php"><input type="hidden" name="byId" value="<?php echo $row1['news_id']; ?>"><button type="submit" class="btn btn-warning" name="saveByid">Update</button></form></td>
					      <td><form method="post" action="news-delete.php"><input type="hidden" name="deleteById" value="<?php echo $row1['news_id']; ?>"><button type="submit" class="btn btn-danger" name="saveByid">Delete</button></form></td>
                  </tr>
                  <?php }} ?>
                          </tbody>
                        </table>
                      </div>
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
  </body>
</html>