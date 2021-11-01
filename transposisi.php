<!-- CONTENT =============================-->
<?php
include 'header.php';
?>
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <br><br>
                <h1 class="text-center latestitems"> TRANSPOSITION CIPHER</h1>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="productbox">
                <div class="product-details text-left">
                    <p align="center"><b>Pengertian Transposition Cipher</b><br></p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/tr.jpg" alt="" height="250" align="center">
                    </div>
                    <br><br><br><br><br><br><br>
                    <p align="justify">
                        Cipher transposisi adalah salah satu jenis teknik pengenkripsian pesan dengan cara mengubah urutan hurufhuruf yang ada di dalam plainteks (pesan yang belum dienkripsi) menjadi cipherteks (pesan yang telah dienkripsi)
                        dengan cara tertentu agar isi dari pesan tersebut tidak dimengerti kecuali oleh orang-orang tertentu.
                        Pada dasarnya prinsip pengubahan pesan mirip dengan anagram seperti kata “melepas” diubah menjadi
                        “saeelpm”, tapi tentu saja transposition cipher mempunyai rumus atau kunci tertentu yang diperlukan agar pesan
                        bisa dimengerti.<br>
                        Pada cipher transposisi, huruf-huruf di dalam plainteks tetap saja, hanya saja urutannya diubah. Dengan kata
                        lain algoritma ini melakukan transpose terhadap rangkaian karakter di dalam teks. Nama lain untuk metode ini
                        adalah permutasi atau pengacakan (scrambling) karena transpose setiap karakter di dalam teks sama dengan
                        mempermutasikan karakter-karakater tersebut.<br><br>
                        Pada cipher ini huruf-huruf plaintext dipermutasi.
                        <br>Sebagai contoh, huruf-huruf plaintext A T T A C K A T D
                        A W N dapat dipermutasi menjadi D C K A A W N A T A T T. <br>Cipher transposisi kolumnar adalah cipher dimana
                        plaintext ditulis secara horizontal pada kertas dan dibaca secara vertikal. Cipher transposisi dapat diserang melalui
                        analisis frekuensi, namun cipher menyembunyikan properti statistik dari pasangan huruf-huruf
                    </p>

                    <p align="justify">Pada chiper transposisi, plainteks tetap sama, tetapi urutannya diubah. Dengan kata lain, algoritma ini melakukan transpose terhadap rangkaian karakter di dalam teks. Nama lain untuk metode ini adalah permutasi, karena transpose setiap karakter di dalam teks sama dengan mempermutasikan karakter-karakter tersebut.
                        <br>Beberapa contoh cipher transposisi, antara lain :
                        <br><br>
                        <b> a. Simple Columnar Transposition (SCTR)</b>
                        <br>
                        Simple Columnar Transposition (SCTR) dibuat sekitar tahun 1940-an. Pada waktu itu SCTR digunakan oleh Sekutu untuk menandingi alat kriptografi buatan Jerman enigma untuk menjaga kerahasiaan pesan yang dikirimkan pada Perang Dunia II.
                        <br>
                        Metode enkripsi SCTR adalah cukup sederhana, yaitu dengan membagi plainteks menjadi blok-blok dengan panjang kunci (k) tertentu yang kemudian blok-blok tersebut disusun dalam bentuk baris dan kolom. Terdapat dua metode yang digunakan apabila panjang plainteks (n) tidak habis dibagi oleh kunci (k). Pertama adalah irregular case, yaitu melakukan enkripsi tanpa merubah plainteks dan yang kedua adalah regular case yaitu melakukan enkripsi setelah menambahkan karakter-karakter dummy (pad) sebanyak d dengan 0<d<n sehingga panjang plainteks habis dibagi kunci. Dan hasil enkripsinya adalah dengan membaca secara vertikal (tiap kolom) sesuai urutan kolom. <br>
                            Contoh
                            <br>
                            Misalkan plainteks = AKUCINTAKAMU
                            <br>
                            Enkripsi dengan kunci = 5:
                    </p>
                    <div class="fadeshop">
                        <img src="assets/images/transpos.jpg" alt="" height="100" align="center">
                    </div>

                    <p align="justify">
                        <br>Cipherteks : <b>ANMKTUUACKIA</b>
                        <br>Contoh
                        <br>Misalkan plainteks = <b>AKUCINTAKAMU</b>
                        <br>Enkripsi dengan kunci = 5

                    </p>
                    <div class="fadeshop">
                        <img src="assets/images/sctr.png" alt="" height="150" align="center">
                    </div>
                    <br><br><br>
                    <p>Cipherteks : <b>ANMKTUUAXCKXIAX</b></p>
                    <p align="justify">
                        <br><b>b. Rail Fence Cipher</b>

                        <br>Algoritma ini melibatkan penulisan plainteks sehingga mempunyai baris atas dan baris bawah yang terpisah. Urutan karakter pada baris atas akan diikuti oleh karakter berikutnya pada baris bawahnya, dan seterusnya hingga n-rail. Apabila penulisan kebawah sudah mencapai n, maka penulisan dilakukan kebaris atasnya. Bila penulisan keatas jugasu dah mencapai n-rail, maka penulisan dilakukan seperti awal.Kemudian hasil cipherteks dibaca secara horizontal.

                        <br>Contoh
                        <br>Plainteks : <b>AKUCINTAKAMU</b>
                        <br>Enkripsi dengan kunci k = 3, offset = 0


                        <br>Cipherteks = <b>AIKKCNAAUUTM</b>

                        <br>Contoh
                        <br>Plainteks : <b>AKUCINTAKAMU</b>
                        <br>Enkripsi dengan kunci k = 3, offset = 3


                        <br>Cipherteks = <b>KNAAUITKMCAU</b>
                        <br>
                        <br><b>c. Route Cipher</b>

                        <br>Dalam algoritma route cipher, plainteks dituliskan ke dalam suatu dimensi yang sudah ditentukan (baris dan kolom), kemudian pembacaannya sesuai dengan pola yang diberikan pada kunci.

                        <br>Contoh
                        <br>Plainteks : <b>AKUCINTAKAMU</b>
                        <br>Enkripsi dengan kunci kolom = 4, spiral kedalam, negatif (searah jarum jam) kanan-atas.



                        <br>Cipherteks = <b>CAUMAKIAKUTN</b>
                    </p>
                </div>
            </div>

        </div>
</section>
<?php
include 'footer.php';
?>