
<!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row">
            <div class="col-lg">
                <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?>

                <?= $this->session->flashdata('message'); ?>

                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newProductModal">Add Product</a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($nama_produk as $np) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $np['nama_produk']; ?></td>
                            <td><?= $np['keterangan']; ?></td>
                            <td><?= $np['harga']; ?></td>
                            <td><?= $np['stok']; ?></td>
                            <td><?= $np['gambar']; ?></td>
                            <td>
                                <ul class="list-group">
                                    <li class="d-flex jutify-content-between">
                                        <a href="#" class="mx-1 badge badge-success float-right tombol-hapus">Edit</a>
                                        <a href="<?= base_url('admin/deleteProduct/'); ?><?= $np['id']; ?>" class="mx-1 badge badge-danger float-right tombol-hapus">hapus</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



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
            <form class="products" action="<?= base_url('admin/products'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
						<label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" value="<?= set_value('nama_produk'); ?>">
						<?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
						<label for="nama_produk">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" value="<?= set_value('keterangan'); ?>">
						<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
						<label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= set_value('harga'); ?>">
						<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
						<label for="harga">Stok Produk</label>
                        <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok Produk" value="<?= set_value('stok'); ?>">
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