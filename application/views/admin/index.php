<div class="container-fluid">
        
    <div class="row text-center">
        
        <?php foreach ($produk as $pdk) : ?>

            <div class="card ml-1 mr-3 mb-4" style="width: 15rem;  ">
                <img src="<?= base_url().'/uploads/'.$pdk->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $pdk->nama_produk ?></h5>   
                    <p class="card-text mb-1"><?= $pdk->keterangan ?></p>
                    <small class="badge badge-pill badge-primary mb-3">Rp. <?= $pdk->harga ?></small><br>
                    <a href="<?= base_url('admin/products')?>" class="btn btn-sm btn-success">Edit</a>
                    <!-- <a href="#" class="btn btn-sm btn-success">Detail</a> -->
                </div>
            </div>

        <?php endforeach; ?>
    </div>

</div>


<!-- Modal: Start -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="products" action="<?= base_url('admin/editProduct'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
						<label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
						<?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
						<label for="nama_produk">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
						<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
						<label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" >
						<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
						<label for="harga">Stok Produk</label>
                        <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok Produk" >
						<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> 
<!-- Modal: End -->

