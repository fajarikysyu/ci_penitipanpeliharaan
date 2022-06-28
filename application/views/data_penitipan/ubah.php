<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4">Form merubah data penitipan</h4>

            <div class="container">

                <div class="row mt-3">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header">
                                Form Ubah Data Penitipan
                            </div>
                            <div class="card-body">

                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?= $data_penitipan['id']; ?>">
                                    <div class="form-group">
                                        <label for="Nama" class="form-label">Nama</label>
                                        <input type="text" name="NM_owner" class="form-control mb-3" id="NM_owner" value="<?= $data_penitipan['NM_owner']; ?>">
                                        <small class="form-text text-danger"><?= form_error('nama') ?></small>
                                    </div>
                                    <input type="text" name="nama" class="form-control " id="nama" value="<?= $data_penitipan['nama']; ?>">
                                    <small class="form-text text-danger"><?= form_error('nama') ?></small>
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <label for="Notlp" class="form-label">Nomor Telepon</label>
                                        <input type="int" name="notlp" class="form-control" id="notlp" value="<?= $data_penitipan['notlp']; ?>">

                                        <small class="form-text text-danger"><?= form_error('notlp') ?></small>

                                    </div>
                                    <div class="form-group">
                                        <label for="Pengawas">Pengawas</label>
                                        <select class="form-control mt-2" id="pengawas" name="pengawas">
                                            <?php foreach ($pengawas as $p) : ?>

                                                <?php if ($p == $data_penitipan['pengawas']) : ?>

                                                    <option value="<?= $p; ?>" selected><?= $p; ?></option>

                                                <?php else : ?>

                                                    <option value="<?= $p; ?>"><?= $p; ?></option>

                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="form-text text-danger"><?= form_error('pengawas') ?></small>

                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" value="<?= $data_penitipan['email']; ?>">

                                        <small class="form-text text-danger"><?= form_error('email') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="Jenis">Jenis Peliharaan</label>
                                        <select class="form-control mt-2" id="jenis" name="jenis">
                                            <?php foreach ($jenis as $j) : ?>
                                                <?php if ($j == $data_penitipan['jenis']) : ?>

                                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>

                                                <?php else : ?>

                                                    <option value="<?= $j; ?>"><?= $j; ?></option>

                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="form-text text-danger"><?= form_error('jenis') ?></small>

                                    </div>

                                    <button type="submit" name="tambah" class="btn btn-primary mt-2">Ubah Data</button>


                                </form>
                            </div>
                        </div>



                    </div>
                </div>

            </div>