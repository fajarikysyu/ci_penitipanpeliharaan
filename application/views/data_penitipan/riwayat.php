<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">History Data Penitipan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data riwayat peliharaan yang dititipkan</li>
            </ol>

            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-6">

                        <form action="" method="post">

                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Cari Data" name="keyword">
                                <button class="btn btn-outline-primary" type="submit">Cari</button>
                            </div>


                        </form>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-mb-3">
                        <h4>History Penitipan </h4>

                        <a href="<?= base_url(); ?>data_penitipan/hapus2/" class="btn btn-danger mb-3" onclick="return confirm('Semua data riwayat akan hilang ,yakin ingin mengkosongkan?')">Kosongkan</a>
                    </div>
                    <div class="col-md-6">

                        <?php if (empty($riwayat_penitipan)) : ?>
                            <div class="alert alert-danger" role="alert">
                                Data Riwayat tidak ditemukan
                            </div>
                        <?php endif; ?>
                        <ul class="list-group">
                            <?php foreach ($riwayat_penitipan as $rpenitipan) : ?>
                                <li class="list-group-item">
                                    <?= $rpenitipan['nama']; ?>

                                    <a href="<?= base_url(); ?>data_penitipan/riwayat_detail/<?= $rpenitipan['id']; ?>" class="btn btn-success btnhps">Detail</a>

                                </li>

                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>

            </div>
            </mail>
        </div>
        <style>
            .btnhps {
                float: right;
                margin: 3px;
            }
        </style>

</div>
</main>

</div>