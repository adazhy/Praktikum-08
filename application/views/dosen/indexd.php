<div class="col-md-12">
    <h3>
        Daftar Dosen
    </h3>
    <table border="1" width="100%" class="table table-bordered">
    <thead>
        <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Tempat Lahir</th>
        <th>pendidikan</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach ($list_dsn as $dsn) {
    ?>
        <tr>
        <td><?= $dsn->id ?></td>
        <td><?= $dsn->nama ?></td>
        <td><?= $dsn->gender ?></td>
        <td><?= $dsn->tmp_lahir ?></td>
        <td><?= $dsn->pendidikan ?></td>
        </tr>
    <?php
    $nomor++;
    }
   ?>
    </tbody>
</table>
</div>