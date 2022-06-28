<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
                <div class="card-header">
                    Detail Penitipan
                </div>
                <div class="card-body">
                <h5 class="card-title mb-5">Nama Peliharaan : <?= $data_penitipan['nama'];?></h5>
                    <h6 class="card-subtitle mb-3 text-muted">Email Owner      : <?= $data_penitipan['email'];?></h6>
                    <p class="card-text">Nomor Telepon      : <?= $data_penitipan['notlp'];?></p>
                    <p class="card-text">Jenis Peliharaan   : <?= $data_penitipan['jenis'];?></p>
                    <p class="card-text">Pengawas   : <?= $data_penitipan['pengawas'];?></p>
                    <p class="card-text">Waktu Penitipan   : <?= $data_penitipan['waktu'];?></p>


                    <a href="<?= base_url();?>data_penitipan" class="btn btn-success">Kembali</a>
                </div>
            </div>

        </div>
            
    </div>
</div>