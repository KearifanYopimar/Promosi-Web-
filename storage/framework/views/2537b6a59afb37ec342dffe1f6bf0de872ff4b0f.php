<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Form Ubah Menu</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('menu.prosesUbah')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label">Nama Menu</label>
                        <input type="text" name="nama_menu" placeholder="Nama Menu" value="<?php echo e($menu->nama_menu); ?>" class="form-control" <?php $__errorArgs = ['nama_menu'];
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
                            <input type="radio" value="page" name="jenis_menu" id="page">
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
                        <label class="form-label">URl</label>
                        <div id="url_tampil">
                            <input type="url" name="link_url" id="link_url" class="form-control" placeholder="URL">
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
                            <input type="radio" value="_self" name="target_menu" id="_self">
                            <label>Tab saat ini</label>
                            <input type="radio" value="_blank" name="target_menu" id="_blank">
                            <label>Tab baru</label>
                        </div>
                        <?php $__errorArgs = ['target_menu'];
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

                    <div class="mb-3">
                        <label class="form-label">Status Menu</label>
                        <?php
                        $aktif = "";
                        $tidakAktif = "";
                        if ($menu->status_menu == 1){
                            $aktif = "selected";
                        }else{
                            $tidakAktif = "selected";
                        }
                        ?>

                        <select name="status_menu" class="form-control" id="status_menu">
                                <option value="1" <?php echo e($aktif); ?>>Aktif</option>
                                <option value="0" <?php echo e($tidakAktif); ?>>Tidak Aktif</option>
                        </select>
                    </div>

                    <input type="hidden" name="id_menu" value="<?php echo e($menu->id_menu); ?>">
                    <input type="hidden" id="jenis_menu_old" value="<?php echo e($menu->jenis_menu); ?>">
                    <input type="hidden" id="url_menu_old" value="<?php echo e($menu->url_menu); ?>">
                    <input type="hidden" id="target_menu_old" value="<?php echo e($menu->target_menu); ?>">
                    <input type="hidden" id="parent_menu_old" value="<?php echo e($menu->parent_menu); ?>">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="<?php echo e(route('menu.index')); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function (){
            $("#parent_menu").val($("#parent_menu_old").val());

            var target_menu_old = $("#target_menu_old").val();
            if(target_menu_old == "_self"){
                $("#self").prop("checked", true);
            }else{
                $("#blank").prop("checked", true);
            }

            var jenis_menu_old = $("#jenis_menu_old").val();
            if(jenis_menu_old == "page"){
                $("#page").prop("checked", true);

                $("#link_page").val($("#url_menu_old").val());
                $("#url_tampil").css('display','none');
                $("#page_tampil").css('display','block');
            }else{
                $("#url").prop("checked", true);

                $("#link_url").val($("#url_menu_old").val());
                $("#url_tampil").css('display','block');
                $("#page_tampil").css('display','none');
            }

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

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/backend/content/menu/formUbah.blade.php ENDPATH**/ ?>