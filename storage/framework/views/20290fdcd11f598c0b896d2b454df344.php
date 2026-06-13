<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Blog Kami'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f4f9; font-size: 14px; color: #212529; }
        
        .visitor-navbar { 
            background-color: #2C3E50; 
            padding: 12px 0; 
            min-width: fit-content;
            z-index: 1030; 
        }

        .navbar-brand-title { 
            font-size: 16px; 
            font-weight: 600; 
            margin: 0; color: 
            #ffffff; 
            text-decoration: none; 
        }

        .navbar-brand-sub { 
            font-size: 11px; 
            color: #aaaaaa; 
            margin: 0; 
        }

        .nav-link-custom { 
            color: rgba(255, 255, 255, 0.7); 
            font-size: 13px; 
            font-weight: 500; 
            text-decoration: none; 
            transition: color 0.2s; 
        }

        .nav-link-custom:hover, 
        
        .nav-link-custom.active { color: #ffffff; }

        .text-success-custom { 
            color: #2e7d32 !important; 
            font-weight: 600; 
        }

        .btn-success-custom { 
            background-color: #2e7d32; 
            color: #ffffff; 
            border: none; 
            font-size: 13px; 
            padding: 6px 16px; 
        }

        .btn-success-custom:hover { 
            background-color: #215d25; 
            color: #ffffff; 
        }

        .badge-category { 
            background-color: #e8f5e9; 
            color: #2e7d32; 
            font-weight: 500; 
            padding: 6px 12px; 
            font-size: 11px; 
            text-decoration: none; 
        }

        .visitor-footer { 
            background-color: #2C3E50; 
            color: #aaaaaa; 
            font-size: 12px; 
            padding: 16px 0; 
            margin-top: 60px; 
        }

        .widget-card { 
            background-color: #ffffff; 
            border-radius: 8px; 
            border: 1px solid #e9ecef; 
        }

        .widget-title { 
            font-size: 13px; 
            font-weight: 600; 
            text-transform: uppercase; 
            letter-spacing: 0.05em; 
            color: #495057; 
            border-bottom: 1px solid #f0f0f0; 
            padding-bottom: 10px; 
            margin-bottom: 12px; 
        }

        .category-item { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 8px 10px; 
            color: #495057; 
            text-decoration: none; 
            border-radius: 4px; 
            transition: all 0.2s; 
        }

        .category-item:hover { 
            background-color: #f8f9fa; 
            color: #212529; 
        }

        .category-item.active { 
            background-color: #e8f5e9; 
            color: #2e7d32; 
            font-weight: 600; 
        }

        .bg-light-success { 
            background-color: #e8f5e9 !important; 
        }
        .text-success-custom { 
            color: #2e7d32 !important; 
        }
        .category-item:hover {
            background-color: #f8f9fa;
            color: #212529;
        }
    </style>
</head>
<body>

    <nav class="visitor-navbar shadow-sm mb-4 sticky-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <a href="<?php echo e(route('visitor.home')); ?>" class="navbar-brand-title">Blog Kami</a>
                <p class="navbar-brand-sub">Artikel terbaru seputar teknologi dan pemrograman</p>
            </div>
            <div class="d-flex gap-4">
                <a href="<?php echo e(route('visitor.home')); ?>" class="nav-link-custom <?php echo e(request()->routeIs('visitor.home') ? 'active' : ''); ?>">Beranda</a>
                
                <a href="<?php echo e(route('visitor.article.archive')); ?>" class="nav-link-custom <?php echo e(request()->routeIs('visitor.article.archive') ? 'active' : ''); ?>">Artikel</a>
                
                <a href="<?php echo e(route('visitor.kategori.index')); ?>" class="nav-link-custom <?php echo e(request()->routeIs('visitor.kategori.index') ? 'active' : ''); ?>">Kategori</a>
                
                <a href="<?php echo e(route('visitor.about')); ?>" class="nav-link-custom <?php echo e(request()->routeIs('visitor.about') ? 'active' : ''); ?>">Tentang</a>
            </div>
        </div>
    </nav>

    <div class="container min-vh-100">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="visitor-footer text-center">
        <div class="container">
            <p class="m-0">© 2026 Blog Kami. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH D:\xampp\htdocs\aplikasi-blog\resources\views/layouts/visitor.blade.php ENDPATH**/ ?>