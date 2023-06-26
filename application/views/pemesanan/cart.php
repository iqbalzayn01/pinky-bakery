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

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php $data_produk = array(); ?>
                    <?php $total = 0; ?>
                    <?php foreach ($temp as $row) : ?>
                    <?php
                        // Mengecek apakah nama_produk sudah ada di array $data_produk
                        $index = array_search($row['nama_produk'], array_column($data_produk, 'nama_produk'));
                        if ($index !== false) {
                            // Jika nama_produk sudah ada, tambahkan jumlah dan update subtotal
                            $data_produk[$index]['jumlah'] += 1;
                            $data_produk[$index]['subtotal'] += $row['harga'];
                        } else {
                            // Jika nama_produk belum ada, tambahkan ke array $data_produk
                            $data_produk[] = [
                                'id_temp' => $row['id_temp'],
                                'email' => $row['email'],
                                'nama_produk' => $row['nama_produk'],
                                'harga' => $row['harga'],
                                'jumlah' => 1,
                                'subtotal' => $row['harga'],
                                'tgl_pemesanan' => $row['tgl_pemesanan']
                            ];
                        }
                        $total += $row['harga'];
                    ?>
                    <?php endforeach; ?>
                    <?php foreach ($data_produk as $produk) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $produk['email']; ?></td>
                        <td><?= $produk['nama_produk']; ?></td>
                        <td><?= $produk['harga']; ?></td>
                        <td><?= $produk['jumlah']; ?></td>
                        <td><?= $produk['subtotal']; ?></td>
                        <td><?= $produk['tgl_pemesanan']; ?></td>
                        <td>
                            <ul class="list-group">
                                <li class="" style="list-style: none;">
                                    <a href="<?= base_url('pemesanan/deleteCartItem/') . $produk['id_temp']; ?>"
                                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"></td>
                        <th>Total</th>
                        <th><?= $total; ?></th>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

            <a href="<?= base_url('user'); ?>" class="btn btn-primary mb-3">Add Product</a>
            <button class="btn btn-success mb-3" data-toggle="modal" data-target="#checkoutModal">Checkout</button>

        </div>
    </div>

</div>
<!-- Cart: End -->

<!-- Modal: Start -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="checkout" action="<?= base_url('pemesanan/checkout'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                    </div>

                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="alamat_kirim">Alamat Kirim</label>
                        <input type="text" class="form-control" id="alamat_kirim" name="alamat_kirim"
                            placeholder="Alamat Kirim" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Checkout</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal: End -->