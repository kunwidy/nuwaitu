<?php
  include 'modules/header.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Quiz Result</h1>
            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nu-points">
                                    <h3>NILAI :</h3>
                                    <div class="thepoint">
                                        100
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="nu-point-vid">
                                  <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KzMei0dZemA" frameborder="0" allowfullscreen></iframe>
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-pink btn-block"><i class="fa fa-cube"></i> Daftar Basic</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-grape btn-block"><i class="fa fa-cubes"></i> Daftar Premium</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pricing table -->
                <div class="nu-price-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="price-title">LOREM IPSUM DOLOR SIT AMET</h2>

                            <?php
                              include 'modules/price-table.php';
                            ?>

                        </div>
                    </div>
                </div>
                <!-- end pricing table -->

            </div>
        </div>
        <!-- end main page section -->

    </div>
    <!-- end main Section -->


<?php
  include 'modules/footer.php';
?>

