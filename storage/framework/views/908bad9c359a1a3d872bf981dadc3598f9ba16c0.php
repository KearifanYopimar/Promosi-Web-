<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="h3 mb-2 text-gray-800">List Menu</h1>
            </div>
            <div class="col-lg-6 text-right">
                <a href="<?php echo e(route('menu.tambah')); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>

        <?php if(session()->has('pesan')): ?>
            <div class="alert alert-<?php echo e(session()->get('pesan')[0]); ?>">
                <?php echo e(session()->get('pesan')[1]); ?>

            </div>

        <?php endif; ?>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" collspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Menu</th>
                            <th>Status Menu</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                        ?>
                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($row->nama_menu); ?>

                                <br>
                                <ul>
                                    <?php $__currentLoopData = $row->submenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <?php echo e($sub->nama_menu); ?>


                                            <a href="<?php echo e(route('menu.ubah',$sub->id_menu)); ?>"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo e(route('menu.hapus',$sub->id_menu)); ?>"><i class="fa fa-trash"></i></a>

                                            <span><?php echo e(($sub->status_menu == 0) ? "(Tidak Aktif)" : ""); ?></span>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul></td>
                                <td><?php echo e($row->status_menu == 1 ? "Aktif" : "Tidak Aktif"); ?></td>
                                <td>
                                    <a href="<?php echo e(route('menu.ubah',$row->id_menu)); ?>" class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i> Ubah</a>
                                    <a href="<?php echo e(route('menu.hapus',$row->id_menu)); ?>" onclick="return confirm('Anda yakin?')" class="btn btn-sm btn-secondary btn-danger"><i class="fa fa-trash"> </i> Hapus</a>

                                    <?php if($loop->first): ?>
                                        <?php
                                        $nextKeyMenu = $k + 1;
                                        $nextIdMenu = $menu->get($nextKeyMenu)->id_menu;
                                        ?>
                                        <a href="<?php echo e(route('menu.order',[$row->id_menu, $nextIdMenu])); ?>" class="btn btn-sm btn-secondary">
                                            <i class="fa fa-arrow-down"></i>
                                        </a>
                                    <?php elseif($loop->last): ?>
                                        <?php
                                            $prevKeyMenu = $k - 1;
                                            $prevIdMenu = $menu->get($prevKeyMenu)->id_menu;
                                        ?>
                                        <a href="<?php echo e(route('menu.order',[$row->id_menu, $prevIdMenu])); ?>" class="btn btn-sm btn-secondary">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                    <?php else: ?>
                                        <?php
                                            $nextKeyMenu = $k + 1;
                                            $nextIdMenu = $menu->get($nextKeyMenu)->id_menu;
                                            $prevKeyMenu = $k - 1;
                                            $prevIdMenu = $menu->get($prevKeyMenu)->id_menu;
                                        ?>
                                        <a href="<?php echo e(route('menu.order',[$row->id_menu, $prevIdMenu])); ?>" class="btn btn-sm btn-secondary">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                        <a href="<?php echo e(route('menu.order',[$row->id_menu, $nextIdMenu])); ?>" class="btn btn-sm btn-secondary">
                                            <i class="fa fa-arrow-down"></i>
                                        </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/backend/content/menu/list.blade.php ENDPATH**/ ?>