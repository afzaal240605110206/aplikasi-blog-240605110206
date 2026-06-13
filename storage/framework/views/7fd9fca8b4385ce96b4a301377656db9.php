

<?php $__env->startSection('title', 'Arsip Lengkap Artikel'); ?>

<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb m-0" style="font-size: 13px;">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('visitor.home')); ?>" class="text-decoration-none fw-bold" style="color: #2e7d32;">Beranda</a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">Semua Artikel</li>
    </ol>
</nav>

<div class="row">
    <div class="col-12">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 12px; background: #ffffff;">
            <h5 class="fw-bold mb-3" style="color: #333333;">Arsip Seluruh Artikel</h5>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle m-0">
                    <thead style="background-color: #fafafa;">
                        <tr class="text-secondary text-uppercase" style="font-size: 11px; letter-spacing: 0.05em;">
                            <th style="width: 45%; padding: 12px;">Judul Artikel</th>
                            <th style="padding: 12px;">Kategori</th>
                            <th style="padding: 12px;">Penulis</th>
                            <th class="text-center" style="padding: 12px; width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 13.5px;">
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="fw-bold text-dark" style="padding: 12px;"><?php echo e($item->judul); ?></td>
                            <td style="padding: 12px; color: #495057;"><?php echo e($item->kategori->nama_kategori); ?></td>
                            <td style="padding: 12px; color: #495057;"><?php echo e($item->penulis->nama_depan); ?> <?php echo e($item->penulis->nama_belakang); ?></td>
                            <td class="text-center" style="padding: 12px;">
                                <a href="<?php echo e(route('visitor.article.show', $item->id)); ?>" class="btn btn-sm rounded-pill text-white px-3" style="background-color: #2e7d32; font-size: 12px;">
                                    Baca Artikel →
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <?php if($articles->hasPages()): ?>
                <div class="mt-4 d-flex justify-content-center">
                    <?php echo $articles->links('pagination::bootstrap-5'); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.visitor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\aplikasi-blog\resources\views/visitor/archive.blade.php ENDPATH**/ ?>