<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="h3 mb-2 text-gray-800">List User</h1>
            </div>
            <div class="col-lg-6 text-right">
                <a href="<?php echo e(route('user.tambah')); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                            <th>Nama User</th>
                            <th>Email User</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                        ?>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($row->name); ?></td>
                                <td><?php echo e($row->email); ?></td>
                                <td>
                                    <a href="<?php echo e(route('user.ubah',$row->id)); ?>" class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i> Ubah</a>
                                    <a href="<?php echo e(route('user.hapus',$row->id)); ?>" onclick="return confirm('Anda yakin?')" class="btn btn-sm btn-secondary btn-danger"><i class="fa fa-trash"> </i> Hapus</a>
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

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/backend/content/user/list.blade.php ENDPATH**/ ?>