
    <div class="container-fluid">
        <div class="row text-center">

            <?php foreach ($produk as $pdk) : ?>

                <div class="card ml-1 mr-3 mb-4" style="width: 15rem;  ">
                    <img src="<?= base_url().'/uploads/'.$pdk->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?= $pdk->nama_produk ?></h5>   
                        <p class="card-text mb-1"><?= $pdk->keterangan ?></p>
                        <small class="badge badge-pill badge-success mb-3">Rp. <?= $pdk->harga ?></small><br>
                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#newProductModal">Add to Cart</a>
                        <!-- <a href="#" class="btn btn-sm btn-danger">Checkout</a> -->
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>



    <!-- Modal: Start -->
    <div class="modal fade" id="newProductModal" tabindex="-1" role="dialog" aria-labelledby="newProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newProductModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="transaksi" action="<?= base_url('user/transaksi'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="kuantitas">Kuantitas</label>
                            <input type="number" class="form-control" id="kuantitas" name="kuantitas" placeholder="Kuantitas" value="<?= set_value('kuantitas'); ?>">
                            <?= form_error('kuantitas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="produk_id">Select Product</label>
                            <select name="produk_id" id="produk_id" class="form-control">
                                <option value="">Select Product</option>
                                <?php foreach ($nama_produk as $np) : ?>
                                <option value="<?= $np['id']; ?>"><?= $np['nama_produk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" value="<?= set_value('keterangan'); ?>">
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
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