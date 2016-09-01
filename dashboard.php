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
                                        <a href="#" class="btn btn-info btn-lg open"><i class="fa fa-user"></i> SELECTING</a>
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

                            <!-- Profile page -->
                            <div class="nu-prof-ces">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- das profile -->
                                        <?php
                                          include 'modules/dashboard-profile.php';
                                        ?>
                                    </div>
                                    <div class="col-md-4 nu-status">
                                        <h3>.: INFO :.</h3>
                                        <div class="nu-info">
                                            <p>Abdul dan Arafah sedang menjalani proses Ta'aruf yang dimulai pada :</p>
                                            <p class="taaruf-date">
                                                <span><i class="fa fa-calendar"></i></span> 01 September 2016 <span>s/d</span> 30 September 2016</p>
                                            <p>Catatan: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <!-- das profile -->
                                        <?php
                                          include 'modules/dashboard-profile2.php';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end Profile page -->

                            <!-- show another choice -->
                            
                                <div id="idshortlist2" class="collapse">
                                    <?php
                                      include 'modules/dashboard-shortlist.php';
                                    ?>
                                </div>
                            
                            <!-- end show another choice -->

                            <div class="nu-midcta">
                              <p><strong>Lengkapi</strong> Untuk mendapatkan Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat.</p>

                              <div class="row">
                                  <div class="col-md-6">
                                      <a href="checklist.php" class="btn btn-block btn-lg btn-pink"><i class="fa fa-check-square-o"></i> checklist</a>
                                  </div>
                                  <div class="col-md-6">
                                      <a href="question-list.php" class="btn btn-block btn-lg btn-grape"><i class="fa fa-list-alt"></i> Question list</a>
                                  </div>
                              </div>
                            </div>

                        </div>
                    </div>
                    <!-- end mainbar -->

                    <!-- sidebar -->
                    <div class="col-md-4">
                        <div class="nu-sidebar">

                        <!-- alert -->
                              <div class="alert alert-info alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4>Alert!</h4>
                                <p><a href="#">Anisa</a> mengajak anda ta'aruf</p>
                                <p>
                                  <a class="btn btn-info btn-xs">Periksa</a>
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

