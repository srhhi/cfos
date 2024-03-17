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
        <?php echo $row1['admin_name'] ?>

        <!-- Page Container START -->
        <div class="page-container">
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="container-fluid">
              <!-- Breadcrumb Start -->
              <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                  <h4 class="page-title">Edit News</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                  <ol class="breadcrumb float-right">
                    <li><a href="admin.php">News</a></li>
                    <li class="active"> / Edit news</li>
                  </ol>
                </div>
              </div>
              <!-- Breadcrumb End -->
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-10 col-md-12 col-xs-12">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">News on Online Shopping</h4>
                    </div>
                    <div class="card-body">
                      <p class="card-description">
                        Online shopping tactics and scams
                      </p>
                      <?php 
	  	$id = $_POST['byId'];
		include 'backend/dbcon.php';
				
				$sql = "select * from newss where news_id=$id";
	
				$result = mysqli_query($conn,$sql);
					
				while ($row1 = mysqli_fetch_array($result)) {
			  ?>
                      <form class="forms-sample" method="post" action="news-engine.php">
                        <div class="form-group row">
                          <label for="newsDate" class="col-sm-2 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" id="newsDate" value="<?php echo $row1['news_date']; ?>" name="newsDate">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="author" class="col-sm-2 col-form-label">Author</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="author" value="<?php echo $row1['news_author']; ?>" name="author">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="title" class="col-sm-2 col-form-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" value="<?php echo $row1['news_title']; ?>" name="title">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="link" class="col-sm-2 col-form-label">Link</label>
                          <div class="col-sm-9">
                            <input type="url" class="form-control" id="link" value="<?php echo $row1['news_link']; ?>" name="link">
                          </div>
                        </div>
                        <input type="hidden" name="byId" value="<?php echo $id ?>">
                        <button type="submit" class="btn btn-warning" name="save">Update</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                      <?php }} ?>
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