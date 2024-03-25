<?php $__env->startSection('content'); ?>
<section class="py-5 bg-light">
    <div class="container px-5">
        <div class="row gx-5">
            <div class="col-xl-8">
                <h2 class="fw-bolder fs-5 mb-4">Most Views</h2>
                <!-- News item-->
                <?php $__currentLoopData = $mostViews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-4">
                        <div class="small text-muted"><?php echo e($mv->kategori->nama_kategori); ?></div>
                        <a class="link-dark" href="<?php echo e(route('home.detailBerita',$mv->id_berita)); ?>"><h3><?php echo e($mv->judul_berita); ?></h3></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="text-end mb-5 mb-xl-0">
                    <a class="text-decoration-none" href="<?php echo e(route('home.berita')); ?>">
                        More newsberita
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card border-0 h-100">
                    <div class="card-body p-4">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <div class="text-center">
                                <div class="h6 fw-bolder">Contact</div>
                                <p class="text-muted mb-4">
                                    For press inquiries, email us at
                                    <br />
                                    <a href="#!">press@domain.com</a>
                                </p>
                                <div class="h6 fw-bolder">Follow us</div>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5">
        <h2 class="fw-bolder fs-5 mb-4">Berita Terbaru</h2>
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
                More stories
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/frontend/content/home.blade.php ENDPATH**/ ?>