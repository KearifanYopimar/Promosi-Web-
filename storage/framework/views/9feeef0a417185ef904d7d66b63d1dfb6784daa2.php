<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Form Tambah Menu</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('menu.prosesTambah')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Menu</label>
                        <input type="text" name="nama_menu" placeholder="Nama Menu" value="<?php echo e(old('nama_menu')); ?>" class="form-control" <?php $__errorArgs = ['nama_menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                        <?php $__errorArgs = ['nama_menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red; font-weight: 600; font-size: 9pt;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Menu</label>
                        <div class="radio">
                            <input type="radio" checked value="page" name="jenis_menu" id="page">
                            <label>Page</label>
                            <input type="radio" value="url" name="jenis_menu" id="url">
                            <label>URL</label>
                        </div>
                        <?php $__errorArgs = ['jenis_menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red; font-weight: 600; font-size: 9pt;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">URL</label>
                        <div id="url_tampil">
                            <input type="url" name="link_url" class="form-control" value="<?php echo e(old('link_url')); ?>" placeholder="URL">
                        </div>
                        <div id="page_tampil">
                            <select name="link_page" class="form-control" id="link_page">
                                <?php $__currentLoopData = $page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->id_page); ?>"><?php echo e($row->judul_page); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Target Menu</label>
                        <div class="radio">
                            <input type="radio" checked value="_self" name="target_menu" id="_self">
                            <label>Tab saat ini</label>
                            <input type="radio" value="_blank" name="target_menu" id="_blank">
                            <label>Tab baru</label>
                        </div>
                        <?php $__errorArgs = ['jenis_menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red; font-weight: 600; font-size: 9pt;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Parent Menu</label>
                            <select name="parent_menu" class="form-control" id="parent_menu">
                                <option selected value="">Pilih Parent</option>
                                <?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->id_menu); ?>"><?php echo e($row->nama_menu); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="<?php echo e(route('menu.index')); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(function (){
           $("#url_tampil").css('display','none');

           $("#page").click(function (){
               $("#url_tampil").css('display','none');
               $("#page_tampil").css('display','block');
           });
           $("#url").click(function (){
               $("#url_tampil").css('display','block');
               $("#page_tampil").css('display','none');
           });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/backend/content/menu/formTambah.blade.php ENDPATH**/ ?>