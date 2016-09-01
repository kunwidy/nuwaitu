<?php
  include 'modules/header.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Silahkan Mendaftar</h1>
            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body nu-login">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="login-des">
                            <img src="assets/img/log01.png" alt="nuwaitu">
                            <h3>
                                Menantimu dengan kerinduan. 
                                Menjemputmu dengan kekhusyukan. Menikahimu dengan keimanan. Itulah caraku 
                                memuliakanmu, <br> duhai pendamping impian
                            </h3>
                        </div>
                    </div>

                    <div class="col-md-5">
                       <div class="nu-panel">
                            <?php
                              include 'modules/form-signup.php';
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

