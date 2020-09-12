<div class="col-md-12">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <a href="<?= base_url(); ?>lapor/report" class="btn btn-info">Tambah Laporan</a>
            <?php
            if ($this->session->flashdata('success_lapor') != '') {
                echo '<div class="alert alert-success mt-2" role="alert">';
                echo $this->session->flashdata('success_lapor');
                echo '</div>';
            }
            ?>
            <?php
            if ($this->session->flashdata('success_edit') != '') {
                echo '<div class="alert alert-success mt-2" role="alert">';
                echo $this->session->flashdata('success_edit');
                echo '</div>';
            }
            ?>
            <?php
            if ($this->session->flashdata('success_delete') != '') {
                echo '<div class="alert alert-danger mt-2" role="alert">';
                echo $this->session->flashdata('success_delete');
                echo '</div>';
            }
            ?>
            <table class="table table-striped mt-1">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gejala</th>
                        <th scope="col">Telephon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Penanganan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pasien as $pas) {

                    ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $pas->nama ?></td>
                            <td><?= $pas->gejala ?></td>
                            <td><?= $pas->telephon ?></td>
                            <td><?= $pas->alamat ?></td>
                            <td><?= $pas->penanganan ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>lapor/edit/<?= $pas->id; ?>" class="btn btn-info">Edit</a>
                                <a href="<?php echo base_url(); ?>lapor/delete/<?= $pas->id; ?>" class="btn btn-danger">Hapus</a>
                            </td>
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