<?php
  include 'modules/header-login.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Checklist</h1>
            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="text-justify mar-20">
                            <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt</strong> ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, <em>sunt in culpa qui officia deserunt mollit anim id est laborum</em>.
                        </p>

                        <!-- start quize -->
                        <div class="nu-form-head">
                             Tidak ada jawaban benar salah disini, gunakan untuk menilai sejujur-jujurnya diri Anda, <br> silakan pilih sesuai suara hati Anda saat ini juga ya :)
                        </div>
                        <div class="nu-form-box">
                            <?php
                              include 'modules/form-checklist.php';
                            ?>
                        </div>
                         <!-- end quize -->

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

