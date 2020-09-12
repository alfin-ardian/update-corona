<div class="col-md-12">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <h1>Form edit lapor sigap</h1>
            <?php
            if ($this->session->flashdata('error') != '') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
            }
            ?>
            <form method="post" action="<?= base_url(); ?>lapor/update">
                <input type="hidden" name="kd_siswa" id="id" value="<?= $pasien->id; ?>" />
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $pasien->nama ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Telephon</label>
                    <input type="number" class="form-control" name="telephon" value="<?= $pasien->telephon ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gejala</label>
                    <input type="text" class="form-control" name="gejala" value="<?= $pasien->gejala ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $pasien->alamat ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Penanganan</label>
                    <input type="text" class="form-control" name="penanganan" value="<?= $pasien->penanganan ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>