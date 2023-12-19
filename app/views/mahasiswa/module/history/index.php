<div class="main">
    <div class="logo-container">
        <img class="logo-jenis-sanksi" src="<?=BASEURL?>/img/history.svg" alt="Jenis Logo">
        <p class="Text-judul-sanksi">History</p>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Jenis Sanksi</th>
            <th>Tingkat Pelanggaran</th>
            <th>Tanggal Kejadian</th>
            <th>Tanggal Penyelesaian Sanksi</th>
            <th>Validasi</th>
        </tr>
        <?php $id = 1;
        foreach ($data['history'] as $hstr):
            if (!isset($hstr['tgl_penyelesaian'])){
                continue;
            }
            ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$hstr['jenis']?></td>
            <td><?=$hstr['pelanggaran_id']?></td>
            <td><?=$hstr['tgl_pelanggaran']?></td>
            <td><?=$hstr['tgl_penyelesaian']?></td>
            <td>
                <?php if (isset($hstr['tgl_validasi'])) { ?>
                    <input type="checkbox" checked disabled>
                <?php } else { ?>
                    <input type="checkbox" disabled>
                <?php } ?>
            </td>
        </tr>
        <?php $id++; endforeach; ?>
    </table>
