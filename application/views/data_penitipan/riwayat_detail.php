<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Riwayat Data Penitipan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Detail dari riwayat data penitipan</li>
            </ol>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header">
                                Detail Penitipan
                            </div>
                            <div class="card-body">
                                <h6 class="card-title mb-3">Nama Owner : <?= $riwayat_penitipan['NM_owner']; ?></h6>
                                <h6 class="card-title mb-3">Nama Peliharaan : <?= $riwayat_penitipan['nama']; ?></h6>
                                <h6 class="card-title mb-3">Email : <?= $riwayat_penitipan['email']; ?></h6>
                                <p class="card-text">Nomor Telepon : <?= $riwayat_penitipan['notlp']; ?></p>
                                <p class="card-text">Jenis Peliharaan : <?= $riwayat_penitipan['jenis']; ?></p>
                                <p class="card-text">Pengawas : <?= $riwayat_penitipan['pengawas']; ?></p>
                                <p class="card-text">Waktu Penitipan : <?= $riwayat_penitipan['waktu']; ?></p>

                                <a href="<?= base_url(); ?>data_penitipan/riwayat" class="btn btn-success">Kembali</a>



                            </div>
                        </div>

                    </div>

                </div>
            </div>