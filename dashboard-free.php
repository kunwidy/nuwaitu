<?php
  include 'modules/header-login.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Dashboard</h1>

            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body">

            <div class="container">
                <div class="row">

                    <!-- mainbar -->
                    <div class="col-md-8">  
                        <!-- member -->
                        <div class="nu-mainbox">
                            
                            <!-- start nuwaitu progress -->
                            <div class="nu-stats">

                                <div class="the-stats">
                                    <div class="btn-group btn-group-justified btn-breadcrumb">
                                        <a href="#" class="btn btn-info btn-lg"><i class="fa fa-map-marker"></i> CLEANSING</a>
                                        <a href="#" class="btn btn-info btn-lg"><i class="fa fa-copyright"></i> UPGRADING</a>
                                        <a href="#" class="btn btn-info btn-lg active"><i class="fa fa-user"></i> SELECTING</a>
                                    </div>
                                </div>
                                                                
                                <!-- progress bar -->
                                <div class="progress" id="progress1">
                                    <div class="progress-bar progress-bar-striped animated fadeInLeftBig" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">                
                                    </div>
                                    <span class="progress-type">Overall Progress</span>
                                    <span class="progress-completed">90%</span>
                                </div> 
                                <!-- end progress bar -->
                            </div>
                            <!-- end nuwaitu progress -->

                            <div class="nu-midcta">
                              <p><strong>Ugrade Membership</strong> Untuk mendapatkan fitur Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat.</p>
                              <a href="nu-plus.php" class="btn btn-block btn-lg btn-pink"><i class="fa fa-flask"></i> Ugrade Membership</a>
                            </div>

                        </div>
                    </div>
                    <!-- end mainbar -->

                    <!-- sidebar -->
                    <div class="col-md-4">
                        <div class="nu-sidebar">

                          <!-- alert -->
                          <div class="alert alert-danger alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h4>Oh snap! You got an alert!</h4>
                            <p>Change this and that and try again. Duis mollis, est non commodo luctus.</p>
                            <p>
                              <a class="btn btn-danger">Take this action</a>
                            </p>
                          </div>

                            <!-- side news -->
                            <div class="sidebox">
                                <h3>JDAku</h3>
                                <?php
                                  include 'modules/news-slide.php';
                                ?>
                            </div>

                            
                        </div>
                    </div>
                    <!-- end sidebar -->
                

                </div>
            </div>
        </div>
        <!-- end main page section -->

    </div>
    <!-- end main Section -->


<?php
  include 'modules/footer.php';
?>

