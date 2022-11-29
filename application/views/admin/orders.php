

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

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col" style="min-width: 8rem">Kuantitas</th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($transaksi as $tr) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $tr['name']; ?></td>
                                        <td><?= $tr['email']; ?></td>
                                        <td><?= $tr['nama_produk']; ?></td>
                                        <td><?= $tr['kuantitas']; ?></td>
                                        <td><?= date('d F Y', $tr['tgl_transaksi']); ?></td>
                                        <td><?= $tr['keterangan']; ?></td>
                                        <td>
                                            <ul class="list-group">
                                                <li class="d-flex jutify-content-between">
                                                    <a href="#" class="mx-1 badge badge-success float-right tombol-hapus">Edit</a>
                                                    <a href="<?= base_url('admin/deleteOrder/'); ?><?= $tr['id']; ?>" class="mx-1 badge badge-danger float-right tombol-hapus">hapus</a>
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

            