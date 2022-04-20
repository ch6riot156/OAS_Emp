<!DOCTYPE html>
<html lang="en">
<head>
        <?php include('navigations/header.php'); ?>
</head>
<body>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/chedLogo.png" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
  <?php include('navigations/topnavbar.php'); ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php include('navigations/sidebarnav.php'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Commission on Higher Education Regional Office V</h1>
            <h6 class="breadcrumb-item">Online Appointment System</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
         
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"><hr>
      <h4>Homepage | Dashboard</h4>  
      <br>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-outline card-warning">
            <div class="small-box">  
            <div class="inner">
                <h4>Current Appointment</h4>
                <h5>Total:<sup style="font-size: 13px"></sup> </h5>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="currentapp.php" class="small-box-footer bg-warning">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-outline card-success">
            <div class="small-box">
            <div class="inner">
                <h4>Appointment Finished this Day</h4>
                <h5>Total:<sup style="font-size: 13px"></sup> </h5>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="appfin.php" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-outline card-success">
            <div class="small-box">
            <div class="inner">
                <h4>Appointment Within this Week</h4>
                <h5>Total:<sup style="font-size: 13px"></sup> </h5>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="weekapp.php" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-outline card-dark">
            <div class="small-box">
            <div class="inner">
                <h4>Office Schedule</h4>
                <h5>Total:<sup style="font-size: 13px"></sup> </h5>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="officesched.php" class="small-box-footer bg-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-outline card-primary">
            <div class="small-box">
            <div class="inner">
                <h4>Survey</h4>
                <h5>Total:<sup style="font-size: 13px"></sup> </h5>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="survey.php" class="small-box-footer bg-info">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-outline card-primary">
            <div class="small-box">
            <div class="inner">
                <h4>Message</h4>
                <h5>Total:<sup style="font-size: 13px"></sup> </h5>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="message.php" class="small-box-footer bg-info">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-outline card-primary">
            <div class="small-box">
            <div class="inner">
                <h4>Notification</h4>
                <h5>Total:<sup style="font-size: 13px"></sup> </h5>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="notif.php" class="small-box-footer bg-info">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-outline card-danger">
            <div class="small-box">
            <div class="inner">
                <h4>Cancelled Appointments</h4>
                <h5>Total:<sup style="font-size: 13px"></sup> </h5>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="cancelled.php" class="small-box-footer bg-danger">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
          
        </div>

  <div class="row">
        <div class="col-md-4">
         
          <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
              <div class="modal-content"> 
                <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-default">Details</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form method="POST">
                <div class="modal-body">
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>




</body>
</html>
