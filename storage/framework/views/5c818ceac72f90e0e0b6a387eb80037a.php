

<?php $__env->startSection('title', 'Tentang Kami'); ?>

<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb m-0" style="font-size: 13px;">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('visitor.home')); ?>" class="text-decoration-none fw-bold" style="color: #2e7d32;">Beranda</a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">Tentang Kami</li>
    </ol>
</nav>

<div class="row">
    <div class="col-lg-9 col-12 mb-4">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 12px; background: #ffffff;">
            <h5 class="fw-bold mb-3 text-dark">Tim Penulis & Kontributor</h5>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle m-0">
                    <thead style="background-color: #fafafa;">
                        <tr class="text-secondary text-uppercase" style="font-size: 11px; letter-spacing: 0.05em;">
                            <th style="width: 15%; padding: 12px;">Foto</th>
                            <th style="padding: 12px;">Nama Lengkap</th>
                            <th style="padding: 12px;">Username</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 13.5px;">
                        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="padding: 12px;">
                                <img src="<?php echo e(asset('storage/foto/' . $author->foto)); ?>" class="rounded-circle border object-fit-cover" style="width: 45px; height: 45px;" alt="Foto Profil">
                            </td>
                            <td class="fw-semibold text-dark" style="padding: 12px;">
                                <?php echo e($author->nama_depan); ?> <?php echo e($author->nama_belakang); ?>

                            </td>
                            <td class="text-muted" style="padding: 12px;">
                                <span>@</span><?php echo e($author->user_name); ?>

                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-12">
        <div class="card p-4 border-0 shadow-sm text-center" style="border-radius: 12px; background: #ffffff;">
            <div class="mb-3" style="color: #2e7d32;">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-lock-fill d-block mx-auto" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
                </svg>
            </div>
            <h6 class="fw-bold text-dark" style="font-size: 14px;">Akses Kontributor</h6>
            <p class="text-secondary mb-4" style="font-size: 11.5px; line-height: 1.5;">
                Apakah Anda Kontributor? Masuk ke sistem CMS untuk mengelola artikel Anda.
            </p>
            <a href="<?php echo e(route('login')); ?>" class="btn w-100 rounded-pill py-2 fw-medium text-white shadow-sm" style="background-color: #2e7d32; font-size: 13px;">
                Login Ke CMS
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.visitor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\aplikasi-blog\resources\views/visitor/about.blade.php ENDPATH**/ ?>