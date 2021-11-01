<!-- CONTENT =============================-->
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <br><br>
                <h1 class="text-center latestitems"> Public Key Cryptography</h1>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="productbox">
                <div class="product-details text-left">
                    <p align="center"><b>Pengertian Public Key Cryptography</b><br></p>
                    <div class="fadeshop" align="center">
                        <img src="<?php echo base_url() ?>assets/images/publicg.jpg" alt="" height="250" align="center">
                    </div>
                    <br><br><br><br><br><br>
                    <p align="justify">
                        Public key cryptography adalah konsep perlindungan data yang bersifat revolusioner dalam kurung
                        waktu 300 hingga 400 tahun terakhir, dimana istilah ini sering disebut dengan kunci publik. Public
                        key ini memanfaatkan dua kunci yang saling berhubungan, yaitu kunci publik dan privat.
                        Public key cryptography dianggap lebih aman jika dibandingkan dengan symmetric key. Pada jenis
                        kriptografi ini sering menggunakan metode RSA, dan beberapa contoh metode yang lain terdapat DSA, PKC,
                        dan teknik kurva elips.</p>

                    <p align="justify">Dalam dunia keamanan data mungkin kita pernah mendengar public key dan private key. Apakah
                        sebenarnya public key dan private key.
                        Private key dan public key merupakan dari public key cryptography, yaitu suatu persandian yang dirancang supaya pesan dapat
                        dikirim dan sampai di penerima dengan aman tanpa ada seorang yang bisa membaca pesan tersebut.</p>
                    <br>
                    <div class="fadeshop" align="center">
                        <img src="<?php echo base_url() ?>assets/images/publicc.jpg" alt="" height="250" align="center">
                    </div>
                    <br><br><br><br><br><br>
                    <p align="justify">
                        Prinsip dari persandian dari public key cryptography adalah:<br>
                        1. suatu sandi diencrypt dengan kunci public key A hanya dapat didecrypt oleh kunci private key A
                        <br>2. suatu sandi diencrypt dengan kunci private key A hanya dapat didecrypt oleh kunci public key A
                        <br><br>Misal A ingin menyampaikan suatu pesan ke B maka, A akan melakukan enkripsi/persandian dengan menggunakan kunci kunci public key B.
                        Hasil enkripsi ini kemudian dikirimkan kepada B, dan B dapat membuka pesan dengan melakukan decrypt dengan menggunakan kunci private key B.
                        Jika pesan tersebut disadap oleh C, maka C tidak dapat membukanya karena tidak memiliki kunci private key B.
                        Kunci private key C tentu tidak dapat membaca pesan tersebut.
                        <br>Pertanyaan muncul, bagaimana B bisa tahu kalau yang mengirim pesan adalah A dan bukan yang lain ?
                        Untuk skenario ini, A akan mengencrypt pesan dengan kunci public_key B kemudian pesan dencrypt lagi dengan kunci private key A.
                        Pesan kemudian dikirimkan ke B.
                        B kemudian akan mendecrypt pesan dengan kunci public_key A, kemudian hasilnya didecryt lagi dengan kunci private key B.
                        Dengan demikian maka pesan pasti dari A karena bisa didecrypt dengan kunci public key A, hasil decrypt masih tersandi dan kemudian hanya bisa didecrypt dengan kunci private key B.<br>
                        Dengan public key infrastructure ini maka meskipun pesan bisa disadap tetapi tidak bisa dibaca. Dan sender authentication dapat dipastikan dengan kunci public key yang digunakan untuk melakukan decrypt.
                </div>
            </div>

        </div>
</section>