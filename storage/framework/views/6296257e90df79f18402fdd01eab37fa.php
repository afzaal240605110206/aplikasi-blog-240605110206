

<?php $__env->startSection('title', 'Beranda - Blog Kami'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-8 col-12">
        <h5 class="mb-4 text-secondary fw-normal">
            <?php echo e($activeCategory ? 'Kategori: ' . $activeCategory->nama_kategori : '5 Artikel Terbaru'); ?>

        </h5>

        <?php if($articles->isEmpty()): ?>
            <div class="card p-5 text-center text-muted border-0 shadow-sm mb-4" style="border-radius: 12px; background: #ffffff;">
                Belum ada artikel dalam kategori ini.
            </div>
        <?php endif; ?>

        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-4 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden; background: #ffffff;">
                <img src="<?php echo e(asset('storage/gambar/' . $item->gambar)); ?>" class="card-img-top w-100" style="height: 260px; object-fit: cover;" alt="Gambar Unggulan">
                
                <div class="card-body p-4">
                    <span class="badge rounded-pill mb-2" style="background-color: #e3f2fd; color: #0d6efd; padding: 6px 12px; font-size: 11px;">
                        <?php echo e($item->kategori->nama_kategori); ?>

                    </span>
                    
                    <h4 class="fw-bold mb-2">
                        <a href="<?php echo e(route('visitor.article.show', $item->id)); ?>" class="text-decoration-none" style="color: #212529;"><?php echo e($item->judul); ?></a>
                    </h4>
                    
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="<?php echo e(asset('storage/foto/' . $item->penulis->foto)); ?>" class="rounded-circle border" style="width: 24px; height: 24px; object-fit: cover;" alt="Penulis">
                        <p class="text-muted m-0" style="font-size: 12px;">
                            Oleh <span class="fw-medium text-dark"><?php echo e($item->penulis->nama_depan); ?></span> • <?php echo e($item->hari_tanggal); ?>

                        </p>
                    </div>
                    
                    <p class="text-secondary mb-4" style="font-size: 13.5px; line-height: 1.6;">
                        <?php echo e(Str::limit(strip_tags($item->isi), 180)); ?>

                    </p>
                    
                    <a href="<?php echo e(route('visitor.article.show', $item->id)); ?>" class="btn btn-success rounded-pill px-4" style="font-size: 13px; font-weight: 500;">
                        Baca Selengkapnya →
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="col-lg-4 col-12">
        <div class="card p-4 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff;">
            <h6 class="fw-bold text-uppercase mb-3 pb-2 border-bottom text-dark" style="font-size: 13px; letter-spacing: 0.05em;">
                Kategori Artikel
            </h6>
            
            <div class="d-flex flex-column gap-1">
                <a href="<?php echo e(route('visitor.home')); ?>" class="category-item d-flex justify-content-between align-items-center p-2 text-decoration-none rounded <?php echo e(!$activeCategory ? 'active' : ''); ?>" style="color: #495057;">
                    <span>Semua Artikel</span>
                    <?php if(!$activeCategory): ?>
                        <span class="badge rounded-circle d-flex align-items-center justify-content-center bg-success text-white" style="width: 24px; height: 24px; font-size: 11px;"><?php echo e($totalArticlesCount); ?></span>
                    <?php else: ?>
                        <span class="badge rounded-pill bg-light text-muted border" style="font-size: 11px;"><?php echo e($totalArticlesCount); ?></span>
                    <?php endif; ?>
                </a>

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $isCatActive = ($activeCategory && $activeCategory->id == $cat->id); ?>

                    <a href="<?php echo e(route('visitor.home', ['category' => $cat->nama_kategori])); ?>" 
                    class="category-item d-flex justify-content-between align-items-center p-2 text-decoration-none rounded <?php echo e($isCatActive ? 'bg-light-success text-success-custom fw-bold' : ''); ?>">
                        <span><?php echo e($cat->nama_kategori); ?></span>
                        
                        <?php if($isCatActive): ?>
                            <span class="badge rounded-circle d-flex align-items-center justify-content-center text-white" style="background-color: #2e7d32; width: 24px; height: 24px; font-size: 11px;">
                                <?php echo e($cat->artikel_count); ?>

                            </span>
                        <?php else: ?>
                            <span class="badge rounded-pill bg-light text-muted border" style="font-size: 11px;">
                                <?php echo e($cat->artikel_count); ?>

                            </span>
                        <?php endif; ?>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.visitor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\aplikasi-blog\resources\views/visitor/home.blade.php ENDPATH**/ ?>