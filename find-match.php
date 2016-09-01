<?php
  include 'modules/header-login.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Cari jodoh pilihanmu</h1>
            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body">
                    
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

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

                        <!-- search form -->
                        <div class="nu-search-box">
                            <?php
                              include 'modules/form-find-match.php';
                            ?> 
                        </div>
                         <!-- end search form -->

                         <!-- nu shortlist -->
                        <div class="nu-shortlist">
                            <?php
                              include 'modules/find-match-shortlist.php';
                            ?>
                        </div>
                        <!-- end nu shortlist -->

                         <div class="row">

                            <!-- search result -->
                            <div class="col-md-12">
                                <div class="nu-alert">
                                    Hasil pencarian menampilkan 100 akhwat daerah Bandung usia 17 - 50 tahun
                                </div>
                                <!-- search list -->
                                <div>
                                    <?php
                                      include 'modules/list-user.php';
                                    ?> 

                                    <div class="text-center">
                                         <a href="#" class="btn btn-grape"><i class="fa fa-arrow-circle-o-down"></i> tampilkan lebih banyak</a>
                                    </div>
                                   
                                </div>
                                <!-- end search list -->
                            </div>
                            <!-- end search result -->
       
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

