<?php
include 'header.php';
?>
<!-- CONTENT =============================-->
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <br><br>
                <h1 class="text-center latestitems"> AFFINE CIPHER</h1>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="productbox">
                <div class="product-details text-left">
                    <p align="center"><b>Pengertian Affine Cipher</b><br></p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/penemuafi.jpg" alt="" height="250" align="center">
                    </div>
                    <br><br><br><br><br><br><br>
                    <p align="justify">
                        Affine cipher adalah perluasan dari metode Caesar cipher yang menggunakan teknik substitusi yang menggunakan fungsi liniear ap+b untuk enkripsi teks asli p dan a-1c-b untuk dekripsi teks sandi c pada Z26. Kunci pada sandi Affine adalah 2 integer yaitu a dan b. Nilai a yang dapat dipakai adalah anggota elemen pada Z26 yang memiliki invers yaitu yang memenuhi gcd(a,26) = 1. <br>
                        Proses Enkripsi Affine Cipher adalah sebagai berikut. Affine cipher merupakan sandi yang bekerja secara subtitusi. Pada affine cipher terdapat abjad sejumlah m, yang yaitu rentang m-1, maksudnya adalah awal abjad yaitu huruf “A” bernilai 0, huruf kedua “B” bernilai 1, dan seterusnya hingga huruf terakhir dalam abjad yaitu huruf “Z” bernilai 25 . <br>
                        Adapun rumus enkripsi dengan menggunakan affine cipher pada satu huruf plaintext menjadi satu huruf ciphertext adalah sebagai berikut:
                        <br><b>E(x) = (ax + b) mod m</b>
                        <br>Dimana m adalah ukuran abjad, ini berarti modulus m adalah modulus dari ukuran abjad, sedangkan jumlah abjad dalam rentang affine cipher adalah 25, maka modulus m adalah modulus 25. Sedangkan a adalah bilangan yang harus dipilih secara bebas, namun memiliki syarat haruslah coprime dengan nilai m, artinya harus memiliki nilai faktor yang positif.
                        <br>Proses Dekripsi Affine Cipher adalah sebagai berikut. Fungsi dekripsi affine cipher adalah:
                        <br><b>D(x) = a-1(x-b) mod m</b>
                        <br> a-1 adalah invers perkalian a modulus m. Yaitu, memenuhi persamaan: 1 = aa-1 mod m. Invers perkalian a hanya ada jika a dan m adalah coprime. Jika tidak maka proses algoritma akan terhenti

                    </p>

                    <p align="justify">Affine cipher adalah jenis cipher substitusi monoalphabetic, dimana setiap huruf dalam
                        alfabet yang dipetakan ke numerik dan kemudian dienkripsi menggunakan fungsi matematika
                        sederhana. Affin cipher termasuk cipher substitusi penyandian yang lemah.
                        Dalam affine cipher, alphabet dipetakan ke bilangan bulat mulai dari 0 .. 25 = A..Z.
                        Kemudian menggunakan aritmatika modular untuk mengubah integer setiap
                        alphabet pada plaintext sesuai dengan integer yang lain disesuaikan dengan alphabet
                        pada ciphertext. Hal ini dapat dilakukan hanya dengan mengenkripsikan dan mendekripsikan
                        pesan tersebut.
                        Kelemahan affin chipper, karena affine cipher masih merupakan cipher substitusi
                        monoalphabetic, dimana ditemukan kelemahan dari kelas cipher.
                        Affin chiper dapat dijelaskan dengan contoh dimana mengenkripsi dan mendekripsi,
                        alfabet akan menjadi huruf A sampai Z, dan akan memiliki nilai yang sesuai yang ditemukan
                        pada tabel di bawah ini
                    </p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/afin.jpg" alt="" height="150" align="center">
                    </div><br><br>
                    <p align="justify">
                        Proses menyandikan plaintext menjadi ciphertext disebut enkripsi. Plaintext yang akan
                        dienkripsi adalah "PAGI" menggunakan tabel yang disebutkan di atas untuk nilai numerik dari
                        setiap huruf, P=15, A=0, G=6, dan I=8. Affine Cipher memiliki syarat Greatest Common
                        Divisor (GCD) harus 1, gcd(a,n)=1. Nilai a memiliki batasan sampai 26. Sedangkan n adalah
                        jumlah huruf alphabet yaitu 26 (dua puluh enam).Nilai yang mungkin bahwa bisa adalah 1, 3,
                        5, 7, 9, 11, 15, 17, 19, 21, 23, dan 25. Nilai untuk k bisa sembarangan sepanjang tidak sama
                        dengan 1 karena ini adalah pergeseran cipher. Untuk rumusan enkripsi affin cipher dapat
                        diuraikan sebagai berikut:
                        <br><b>Ci=((a x Pi) +k) mod 26</b>
                        <br>di mana :
                        <br>Ci = Cipher Text
                        <br>a, k = kunci
                        <br>Pi = Plain Text
                        <br><br>Affine Cipher memiliki syarat Greatest Common Divisor (GCD) harus 1, gcd(a,n)=1.
                        Sehingga dengan menggunakan rumusan enkripsi Ci=((a x Pi) +k) mod 26 dan
                        Gcd(5,26) dan kunci=(5,15) untuk contoh pesan “PAGI” adalah: .

                    </p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/pagi.jpg" alt="" height="350" align="center">
                    </div><br><br><br><br><br><br><br><br><br><br>
                    <p>Sehingga hasil mengenkripsi pesan tersebut adalah dapat diperlihatkan dalam tabel di bawah
                        ini dengan memetakan numerik kedalam alphabet.</p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/pagi1.jpg" alt="" height="200" align="center">
                    </div><br><br><br><br><br>
                </div>
            </div>

        </div>
</section>
<?php
include 'footer.php';
?>