<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Penitipan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data peliharaan yang dititipkan</li>
            </ol>
            <div class="container">
                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-5">

                            <div class="alert alert-success alert-dismissible fade show" role="alert">

                                Data Penitipan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.


                            </div>

                        </div>
                    </div>
                <?php endif; ?>


                <div class="row mt-3">
                    <div class="col-md-5">
                        <a href="<?= base_url(); ?>data_penitipan/tambah" class="btn btn-primary">Tambah Data Penitipan</a>

                    </div>

                </div>
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
                    <div class="col-md-6">
                        <h4>Daftar Penitipan </h4>
                        <?php if (empty($data_penitipan)) : ?>
                            <div class="alert alert-danger" role="alert">
                                Data Penitipan tidak ditemukan
                            </div>
                        <?php endif; ?>
                        <ul class="list-group">
                            <?php foreach ($data_penitipan as $dpenitipan) : ?>
                                <li class="list-group-item">
                                    <?= $dpenitipan['nama']; ?>
                                    <a class="nav-link dropdown-toggle btnhps" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a href=" <?= base_url(); ?>data_penitipan/ubah/<?= $dpenitipan['id']; ?>" class="dropdown-item btnhps">Ubah</a>
                                        <a href=" <?= base_url(); ?>data_penitipan/hapus/<?= $dpenitipan['id']; ?>" class="dropdown-item btnhps" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                                    </div>
                                    <a href="<?= base_url(); ?>data_penitipan/detail/<?= $dpenitipan['id']; ?>" class="btn btn-primary btnhps">Detail</a>
                                </li>

                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </main>
    <style>
        .btnhps {
            float: right;
            margin: 3px;
        }
    </style>