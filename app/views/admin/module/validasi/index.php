
            <main  class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="background-image: url(<?= BASEURL?>/img/gedung-jti.jpg); background-repeat: no-repeat; background-size: cover; ">
                <div class="d-flex bg-white rounded my-2">
                    <img src="" alt="">
                    <h1 class="h3 mx-3 my-3" style="color:#0D366B">Validasi</h1>
                </div>
                <div class="table-responsive medium rounded border-top border-bottom border-3 border-dark-blue mb-1">
                    <table class="table m-0">
                        <thead class="border-bottom border-dark-blue border-3 border-0">
                            <tr class="p-1 inline align-middle">
                                <th class="col" >NO.</th>
                                <th class="col">NAMA</th>
                                <th class="col">KELAS</th>
                                <th class="col">TINGKAT PELANGGARAN</th>
                                <th class="col">TANGGAL</th>
                                <th class="col" >RINCIAN PELANGGARAN</th>
                            </tr>
                        </thead>
                        <tbody class="" >
                            <?php
                            $no = 1;
                            // query....
                            // connection database
                            // $query = "SELECT * FROM jabatan order by id desc";
                            // $result = mysqli_query($koneksi, $query);
                            // while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr class="" >
                                <td class="col"><?= $no++; ?></td>
                                <!-- nama -->
                                <td class="col" >Lukman
                                    <!-- <?=$row ['nama']?> -->
                                </td>
                                <!-- kelas -->
                                <td class="col" >TI 2E
                                    <!-- <?=$row ['kelas']?> -->
                                </td>
                                <td class="col" >Tingkat 5
                                    <!-- <?=$row ['tingkat_pelanggaran']?> -->
                                </td>
                                <td class="col" >2023-12-01
                                    <!-- <?=$row ['tanggal']?> -->
                                </td>
                                <td class="col">
                                    <form action="<?= BASEURL?>/Admin/module" method="POST">
                                    <button class="btn btn-primary" name="page" value="validasi/detail-validasi">CEK DETAIL</button>
                                    </form>
<!--                                    <a href="detail-validasi/detail-validasi.php" class=" m-auto btn btn-dark-blue text-white">-->
<!--                                        CEK DETAIL-->
<!--                                    </a>-->
                                </td>
                            </tr>
                            <!-- <?
                            // }
                            ?> -->
                        </tbody>
                    </table>
                </div>
            </main>
       