<table border="1">
    <tr>
        <th>Nama Anggota: <?= $user['name']; ?></th>
    </tr>
    <tr>
        <th>Bukti pembayaran:</th>
    </tr>
    <tr>
        <td>
            <div class="table-responsive">
                <table border="1">
                    <tr>
                        <td colspan="1"></td>
                        <th>Email</th>
                        <th><?= $user['email']; ?></th>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="1"></td>
                        <th>Nomor telp</th>
                        <th><?= $pemesanan['no_telp']; ?></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Pemesanan</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Tanggal Pemesanan</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($data_produk as $pbr) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $pbr['no_pemesanan']; ?></td>
                        <td><?= $pbr['nama_produk']; ?></td>
                        <td><?= $pbr['harga']; ?></td>
                        <td><?= $pbr['jumlah']; ?></td>
                        <td><?= $pbr['subtotal']; ?></td>
                        <td><?= $pbr['tgl_pemesanan']; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="4"></td>
                        <th>Total</th>
                        <th><?= $total; ?></th>
                        <td></td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td align="center">
            <?= md5(date('d M Y H:i:s')); ?>
        </td>
    </tr>
</table>