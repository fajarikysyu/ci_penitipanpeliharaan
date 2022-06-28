<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="container">

                <div class="row mt-3">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header">
                                Form Tambah Data Penitipan
                            </div>
                            <div class="card-body">

                                <form action="" method="post">

                                    <div class="form-group">
                                        <label for="Nama" class="form-label">Nama</label>
                                        <div class="mb-3">
                                            <input type="text" name="NM_owner" class="form-control" id="NM_owner" placeholder="Isikan nama pemilik atau owner">
                                            <small class="form-text text-danger"><?= form_error('nama') ?></small>

                                        </div>
                                        <div>
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Isikan nama panggilan peliharaan">
                                            <small class="form-text text-danger"><?= form_error('nama') ?></small>

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="Notlp" class="form-label">Nomor Telepon</label>
                                        <input type="int" name="notlp" class="form-control" id="notlp" placeholder="Masukan nomor telepon owner">
                                        <small class="form-text text-danger"><?= form_error('notlp') ?></small>

                                    </div>
                                    <div class="form-group">
                                        <label for="Pengawas">Pengawas</label>
                                        <select class="form-control mt-2" id="pengawas" name="pengawas">
                                            <option selected></option>
                                            <option value="Asep Deep">Asep Deep</option>
                                            <option value="Septi Amber">Septi Amber</option>
                                        </select>
                                        <small class="form-text text-danger"><?= form_error('pengawas') ?></small>

                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="email@gmail.com">
                                        <small class="form-text text-danger"><?= form_error('email') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="Jenis">Jenis Peliharaan</label>
                                        <select class="form-control mt-2" id="jenis" name="jenis">
                                            <option selected></option>
                                            <option value="Burung">Burung</option>
                                            <option value="Anjing">Anjing</option>
                                            <option value="Kucing">Kucing</option>
                                        </select>
                                        <small class="form-text text-danger"><?= form_error('jenis') ?></small>

                                    </div>

                                    <button type="submit" name="tambah" class="btn btn-success mt-2">Tambah Data</button>


                                </form>
                            </div>
                        </div>



                    </div>
                </div>

            </div>