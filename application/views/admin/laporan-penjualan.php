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

            <a class="btn btn-sm btn-outline-danger" onclick="checkPdfDownloaded()"
                href="<?php echo base_url() . 'admin/exportLaporanToPdf/' . $user["id"]; ?>" id="btn-pdf"><span
                    class="far fa-lg fa-fw fa-file-pdf"></span>Download Laporan Pdf</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Pemesanan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_pemesanan as $lp) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $lp['no_pemesanan']; ?></td>
                        <td><?= $lp['name']; ?></td>
                        <td><?= $lp['email']; ?></td>
                        <td><?= $lp['nama_produk']; ?></td>
                        <td><?= $lp['harga']; ?></td>
                        <td><?= $lp['tgl_pemesanan']; ?></td>
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