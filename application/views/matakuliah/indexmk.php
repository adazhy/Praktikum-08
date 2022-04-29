<div class="col-md-12">
    <h3>
        Daftar Mata Kuliah
    </h3>
    <table border="1" width="100%">
    <thead>
                <tr>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                </tr>
    </thead>
    <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mtk as $mtk) {
            ?>
                <tr>
                    <td><?= $mtk->nama ?></td>
                    <td><?= $mtk->sks ?></td>
                    <td><?= $mtk->kode ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
    </tbody>
</table>
</div>