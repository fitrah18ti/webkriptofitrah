<?php
include 'header.php';
?>
<!-- CONTENT =============================-->
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <br><br>
                <h1 class="text-center latestitems"> CAESAR CIPHER</h1>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="productbox">
                <div class="product-details text-left">
                    <p align="center"><b>Pengertian Caesar Cipher</b><br></p>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/caesarr.jpg" alt="" height="250" align="center">
                    </div>
                    <br><br><br><br><br><br><br>
                    <p align="justify">
                        Nama Sandi Caesar diambil dari Julius Caesar, yang menurut buku Suetonius Kehidupan Duabelas Caesar,
                        menggunakan sandi ini dengan geseran tiga, untuk mengirim pesan yang mengandung rahasia atau taktik
                        militer.
                        Jika ia memiliki suatu rahasia yang akan disampaikan, ia menuliskannya dalam sandi, dengan mengganti
                        urutan abjad, sehingga tak satu kata pun dapat dimengerti. Jika ada yang ingin membaca pesan-pesan ini,
                        ia harus mengganti huruf keempat dalam alfabet, yaitu D, untuk A, dan seterusnya untuk huruf-huruf lain. -
                        Suetonius, Kehidupan Julius Caesar 56
                        Keponakan Caesar, Augustus juga menggunakan skema sandi Caesar, tetapi dengan geseran satu ke kanan,
                        dengan sedikit perbedaan.
                        Jika ia hendak menulis sandi, ia menuliskan B untuk A, C untuk B, dan seterusnya, serta AA untuk Z. —
                        Suetonius, Kehidupan Augustus 88.
                        Juga terdapat bukti bahwa Julius Caesar juga menggunakan sistem yang lebih rumit. Penulis Aulus Gellius,
                        merujuk pada sebuah risalah (yang sekarang hilang) dalam sandi-sandinya.
                        Bahkan terdapat suatu risalah yang ditulis secara cerdas oleh ahli tatabahasa Probus mengenai arti
                        rahasia dari huruf-huruf yang menyusun surat-surat Caesar — Aulus Gellius, 17.9.1–5.
                        <br><br>Masih belum diketahui seberapa efektif sandi Caesar pada waktu itu, tetapi kemungkinan besar sandi
                        tersebut cukup aman, karena amat sedikit dari musuh Caesar yang dapat membaca, apalagi yang dapat
                        memecahkan sandi. Tidak ada catatan mengenai ditemukannya solusi untuk memecahkan sandi Caesar pada zaman itu. Catatan tertua mengenai pemecahan sandi substitusi monoalfabetik seperti sandi Caesar adalah pada abad ke-9, oleh kebudayaan Arab Muslim yang menemukan analisis frekuensi.
                        Juga diketahui bahwa sejenis sandi Caesar juga pernah digunakan sebelum masa Caesar. Sandi Caesar
                        dengan geseran satu diklaim telah ditemukan di belakang Hezuzah.
                        Caesar Chiper adalah algoritma kriptografi klasik yang dahulu digunakan oleh Julius Caesar untuk
                        mengirimkan pesan rahasia atau taktik militer. Caesar Chiper disebut juga Sandi Geser sebab
                        huruf-huruf dalam plainteks digantikan oleh huruf lainnya dalam posisi tertentu dalam susunan
                        alfabet. Pada waktu itu, Julius menggeser sebanyak 3 huruf.
                    </p>

                    <p align="justify">Jadi huruf chiper pada algoritma Caesar adalah hasil pergeseran sekian huruf dari huruf asli.
                        Dalam gambar di atas, kasusnya adalah mengubah plainteks KRIPTOGRAFI menjadi chiperteks dengan kunci pergeserannya adalah 3 huruf. Setelah di kriptografikan hasilnya adalah NUSWRJUDIN.
                        Sekarang bagaimana cara mengubah Chiperteks menjadi Plainteks pada algoritma Caesar Chiper?
                        Caranya sangat mudah, jika kita sudah memiliki kuncinya maka tinggal menggeser huruf sebanyak kunci, kemudian menempatkan huruf plainteks di bawahnya.
                        <br><br>Contoh:
                        <br>Sebuah Chiperteks berbunyi: PWNUYTLWFKN
                        <br>Algoritma Caesar Chiper kunci: 5
                        <br>Plainteks: ?
                        <br>Jawab:
                        <br>
                    <div class="fadeshop" align="center">
                        <img src="assets/images/contohcaesar.png" alt="" height="350" align="center">
                    </div><br><br><br><br><br><br><br><br><br><br>
                    Algoritma Caesar Chiper dengan pergeseran huruf sebanyak 13 buah persis dengan sandi AN pada kegiatan pramuka.
                    Bagi yang pernah ikut pramuka pasti tahu sandi AN atau sandi A=N<br>
                    Proses penyandian (enkripsi) dapat secara matematis menggunakan operasi modulus dengan mengubah huruf-huruf
                    menjadi angka, A = 0, B = 1,..., Z = 25. Sandi (E_{n}} dari "huruf"
                    x dengan geseran n secara matematis dituliskan dengan
                    <br>{E_{n}(x)=(x+n)\mod {26}.}
                    <br>Sedangkan pada proses pemecahan kode (dekripsi), hasil dekripsi (D_{n})
                    adalah
                    <br>{D_{n}(x)=(x-n)\mod {26}.}<br>
                    Setiap huruf yang sama digantikan oleh huruf yang sama di sepanjang pesan, sehingga sandi Caesar digolongkan
                    kepada, substitusi monoalfabetik, yang berlawanan dengan substitusi polialfabetik.
                </div>
            </div>

        </div>
</section>
<?php
include 'footer.php';
?>