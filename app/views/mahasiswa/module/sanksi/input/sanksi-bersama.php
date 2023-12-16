<!--<div class="container-page">-->
<!--    <div class="row">-->
        <style>
            .logo-container {
                display: flex;
                align-items: center;

            }

            .logo-jenis-sanksi {
                width: 30px;
                /* Sesuaikan ukuran logo sesuai kebutuhan */
                height: auto;
                margin-right: 40px;
                font-size: 24px;
                margin-left: 40px;
                color: #363637;
                /* Sesuaikan jarak antara logo dan teks */
            }

            .Text-judul-sanksi {
                color: #403737;
                text-align: center;
                font-family: Anek Telugu;
                font-size: 32px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                margin-top: 30px;
                /* Sesuaikan ukuran font sesuai kebutuhan */
            }

            table {

                width: 80%;

                border-collapse: collapse;
                margin: auto;
            }


            table,
            th,
            td {

                border: 1px solid black;

                padding: 8px;

                text-align: left;
                background-color: white;
            }


            th {

                background-color: #0D366B;
                color: white;
            }

            .container-contents {
                width: 928px;
                flex-shrink: 0;
                justify-content: center;
                align-items: flex-start;
                border-radius: 15px;
                background: rgba(255, 255, 255, 0.80);
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 25px;
                margin: auto;
                margin-top: 15px;
                padding: 15px;
            }
            .bold-file {
                display: flex;
                width: 336px;
                height: 65px;
                flex-direction: column;
                justify-content: center;
                flex-shrink: 0;
                color: #000;

                font-family: Poppins;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
            }

            .download-bukti {
                font-family: Poppins;
                font-style: normal;
                font-weight: 1000000000000000;
                line-height: normal;
                color: white;

            }

            .kirim-file {
                border-radius: 15px;
                background: #0D366B;
                box-shadow: 6px 6px 4px 0px rgba(0, 0, 0, 0.25);
                font-size: 10px;
                cursor: pointer;
                margin-left: 40px;
            }

            .kirim-file:hover {

                background: #0B2950;
                box-shadow: 6px 6px 4px 0px rgba(0, 0, 0, 0.25);
                cursor: pointer;
            }
            .box-isi {
                margin-bottom: 40px;

            }

            .box-pelanggaran {

                text-align: center;
                margin-left: 220px;
                margin-top: -30px;
            }

            /* Tingkat 2 */
            .kirim-bukti {
                width: 129px;
                height: 51px;
                flex-shrink: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 15px;
                background-color: #2EA62C;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                margin: auto;
                transition: background-color 0.3s;
            }

            .kirim-bukti:hover {
                background-color: #298527;
            }

            .text-bukti {
                width: 126px;
                height: 39px;
                flex-shrink: 0;
                color: #FFF;
                font-family: Poppins;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                cursor: pointer;
                margin-top: 25px;
            }

            .posisi-bukti {
                margin-left: 200px;
            }
        </style>
      
        <div class="main">
            <div class="logo-container">
                <img class="logo-jenis-sanksi" src="img\sanksi.svg" alt="Jenis Logo">
                <p class="Text-judul-sanksi">Sanksi</p>
            </div>

            

<!-- Tingkat 5,4,3 -->
        <div class="container-contents">
            <div class="box-isi">
                <p>
                <h1 class="text-sanksi" style="margin-bottom: 15px;">
                    <b style="color: black">Pelanggaran Tingkat 3,4,5</b>
                </h1>
            </div>
            <div class="box-isi">
                <a class="bold" style="margin-right: 60px;">Jenis Pelanggaran</a>:
                <a class="text">Bermain kartu dan game online di area kampus</a>

            </div>
            <div class="box-isi">
                <a class="bold" style="margin-right: 40px;">Tingkat Pelanggaran </a>:
                <a>Tingkat 3</a>

            </div>
            <div class="box-isi">
                <a class="bold" style="margin-right: 49px;">Sanksi Pelanggaran</a>:
                <a>Kayang 100x</a>
            </div>

            <div class="box-isi">
                <a class="bold" style="margin-right: 40px;">Tanggal Pelanggaran</a>:
                <a>18 / Okt / 2023</a>
            </div>

            <div class="box-isi">
                <a class="bold" style="margin-right: 45px; ">Bukti Pelanggaran * </a>:
                <div class="box-pelanggaran">
                </div>
            </div>

            <div class="box-isi">
                <a class="bold" style="margin-right: 45px; ">Bukti Kompensasi * </a>:
                <div class="box-pelanggaran">
                </div>
            </div>

            <div class="posisi-bukti">
                <button class="kirim-bukti">
                    <h1 class="text-bukti">
                        Kirim Bukti
                    </h1>
                </button>
            </div>

            <div class="box-isi">
                <a class="bold-file" style="margin-right: 45px; ">File Surat Pernyataan </a>
                <button class="kirim-file">
                    <h1 class="download-bukti">
                        Download File
                    </h1>
                </button>
            </div>
            </p>
        </div>
    </div>
<!--</body> -->