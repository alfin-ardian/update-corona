<div class="col-md-12">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($provinsi as $p) {

                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $p['attributes']['Provinsi']; ?></td>
                            <td><?= $p['attributes']['Kasus_Posi']; ?></td>
                            <td><?= $p['attributes']['Kasus_Semb']; ?></td>
                            <td><?= $p['attributes']['Kasus_Meni']; ?></td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>