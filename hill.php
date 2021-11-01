<?php
include 'header.php';
?>
<!-- CONTENT =============================-->
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <br><br>
                <h1 class="text-center latestitems"> HILL CIPHER</h1>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="productbox">
                <div class="product-details text-left">
                    <p align="center"><b>Pengertian Hill Cipher</b><br></p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/hille.png" alt="" height="250" align="center">
                    </div>
                    <br><br><br><br><br><br><br>
                    <p align="justify">
                        Hill Cipher merupakan salah satu algoritma kriptografi kunci simetris yang memiliki beberapa kelebihan dalam enkripsi data. Untuk menghindari matrik kunci yang tidak invertible, matrik kunci dibangkitkan menggunakan koefisien binomial newton. Proses enkripsi dan deskripsi menggunakan kunci yang sama, plaintext dapat menggunakan media gambar atau text.<br>
                        Algoritma Hill Cipher menggunakan matriks berukuran m x m sebagai kunci untuk melakukan enkripsi dan dekripsi. Dasar teori matriks yang digunakan dalam Hill Cipher antara lain adalah perkalian antar matriks dan melakukan invers pada matriks. .<br>
                        Hill Cipher merupakan penerapan aritmatika modulo pada kriptografi. Teknik kriptografi ini menggunakan sebuah matriks persegi sebagai kunci yang digunakan untuk melakukan enkripsi dan dekripsi. .<br>
                        Hill Cipher diciptakan oleh Lester S. Hill pada tahun 1929 . Teknik kriptografi ini diciptakan dengan maksud untuk dapat menciptakan cipher (kode) yang tidak dapat dipecahkan menggunakan teknik analisis frekuensi. Hill Cipher tidak mengganti setiap abjad yang sama pada plaintext dengan abjad lainnya yang sama pada ciphertext karena menggunakan perkalian matriks pada dasar enkripsi dan dekripsinya. .<br>
                        Hill Cipher yang merupakan polyalphabetic cipher dapat dikategorikan sebagai block cipher karena teks yang akan diproses akan dibagi menjadi blokblok dengan ukuran tertentu. Setiap karakter dalam satu blok akan saling mempengaruhi karakter lainnya dalam proses enkripsi dan dekripsinya, sehingga karakter yang sama tidak dipetakan menjadi karakter yang sama pula. .<br>
                        Hill Cipher termasuk kepada algoritma kriptografi klasik yang sangat sulit dipecahkan oleh kriptanalis apabila dilakukan hanya dengan mengetahui berkas ciphertext saja. Namun, teknik ini dapat dipecahkan dengan cukup mudah apabila kriptanalis memiliki berkas ciphertext dan potongan berkas plaintext. Teknik kriptanalisis ini disebut known-plaintext attack . .<br>

                    </p>

                    <p align="justify">Proses Enkripsi Untuk membahas proses enkripsi dan dekripsi dipilih contoh plaintext “SERANG”.
                        Matrik kunci yang diperoleh dari koefisien binomial ukuran 3 x 3
                    </p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/a.jpg" alt="" height="100" align="center">
                    </div>
                    <p>Koresponden plaintext dengan tabel abjad</p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/b.jpg" alt="" height="100" align="center">
                    </div><br>
                    <p align="justify">Didapat bilangan desimal dalam Z26 untuk plainteks SERANG yaitu 19,5,18,1,14,7 sehingga diperoleh plainteks P = [19 5 18 1 14 7] .Karena matrik kunci berukuran 3×3 maka matriks plainteks yang diambil adalah P = [19 5 15], matriks P di transpose menjadi</p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/c.jpg" alt="" height="100" align="center">
                    </div>
                    <p>Kemudian matriks kunci dikalikan dengan matriks P yang sudah ditranspose</p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/d.jpg" alt="" height="100" align="center">
                    </div><br>
                    <p>C = (C t )t = [16 21 10], <br>korespondensikan matrik C dengan tabel abjad dengan “PUJ”, dengan cara yang sama untuk plainteks P = [1 14 7] , diperoleh cipherteks C = (C t )t = [22 10 12] dan dikorespondenkan diperoleh “VJL” , sehingga cipherteks dari plainteks “SERANG” adalah “PUJVJL” Proses Dekripsi Cipherteks yang sudah diperoleh akan di dekripsi sehingga akan menjadi kata yang mempunyai makna.
                        Cipherteks “PUJVJL” dikoresponden dengan tabel abjad menjadi</p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/e.jpg" alt="" height="100" align="center">
                    </div><br>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/f.jpg" alt="" height="200" align="center">
                    </div><br><br><br><br>
                    <p>Dengan cara yang sama dengan mengambil C = [22 10 12] diperoleh matriks P = (Pt )t = [1 14 7] dengan mengabungkan kedua plainteks maka nilai P = [19 5 18 1 14 7]
                        dan jika dikorespondesikan dengan tabel abjad menjadi “SERANG” sama dengan plainteks awal.</p>

                    <br>

                </div>

            </div>
</section>
<?php
include 'footer.php';
?>