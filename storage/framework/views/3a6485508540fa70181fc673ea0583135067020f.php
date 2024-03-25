<?php $__env->startSection('content'); ?>

    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder fs-5 mb-4">Semua Berita</h2>
            <div class="row gx-5">
                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="<?php echo e(route('storage',$row->gambar_berita)); ?>" alt="<?php echo e($row->judul_berita); ?>" />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2"><?php echo e($row->kategori->nama_kategori); ?></div>
                                <a class="text-decoration-none link-dark stretched-link" href="<?php echo e(route('home.detailBerita',$row->id_berita)); ?>">
                                    <div class="h5 card-title mb-3">
                                        <?php echo e($row->judul_berita); ?>

                                    </div></a>
                                <p class="card-text mb-0"><?php echo substr($row->isi_berita, 0, 200); ?></p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="small">
                                            <div class="fw-bold">Admin</div>
                                            <div class="text-muted"><?php echo e($row->created_at); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="text-end mb-5 mb-xl-0">
                    <a class="text-decoration-none" href="<?php echo e(route('home.berita')); ?>">
                        Semua Berita
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/frontend/content/semuaBerita.blade.php ENDPATH**/ ?>