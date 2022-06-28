<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Penitipan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Detail dari data penitipan</li>
            </ol>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header">
                                Detail Penitipan
                            </div>
                            <div class="card-body">
                                <h6 class="card-title mb-3">Nama Owner : <?= $data_penitipan['NM_owner']; ?></h6>
                                <h6 class="card-title mb-3">Nama Peliharaan : <?= $data_penitipan['nama']; ?></h6>
                                <h6 class="card-title mb-3">Email : <?= $data_penitipan['email']; ?></h6>
                                <p class="card-text">Nomor Telepon : <?= $data_penitipan['notlp']; ?></p>
                                <p class="card-text">Jenis Peliharaan : <?= $data_penitipan['jenis']; ?></p>
                                <p class="card-text">Pengawas : <?= $data_penitipan['pengawas']; ?></p>
                                <p class="card-text">Waktu Penitipan : <?= $data_penitipan['waktu']; ?></p>


                                <a href="<?= base_url(); ?>data_penitipan" class="btn btn-success">Kembali</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
</div>
</main>
</div>