<!-- Cart: Start -->
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

            <a href="<?= base_url('user'); ?>" class="btn btn-primary mb-3">Add Product</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($temp as $tm) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $tm['email']; ?></td>
                        <td><?= $tm['nama_produk']; ?></td>
                        <td><?= $tm['harga']; ?></td>
                        <td><?= $tm['tgl_pemesanan']; ?></td>
                        <td>
                            <ul class="list-group">
                                <li class="" style="list-style: none;">
                                    <a href="#" class="badge badge-danger float-right tombol-hapus">hapus</a>
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
<!-- Cart: End -->