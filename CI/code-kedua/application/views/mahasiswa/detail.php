<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <p class="card-text">
                        <label for ""><b> email:</b></label>
                        <?= $mahasiswa['email']; ?><p>

                            <p class="card-text">
                                <label for=""><b>nim:</b></label>
                                <?= $mahasiswa['nim']; ?></p>
                            <p class="card-text">
                                <label for=""><b>jurusan:</b></label>
                                <?= $mahasiswa['jurusan']; ?><p>

                                </p>
                                <a href="<?= base_url(); ?>mahasiwa" class="btn-primary">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>