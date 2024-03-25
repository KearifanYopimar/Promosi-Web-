<?php $__env->startSection('content'); ?>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>

<h3>Data Kategori</h3>
<table border="1" width="100%">
    <thead>
    <tr>
        <th style="text-align: left">No</th>
        <th style="text-align: left">Nama Kategori</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $no = 1;
    ?>
    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($no++); ?></td>
            <td><?php echo e($row->nama_kategori); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATA KULIAH AMOS\KUMPULAN DATA MATAKULIAH\Semester 4\RPL\Praktikum\praktikum1_RPL\resources\views/backend/content/kategori/export.blade.php ENDPATH**/ ?>