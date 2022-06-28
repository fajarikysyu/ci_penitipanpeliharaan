<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

                    <div class="card">
            <div class="card-header">
                Form Tambah Data Penitipan
                </div>
                    <div class="card-body">
                        <?php if(validation_errors()) :?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors();?>

                            </div>
                        <?php endif;?>

                        <form action="" method="post">

                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Isikan nama panggilan peliharaan" >
                            </div>
                            <div class="form-group">
                                <label for="notlp" class="form-label">Nomor Telepon</label>
                                <input type="int" name="notlp" class="form-control" id="notlp" placeholder="Masukan nomor telepon owner" >
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="email@gmail.com" >
                            </div>
                            <div class="form-group">
                                <label for="Jenis" >Jenis Peliharaan</label>
                                <select class="form-control mt-2" id="jenis" name="jenis">
                                    <option selected>-Pilih-</option>
                                    <option value="Burung">Burung</option>
                                    <option value="Anjing">Anjing</option>
                                    <option value="Kucing">Kucing</option>
                                </select>
                            </div>

                            <button type="submit" name="tambah" class="btn btn-success mt-2">Tambah Data</button>
                            

                        </form>
                    </div>
                </div>

            

        </div>
    </div>

</div>