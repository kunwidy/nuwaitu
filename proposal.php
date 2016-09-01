<?php
  include 'modules/header-login.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Proposal</h1>
            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- nuwaitu progress alert -->
                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            
                            <!-- start nuwaitu progress -->
                            <div class="step">
                                <div id="div1" class="nu-steps" onclick="javascript: resetActive(event, 11.5);">
                                    <span class="fa fa-heart"></span>
                                    <p>Register</p>
                                </div>
                                <div class="nu-steps" onclick="javascript: resetActive(event, 25);">
                                    <span class="fa fa-pencil"></span>
                                    <p>Quiz</p>
                                </div>
                                <div class="nu-steps active" onclick="javascript: resetActive(event, 45);">
                                    <span class="fa fa-book"></span>
                                    <p>Proposal</p>
                                </div>
                                <div class="nu-steps" onclick="javascript: resetActive(event, 55);">
                                    <span class="fa fa-eye"></span>
                                    <p>Cari jodoh</p>
                                </div>
                                <div class="nu-steps" onclick="javascript: resetActive(event, 80);">
                                    <span class="fa fa-comments-o"></span>
                                    <p>Ta'aruf</p>
                                </div>
                                <div class="nu-steps" onclick="javascript: resetActive(event, 85);">
                                    <span class="fa fa-check-square-o"></span>
                                    <p>Checklist</p>
                                </div>
                                <div id="last" class="nu-steps" onclick="javascript: resetActive(event, 100);">
                                    <span class="fa fa-check-circle-o"></span>
                                    <p>Question list</p>
                                </div>

                                <!-- progress bar -->
                                <div class="progress" id="progress1">
                                    <div class="progress-bar progress-bar-striped animated fadeInLeftBig" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 39%;">                
                                    </div>
                                    <span class="progress-type">Progress</span>
                                    <span class="progress-completed">45%</span>
                                </div> 
                                <!-- end progress bar -->
                            </div>
                            <!-- end nuwaitu progress -->

                        </div>
                        <!-- end nuwaitu progress alert -->
                        
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
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      include 'modules/form-proposal.php';
                                    ?> 
                                </div>
                            </div>  
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

