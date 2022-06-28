<div class="container">
        <?php if( $this->session->flashdata('flash')):?>
                <div class="row mt-3">
                    <div class="col-md-5">
                    
                        <div class="alert alert-success alert-dismissible fade show" role="alert">

                            Data Penitipan <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>.
                            
                        
                        </div>

                    </div>
                </div>
            <?php endif;?>


            <div class="row mt-3">
                <div class="col-md-5">
                <a href="<?= base_url(); ?>data_penitipan/tambah" class="btn btn-primary">Tambah Data Penitipan</a>

                </div>

            </div>


                <div class="row mt-3">
                    <div class="col-md-6">
                    <h4 >Daftar Peliharaan Dititipkan</h4>
                    <ul class="list-group">
                        <?php foreach ($data_penitipan as $dpenitipan ) : ?>
                        <li class="list-group-item">
                            <?= $dpenitipan['nama'];?>
                            <a href="<?=base_url();?>data_penitipan/hapus/<?= $dpenitipan['id'];?>" 
                            class="btn btn-danger btnhps" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                        
                        </li>
                        
                        <?php endforeach; ?>
                    </ul>
                        
                    </div>
                </div>

</div>

<style>
    .btnhps {
        float :right;
    }

</style>