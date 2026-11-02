<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Akademik Praktikum ORM</title>
    <style>
        body { font: 16px Arial, sans-serif; margin: 32px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 12px; }
        th { background: #173b63; color: white; text-align: left; }
        td { vertical-align: top; }
        ul { padding-left: 18px; margin: 0; }
    </style>
</head>
<body>
    <h1>Data Mahasiswa dan Relasi</h1>
    <p>Praktikum Pemodelan Relasi Eloquent ORM</p>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Telepon</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($student->nim); ?></td>
                    <td><?php echo e($student->name); ?></td>
                    <td><?php echo e($student->studyProgram->name); ?></td>
                    <td><?php echo e($student->profile?->phone ?? 'Belum diisi'); ?></td>
                    <td>
                        <ul>
                            <?php $__empty_2 = true; $__currentLoopData = $student->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                <li><?php echo e($course->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                <li>Belum mengambil kelas</li>
                            <?php endif; ?>
                        </ul>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5">Belum ada mahasiswa</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\portal-orm\resources\views/students/index.blade.php ENDPATH**/ ?>