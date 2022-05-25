<?= $this->extend('admin/default'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <div class="section-header">
        <h1><?= $title ?></h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body table-responsive">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/template/assets/img/<?= $barang['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $barang['namabarang']; ?></h5>
                                <p class="card-text"><b>Harga : </b><?= $barang['harga']; ?></p>

                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                                <br><br>
                                <a href="/barang">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>