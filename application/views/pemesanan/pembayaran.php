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
                        <th scope="col">Tanggal Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pembayaran as $pbr) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $pbr['no_pemesanan']; ?></td>
                        <td><?= $pbr['nama_produk']; ?></td>
                        <td><?= $pbr['harga']; ?></td>
                        <td><?= $pbr['tgl_pemesanan']; ?></td>
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
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <th>Total</th>
                        <th><?= $pbr['total']; ?></th>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-sm btn-outline-danger" onclick="checkPdfDownloaded()"
                                href="<?php echo base_url() . 'pemesanan/exportToPdf/' . $user["id"]; ?>"
                                id="btn-pdf"><span class="far fa-lg fa-fw fa-file-pdf"></span> Pdf</a>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <a href="<?= base_url('pemesanan/bayar'); ?>" class="btn btn-success mb-3 disabled"
                id="btn-pembayaran">Pembayaran</a>

        </div>
    </div>

</div>
<!-- Cart: End -->

<script>
// Fungsi untuk memeriksa apakah PDF telah didownload
function checkPdfDownloaded() {
    // Panggil fungsi ini setelah selesai mengunduh PDF
    // Ganti id "btn-pembayaran" sesuai dengan id tombol pembayaran Anda
    document.getElementById("btn-pembayaran").classList.remove("disabled");
}
</script>