<?php $__env->startSection('content'); ?>
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-3">
                <div class="d-flex align-items-center mt-lg-5 mb-4">
                    <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                    <div class="ms-3">
                        <div class="fw-bold">Admin</div>
                        <div class="text-muted"><?php echo e($berita->kategori->nama_kategori); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"><?php echo e($berita->judul_berita); ?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2"><?php echo e($berita->created_at); ?></div>
                        </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="<?php echo e(route('storage',$berita->gambar_berita)); ?>" alt="<?php echo e($berita->judul_berita); ?>" /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4"><?php echo $berita->isi_berita; ?></p>
                    </section>
                </article>

            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/frontend/content/detailBerita.blade.php ENDPATH**/ ?>