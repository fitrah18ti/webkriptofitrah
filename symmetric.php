<!-- CONTENT =============================-->
<?php
include 'header.php';
?>
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <br><br>
                <h1 class="text-center latestitems"> Symmetric Cryptography</h1>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="productbox">
                <div class="product-details text-left">
                    <p align="center"><b>Symmetric Cryptography</b><br></p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/sim.jpg" alt="" height="250" align="center">
                    </div>
                    <br><br><br><br><br><br>
                    <p align="justify">
                        Jenis symmetric key cryptography disebut juga dengan kunci rahasia, yang berarti penerima dan
                        pengirim informasi hanya menggunakan satu kunci untuk melakukan enkripsi data. Jenis kriptografi
                        yang digunakan menggunakan AES (Advanced Encryption System). Pendekatan yang dilakukan oleh symmetric
                        key dianggap lebih efisien daripada menggunakan metode yang lainnya. </p>

                    <p align="justify">Pada sistem symmetric, kunci yang digunakan untuk encrypt dan decrypt adalah sama,
                        sehingga user yang saling berkomunikasi menggunakan sistem symmetric harus saling berkirim kunci yang
                        sama karena jika mereka tidak menggunakan kunci yang sama maka pesan tidak dapat terbuka di sisi penerima.
                        Jika terdapat seseorang yang berada di tengah2 proses kirim terima kunci dan berhasil mendapatkan kunci
                        tersebut maka maka semua pesan dapat terbuka. Berbeda dengan sistem asymmetric, user hanya perlu mengirimkan
                        kunci publik supaya orang lain dapat berkomunikasi dengan dirinya. User tidak perlu takut penyerang dapat
                        merekonstruksi private key dari kunci publik yang didapatkannya.
                        <br>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/simetri.png" alt="" height="250" align="center">
                    </div><br><br><br><br><br><br><br>
                    Kompleksitas pendistribusian kunci pada symmetric lebih tinggi dibandingkan dengan asymmetric. Setiap satu
                    kunci pada symmetric digunakan oleh dua user atau satu grup untuk berkomunikasi. Saya ilustrasikan sebagai
                    berikut, ketika user A akan berkomunikasi dengan user B mereka menggunakan kunci X dan ketika user A
                    berkomunikasi dengan user C mereka akan menggunakan kunci Y. Maka ketika user B,C,D akan mengirimkan pesan
                    ke user A, user A akan menggunakan 3 buah kunci yang berbeda untuk membuka pesan yang diterima. Berbeda
                    dengan sistem asymmetric, user B,C,D cukup menggunakan kunci publik A untuk mengirimkan pesan dan A cukup
                    menggunakan kunci private nya untuk membuka pesan tersebut.
                    Akan tetapi, sistem symmetric lebih cepat dalam komputasi dan ciphertext yang dihasilkan lebih sedikit sehingga tidak membebani bandwith pada saat proses pengiriman pesan. Biasanya symmetric dan asymmetric sering digunakan bersamaan pada suatu sistem. Sebagai contoh pada sistem video conference Agievic, asymmetric digunakan untuk pendistribusian kunci symmetric, kunci symmetric ini digunakan untuk untuk mengenkripsi komunikasi video conference.<br>

                </div>
            </div>

        </div>
</section>
<?php
include 'footer.php';
?>