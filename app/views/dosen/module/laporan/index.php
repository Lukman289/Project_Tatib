<style>
    .content-laporan {
        font-family: 'tirobangla';
    }

    .box-title {
        font-size: 12px;
        width: 500px; /* Atur lebar box-title menjadi 300px */
        height: 70px; /* Atur tinggi box-title menjadi 100px */
        margin: 0 auto; /* Geser box-title ke tengah */
        margin-left: 30%; /* Ganti nilai 20% sesuai kebutuhan */
    }


</style>

<style>
    .content-laporan {
        font-family: 'tirobangla';
    }

    .box-title {
        font-size: 12px;
        width: 80%; /* Adjust width */
        height: 70px; /* Adjust height */
        margin: 0 auto; /* Center horizontally */
        font-family: 'tirobangla';
    }

    .dashboard-box {
        padding: 10px;
    }

    .title-page h1 {
        margin-bottom: 0;
    }

    .button-refresh {
        float: right;
    }

    .refresh {
        background-color: #ddd;
        border: none;
        border-radius: 4px;
        padding: 5px 10px;
        cursor: pointer;
    }

    .content {
        margin-top: 30px;
    }


    .box-content {
        font-family: 'tirobangla';
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 10px;
        margin: 0 auto;
        font-size: 18px;
        width: 90%;
    }

    form {
        margin: 0;
    }


    .form-control {
        width: 100%;
        margin-bottom: 15px;
    }

    .modal-footer {
        text-align: right;
    }

    #button-buku {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>

<div class="main col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content-laporan">
        <div class="dashboard-box">
            <div class="box-title">
                <div class="title-page">
                    <h1 class="h2"><img class="logo-dashboard-page" src="<?= BASEURL ?>/img/dosen/lapor_dosen.png" alt="">Laporan</h1>
                </div>
                <div class="button-refresh">
                    <a href="index.php">
                        <button class="refresh" data-bs-target="laporan">
                            <img class="refresh-logo" src="<?= BASEURL ?>/img/refresh-logo.svg" alt="">
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="content mt-5">
                <div class="box-content" style="width: 800px">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="kelas" class="form-label col-md-3 text-left">Kelas  :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="kelas" required style="width: 100%;">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="form-label col-md-3 text-left">Nama  :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="kelas" required style="width: 100%;">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kelas" class="form-label col-md-3 text-left">Nim  :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="kelas" required style="width: 100%;">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kelas" class="form-label col-md-3 text-left">Pelanggaran  :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="kelas" required style="width: 100%;">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="bukti" class="form-label col-md-3 text-left">Bukti  :</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="bukti" required style="width: 100%;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="button-buku">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>