<?= $this->extend('admin/default') ?>
<?= $this->section('title') ?>
<title>Barang &mdash; Nabil</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1><?= $title ?></h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Barang</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>id</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Warna</th>
                        <th>Ukuran</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($barang as $brg) : ?>
                            <td style="vertical-align: middle;"><?= $i; ?></td>
                            <td style="vertical-align: middle;"><img src="/template/assets/img/<?= $brg['gambar']; ?>" width="150px"></td>
                            <td style="vertical-align: middle;"><?= $brg['namabarang']; ?></td>
                            <td style="vertical-align: middle;"><?= $brg['harga']; ?></td>
                            <td style="vertical-align: middle;"><?= $brg['warna']; ?></td>
                            <td style="vertical-align: middle;"><?= $brg['ukuran']; ?></td>
                            <td style="vertical-align: middle;"><?= $brg['deskripsi']; ?></td>
                            <td style="vertical-align: middle;"><a href="/barang/<?= $brg['slug']; ?>" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i></a></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>