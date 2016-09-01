<?php
  include 'modules/header-login.php';
?>

    <!-- main Section -->
    <div class="nu-main-wrapper">

        <!-- header page section -->
        <div class="nu-main-header">
            <div class="container">
                <h1 class="animated fadeInLeft">Question List</h1>
            </div>
        </div>
        <!-- end header page section -->

        <!-- main page section -->
        <div class="nu-main-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p>
                            <strong>Ada orang yang berjumpa jodohnya dan menikah, namun hanya bertahan beberapa lama saja di dunia kemudian bercerai. </strong>
                        </p>
                        <p class="text-justify mar-20">
                            Seperti yang sudah diprasastikan oleh Al-Quran, tentang kisah Abu Lahab dan Ummu Jamil, istrinya. Berjodoh dunia akhirat namun di akhirat dimurkai-Nya di neraka. Tentu saja, hal ini pun bukan yang kita inginkan kan?
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
                              include 'modules/question-list.php';
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

