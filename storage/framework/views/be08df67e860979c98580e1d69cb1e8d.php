
<?php $__env->startSection('title', $article->judul); ?>
<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb m-0" style="font-size: 13px;">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('visitor.home')); ?>" class="text-decoration-none fw-bold" style="color: #2e7d32;">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('visitor.home', ['category' => $article->kategori->nama_kategori])); ?>" class="text-decoration-none fw-bold" style="color: #2e7d32;"><?php echo e($article->kategori->nama_kategori); ?></a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page"><?php echo e(Str::limit($article->judul, 50)); ?></li>
    </ol>
</nav>

<div class="row">
    <div class="col-lg-8 col-12 mb-4">
        <div class="card border-0 shadow-sm" style="border-radius: 12px; overflow: hidden; background: #ffffff;">
            <img src="<?php echo e(asset('storage/gambar/' . $article->gambar)); ?>" class="img-fluid w-100" style="height: 360px; object-fit: cover;" alt="Banner Gambar">
            
            <div class="card-body p-4">
                <span class="badge rounded-pill mb-3" style="background-color: #e3f2fd; color: #0d6efd; padding: 6px 12px; font-size: 11px;">
                    <?php echo e($article->kategori->nama_kategori); ?>

                </span>
                
                <h1 class="fw-bold mb-3" style="color: #212529; font-size: 28px; line-height: 1.3;"><?php echo e($article->judul); ?></h1>
                
                <div class="d-flex align-items-center gap-2 mb-4 pb-3 border-bottom">
                    <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white shadow-sm" 
                         style="width: 40px; height: 40px; background-color: #0d6efd; font-size: 14px; flex-shrink: 0;">
                        <?php echo e(strtoupper(substr($article->penulis->nama_depan, 0, 1))); ?><?php echo e(strtoupper(substr($article->penulis->nama_belakang, 0, 1))); ?>

                    </div>
                    <div>
                        <p class="m-0 fw-semibold text-dark" style="font-size: 13.5px;">
                            <?php echo e($article->penulis->nama_depan); ?> <?php echo e($article->penulis->nama_belakang); ?>

                        </p>
                        <p class="m-0 text-muted" style="font-size: 11.5px;"><?php echo e($article->hari_tanggal); ?> WIB</p>
                    </div>
                </div>

                <div class="article-body text-secondary mb-2" style="font-size: 15px; line-height: 1.8; text-align: justify;">
                    <?php echo nl2br(e($article->isi)); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-12">
        <div class="card p-4 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff;">
            <h6 class="fw-bold text-dark pb-2 border-bottom mb-3" style="font-size: 14px;">Artikel Terkait</h6>
            
            <?php if($relatedArticles->isEmpty()): ?>
                <p class="text-muted m-0 py-2" style="font-size: 12.5px;">Tidak ada artikel terkait lainnya.</p>
            <?php endif; ?>

            <div class="d-flex flex-column gap-3">
                <?php $__currentLoopData = $relatedArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex align-items-start gap-3">
                        <img src="<?php echo e(asset('storage/gambar/' . $related->gambar)); ?>" class="object-fit-cover shadow-sm" style="width: 64px; height: 64px; border-radius: 6px; flex-shrink: 0;" alt="Thumbnail">
                        <div>
                            <a href="<?php echo e(route('visitor.article.show', $related->id)); ?>" class="text-dark fw-medium text-decoration-none d-block lh-sm mb-1 link-hover-effect" style="font-size: 13px;">
                                <?php echo e($related->judul); ?>

                            </a>
                            <span class="text-muted d-block" style="font-size: 10.5px;"><?php echo e($related->hari_tanggal); ?></span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<style>
    .link-hover-effect:hover { color: #2e7d32 !important; text-decoration: underline !important; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.visitor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\aplikasi-blog\resources\views/visitor/detail.blade.php ENDPATH**/ ?>