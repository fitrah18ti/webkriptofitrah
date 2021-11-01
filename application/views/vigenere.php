<!-- CONTENT =============================-->
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <br><br>
                <h1 class="text-center latestitems"> VIGENERE CIPHER</h1>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="productbox">
                <div class="product-details text-left">
                    <p align="center"><b>Pengertian Vigenere Cipher</b><br></p>
                    <div class="fadeshop" align="center">
                        <img src="<?php echo base_url() ?>assets/images/penemuvig.jpg" alt="" height="250" align="center">
                    </div>
                    <br><br><br><br><br><br><br>
                    <p align="justify">
                        Vigenere cipher merupakan teknik kriptografi sederhana yang lebih aman.
                        Dikembangkan dari metode caesar cipher, metode ini menggunakan karakter huruf
                        sebagai kunci enkripsi. Vigenere cipher juga merupakan polyalphabetic substition
                        cipher (Salomon, 2003). Karakter huruf yang digunakan pada vigenere cipher yaitu
                        A, B, C, ..., Z dan disamakan dengan angka 0, 1, 2, ..., 25. Proses enkripsi dilakukan
                        dengan menulis kunci secara berulang. Penulisan kunci secara berulang dilakukan
                        hingga setiap karakter pada pesan memiliki pasangan sebuah karakter dari kunci.
                        Selanjutnya karakter pada pesan dienkripsi menggunakan metode caesar cipher
                        dengan nilai kunci yang telah dipasangkan dengan angka (Katz, 2015).
                    </p>
                    <div class="fadeshop" align="center">
                        <img src="<?php echo base_url() ?>assets/images/vig.jpg" alt="" height="100" align="center">
                    </div><br>
                    <p align="justify">Contoh enkripsi pada gambar diatas, karakter pesan “Y” dienkripsi dengan kunci “E” dan menghasilkan cipher text “C”. Hasil enkripsi didapatkan dari karakter pesan “Y” bernilai 24 dan karakter kunci “E” yang bernilai 4. Masing- 8 masing nilai karakter ditambahkan 24 + 4 = 28. Karena 28 lebih besar dari pada 26 yang merupakan jumlah karakter yang digunakan, maka 28 dibagi dengan 26. Sisa pembagian tersebut adalah 2 yang merupakan nilai karakter “C”. Proses enkripsi dapat dihitung dengan persamaan berikut (Stalling, 2011) :
                        <br>𝐸𝑖 = (𝑃𝑖 + 𝐾𝑖 ) 𝑚𝑜𝑑 26 (2.3)
                        <br>dimana 𝐸𝑖 , 𝑃𝑖 dan 𝐾𝑖 merupakan karakter hasil enkripsi, karakter pesan dan karakter kunci. Sedangkan proses dekripsi dapat menggunakan persamaan berikut :
                        <br>𝐷𝑖 = (𝐶𝑖 − 𝐾𝑖 ) 𝑚𝑜𝑑 26 (2.4)
                        <br>dengan 𝐷𝑖 adalah karakter hasil dekripsi, 𝐶𝑖 adalah karakter cipher text atau sandi, 𝐾𝑖 adalah karakter kunci.
                    </p>

                    <p align="justify">
                        Sandi Vigenère adalah salah satu penyandian teks alfabet dengan menggunakan sandi Caesar Cipher
                        akan tetapi alfabet yang dijadikan sebagai kata kuncinya. Sandi Vigenère merupakan bentuk
                        sederhana dari sandi substitusi polialfabetik. Vigenere Chiper termasuk dalam cipher
                        abjadmajemuk (polyalphabetic substitution Chiper) yang dipublikasikan oleh diplomat
                        (sekaligus seorang kriptologis) Perancis, Blaise de Vigenere pada abad 16 tahun 1586
                        (Arjana et al. 2012).
                        Sandi Vigenère sebenarnya merupakan pengembangan dari sandi Caesar. Pada sandi Caesar,
                        setiap huruf teks terang digantikan dengan huruf lain yang memiliki perbedaan tertentu
                        pada urutan alfabet. Misalnya pada sandi Caesar dengan geseran 3, A menjadi D, B menjadi E
                        and dan seterusnya. Sandi Vigenère terdiri dari beberapa sandi Caesar dengan nilai geseran
                        yang berbeda.
                        <br>
                        Untuk menyandikan suatu pesan, digunakan sebuah tabel alfabet yang disebut Tabel Vigenère
                        . Tabel Vigenère berisi alfabet yang dituliskan dalam 26 baris, masing-masing
                        baris digeser satu urutan ke kiri dari baris sebelumnya, membentuk ke-26 kemungkinan sandi
                        Caesar. Setiap huruf disandikan dengan menggunakan baris yang berbeda-beda, sesuai kata kunci
                        yang diulang.<br><br>
                        Misalnya, teks terang yang hendak disandikan adalah perintah "Serbu Berlin":
                        serbuberlin<br>
                        Sedangkan kata kunci antara pengirim dan tujuan adalah "Pizza"
                        <br>"PIZZA" diulang sehingga jumlah hurufnya sama banyak dengan teks terang:
                        <br><b>PIZZAPIZZAP</b>
                        <br><br>Huruf pertama pada teks terang, S, disandikan dengan menggunakan baris berjudul P, huruf
                        pertama pada kata kunci. Pada baris P dan kolom S di tabel Vigenère, terdapat huruf H.
                        Demikian pula untuk huruf kedua, digunakan huruf yang terletak pada baris I (huruf kedua
                        kata kunci) dan kolom E (huruf kedua teks terang), yaitu huruf M. Proses ini dijalankan terus
                        sehingga
                        <br>Teks terang: serbuberlin
                        <br>Kata kunci: <b>PIZZAPIZZAP</b>
                        <br>Teks bersandi: <b>HMQAUQMQKIC</b>
                        <br><br>Proses sebaliknya (disebut dekripsi), dilakukan dengan mencari huruf teks bersandi pada
                        baris berjudul huruf dari kata kunci. Misalnya, pada contoh di atas, untuk huruf pertama,
                        kita mencari huruf H (huruf pertama teks tersandi) pada baris P (huruf pertama pada kata kunci),
                        yang terdapat pada kolom S, sehingga huruf pertama adalah S. Lalu M terdapat pada baris I di kolom E,
                        sehingga diketahui huruf kedua teks terang adalah E, dan seterusnya hingga didapat perintah "serbuberlin".

                    </p>
                </div>
            </div>

        </div>
</section>