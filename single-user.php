<?php
  include 'modules/header-login.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
            </div>
        </div>
        <!-- end header page section -->

         <!-- head member section -->
        <div class="nu-user-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="img-prof">
                            <img src="uploads/abdul.jpg" alt="abdul">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="caption">
                            <h3>
                                <span class="pull-right">
                                    <!-- muncul jika profil sendiri
                                    <a href="profile.php" class="btn btn-grape"><i class="fa fa-pencil"></i> Edit profile</a> -->

                                    <a href="profile.php" class="btn btn-pink"><i class="fa fa-heart"></i> Add to shortlist</a>
                                </span> 
                                Abdul Latuconsina <span class="online"><i class="fa fa-dot-circle-o"></i></span> <!-- span class "offline" -->
                            </h3>
                            <p>Bandung, Lajang</p>
                        </div>
                        <div class="des">
                            "CITA-CITA DUNIA : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa."
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end head member section -->

        <!-- main page section -->
        <div class="nu-main-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        
                        <div class="nu-mainbox">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#bio" role="tab" data-toggle="tab"><i class="fa fa-file-text-o"></i> Tentang</a></li>
                              <li role="presentation"><a href="#detail" role="tab" data-toggle="tab"><i class="fa fa-book"></i> Detail</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="bio">
                                  <div class="tab-box">
                                    <?php
                                      include 'modules/about.php';
                                    ?>
                                  </div>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="detail">
                                   <div class="tab-box">
                                    <?php
                                      include 'modules/detail.php';
                                    ?>
                                  </div>
                              </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="sidebox">
                            <h3>JDAku</h3>
                            <?php
                              include 'modules/news-slide.php';
                            ?>
                        </div>

                        <!-- alert -->
                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                          <h4>Oh snap! You got an info!</h4>
                          <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                          <p>
                            <a class="btn btn-info">Take this action</a>
                          </p>
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

