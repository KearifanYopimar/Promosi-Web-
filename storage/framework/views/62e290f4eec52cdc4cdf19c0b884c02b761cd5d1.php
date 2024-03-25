<?php $__env->startSection('content'); ?>
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5">

            <div class="col-lg-12">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"><?php echo e($page->judul_page); ?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2"><?php echo e($page->created_at); ?></div>
                        </header>
                    <section class="mb-5">
                        <p class="fs-5 mb-4"><?php echo $page->isi_page; ?></p>
                    </section>
                </article>

            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/frontend/content/detailPage.blade.php ENDPATH**/ ?>