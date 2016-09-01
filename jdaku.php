<?php
  include 'modules/header.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">JDAku</h1>
            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body">
            <div class="container">
                <div class="row">

                     <!-- mainbar -->
                    <div class="col-md-8">
                      <div class="nu-mainbox">
                        <?php
                          include 'modules/blog-list.php';
                        ?>
                      </div>   
                    </div>

                    <!-- sidebar -->
                    <div class="col-md-4">
                        <div class="nu-sidebar">

                            <!-- side news -->
                            <div class="sidebox">
                                <h3>POPULER</h3>
                                <?php
                                  include 'modules/news-slide.php';
                                ?>
                            </div>

                            <!-- side kategori -->
                            <div class="sidebox">
                                <h3>KATEGORI</h3>
                                <div class="nu-widget-category">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Sport</a></li>
                                        <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Music</a></li>
                                        <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Politic</a></li>
                                        <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Art</a></li>
                                        <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Women</a></li>
                                        <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Education</a></li>
                                        <li><a href="#"><i class="fa fa-caret-square-o-right"></i> Romantic</a></li>
                                    </ul>
                                </div>
                            </div>


                             <!-- side tag -->
                            <div class="sidebox">
                                <h3>TAG</h3>
                                <div class="nu-widget-tag">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Sport</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Music</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Politic</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Art</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Women</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Education</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Romantic</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Drama</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Criminal</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Animals</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Balakutak</a></li>
                                    </ul>
                                </div>
                            </div>

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

