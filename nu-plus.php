<?php
  include 'modules/header.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">NU+</h1>
            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body nu-login">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="nu-plus-des">
                            <h3>Mendapatkan Jodoh Dunia Akhirat dalam 99 hari?</h3>
                            <div>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KzMei0dZemA" frameborder="0" allowfullscreen></iframe>
                                  </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                       <div class="nu-panel">
                            <?php
                              include 'modules/form-login.php';
                            ?>
                        </div>
                        <div class="text-right">
                            <p>Sudah jadi anggota? <a href="login.php">Masuk disini</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end main page section -->

    </div>
    <!-- end main Section -->


<?php
  include 'modules/footer.php';
?>

