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

            <!-- dashboard profile -->
            <div class="nu-profile-das">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- das profile -->
                            <?php
                              include 'modules/dashboard-profile.php';
                            ?>
                        </div>
                        <div class="col-md-8">
                             <!-- das shortlist -->
                             <?php
                              include 'modules/dashboard-shortlist.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- dashboard profile -->

            <div class="container">
                <div class="row">

                    <!-- mainbar -->
                    <div class="col-md-8">  
                        <!-- member -->
                        <div class="nu-mainbox">
                            <h2><i class="fa fa-smile-o"></i> 500 Member telah bergabung</h2>
                            <?php
                              include 'modules/dashboard-car.php';
                            ?>
                            <a class="btn btn-grape btn-lg btn-block" href="find-match.php"><i class="fa fa-heart"></i> Temukan Pilihanmu</a>
                        </div>


                        <!-- member activity -->
                        <div class="nu-mainbox">
                            <h2><i class="fa fa-comment-o"></i> Member activity</h2>
                           
                            <ul class="nu-act-list">
                                <li>
                                    <div class="img img75">
                                        <img src="uploads/user1.png" alt="user name">
                                    </div>
                                    <div class="text">
                                        <p class="time"><i class="fa fa-clock-o"></i> 2 menit lalu</p>
                                        <p><a href="#">Maesaroh</a> baru saja memilih <a href="#">Maesaroh</a> di shortlist</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="img img75">
                                        <img src="uploads/user2.png" alt="user name">
                                    </div>
                                    <div class="text">
                                        <p class="time"><i class="fa fa-clock-o"></i> 3 minggu lalu</p>
                                        <p><a href="#">Zubaedah</a> baru saja memilih <a href="#">Maesaroh</a> di shortlist</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="img img75">
                                        <img src="uploads/user3.png" alt="user name">
                                    </div>
                                    <div class="text">
                                        <p class="time"><i class="fa fa-clock-o"></i> 2 bulan lalu</p>
                                        <p><a href="#">Abdul Ganteng</a> baru saja memilih <a href="#">Maesaroh</a> di shortlist</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="img img75">
                                        <img src="uploads/user4.png" alt="user name">
                                    </div>
                                    <div class="text">
                                        <p class="time"><i class="fa fa-clock-o"></i> 3 bulan lalu</p>
                                        <p><a href="#">Anisa</a> baru saja memilih <a href="#">Maesaroh</a> di shortlist</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>
                            </ul>

                            <p class="text-center next">
                                <a class="btn btn-grape btn-xs" href="#"><i class="fa fa-arrow-circle-o-down"></i> Tampilkan lebih banyak</a>
                            </p>  
                        </div>


                    </div>
                    <!-- end mainbar -->

                    <!-- sidebar -->
                    <div class="col-md-4">
                        <div class="nu-sidebar">

                            <!-- side news -->
                            <div class="sidebox">
                                <h3>JDAku</h3>
                                <?php
                                  include 'modules/news-slide.php';
                                ?>
                            </div>

                            <!-- alert -->
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                              <h4>Oh snap! You got an alert!</h4>
                              <p>Change this and that and try again. Duis mollis, est non commodo luctus.</p>
                              <p>
                                <a class="btn btn-danger">Take this action</a>
                              </p>
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

                            <!-- alert -->
                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                              <h4>Oh snap! You got an info!</h4>
                              <p>Change this and that and try again. Duis mollis, est non commodo luctus. Cras mattis consectetur purus sit amet.</p>
                              <p>
                                <a class="btn btn-success">Take this action</a>
                              </p>
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

