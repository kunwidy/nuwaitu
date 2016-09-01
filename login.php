<?php
  include 'modules/header.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Assalamualaikum</h1>
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
                              include 'modules/form-login.php';
                            ?>
                        </div>
                        <div class="text-right">
                            <p><a href="#" data-toggle="modal" data-target="#nu-reset-pwd">Lupa password?</a></p>
                            <p>Belum jadi anggota? <a href="signup.php">daftar disini</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end main page section -->

    </div>
    <!-- end main Section -->


    <!-- Modal Reset password-->
    <div class="modal fade" id="nu-reset-pwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Reset password</h4>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form" id="reset-form">
              <div class="form-group">
                <label for="">Masukan Email Anda</label>
                <input type="email" class="form-control input-lg" id="" name="email">
                <span class="help-block">Periksa email Anda, dan silahkan atur ulang password Anda</span>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-grape" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-pink">Reset password</button>
          </div>
        </div>
      </div>
    </div>


<?php
  include 'modules/footer.php';
?>

