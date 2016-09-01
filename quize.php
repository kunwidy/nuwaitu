<?php
  include 'modules/header-login.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Quiz</h1>
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
                                        <a href="#" class="btn btn-info btn-lg open"><i class="fa fa-map-marker"></i> CLEANSING</a>
                                        <a href="#" class="btn btn-info btn-lg"><i class="fa fa-copyright"></i> UPGRADING</a>
                                        <a href="#" class="btn btn-info btn-lg"><i class="fa fa-user"></i> SELECTING</a>
                                    </div>
                                </div>
                                                                
                                <!-- progress bar -->
                                <div class="progress" id="progress1">
                                    <div class="progress-bar progress-bar-striped animated fadeInLeftBig" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">                
                                    </div>
                                    <span class="progress-type">Overall Progress</span>
                                    <span class="progress-completed">30%</span>
                                </div> 
                                <!-- end progress bar -->
                            </div>
                            <!-- end nuwaitu progress -->

                        <p>
                            <strong>Ada orang yang berjumpa jodohnya dan menikah, namun hanya bertahan beberapa lama saja di dunia kemudian bercerai. </strong>
                        </p>
                        <p class="text-justify mar-20">
                            Di Indonesia, angka perceraian mencapai <strong>20%</strong>, alias 1 dari 5 pernikahan berakhir perceraian. Bukan ini yang kita harapkan kan
                            Ada orang yang berjumpa jodohnya dan menikah, bertahan sampai kakek nenek, namun jika berbicara <strong>‘kualitas’</strong>, rasanya sangat tidak nyaman. 4 sisanya yang tidak bercerai, apakah semuanya bisa dipastikan <strong>harmonis?</strong> Belum tentu. Ada yang diwarnai perselingkuhan, perselisihan, perang dingin, ketidakpuasan, yang sebabkan ‘pernikahan sekedar bertahan demi anak’, ‘pernikahan sekedar memenuhi kewajiban’. Mungkin bertemu jodohnya di dunia, namun untuk bersama di akhirat, rasanya ‘berat’ untuk itu. Nah, tentu bukan hal ini juga yang kita harapkan kan?
                            Ada orang yang berjumpa jodohnya dan menikah, mereka harmonis dan kompak, namun kompak untuk melanggar apa yang sudah ditentukan olehNya. Seperti yang sudah diprasastikan oleh Al-Quran, tentang kisah Abu Lahab dan Ummu Jamil, istrinya. Berjodoh dunia akhirat namun di akhirat dimurkai-Nya di neraka. Tentu saja, hal ini pun bukan yang kita inginkan kan?
                            Tentu saja, yang kita harapkan adalah <strong>menikah dengan jodoh dunia akhirat</strong>, yang dimana bersama membangun rumah tangga surga, untuk dikumpulkan kelak di surga-Nya. Susah senang dijalani bersama, lapang sempit dijalani bersama, bahagia sedih selalu bersama, bersama dalam kebaikan.
                        </p>

                        <p class="lead">
                            Nah, jika ini yang Anda harapkan, maka mari kita menilai diri kita sendiri dulu, seberapa siapkah kita untuk mendapatkan jodoh dunia akhirat kita?
                        </p>


                        <!-- start quize -->
                        <div class="nu-form-head">
                             Tidak ada jawaban benar salah disini, gunakan untuk menilai sejujur-jujurnya diri Anda, <br> silakan pilih sesuai suara hati Anda saat ini juga ya :)
                        </div>

                        <div class="nu-form-box">
                            <?php
                              include 'modules/form-quize.php';
                            ?>
                        </div>
                        <!-- end start quize -->

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

