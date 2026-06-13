 
<?php $__env->startSection('title', 'Edit Penulis'); ?> 
<?php $__env->startSection('content'); ?> 

<div class="d-flex justify-content-between align-items-center mb-3"> 
    <h6 class="fw-semibold mb-0" style="color: #333333;">Edit Penulis</h6> 
    <a href="<?php echo e(route('penulis.index')); ?>" class="btn btn-sm" 
        style="background-color: #f0f0f0; color: #555555;"> 
        Kembali 
    </a> 
</div> 

<div class="card border-0 shadow-sm"> 
    <div class="card-body p-4"> 
        <form action="<?php echo e(route('penulis.update', $penulis->id)); ?>" 
            method="POST" 
            enctype="multipart/form-data"> 
            <?php echo csrf_field(); ?> 
            <?php echo method_field('PUT'); ?> 
 
            <div class="row g-3 mb-3"> 
                <div class="col-md-6"> 
                    <label for="nama_depan" class="form-label fw-semibold" 
                        style="font-size: 13px;"> 
                        Nama Depan <span class="text-danger">*</span> 
                    </label> 

                    <input type="text" 
                        class="form-control <?php $__errorArgs = ['nama_depan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        id="nama_depan" 
                        name="nama_depan" 
                        value="<?php echo e(old('nama_depan', $penulis->nama_depan)); ?>" 
                        placeholder="Masukkan nama depan"> 

                    <?php $__errorArgs = ['nama_depan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                        <div class="invalid-feedback"><?php echo e($message); ?></div> 
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                </div> 

                <div class="col-md-6">
                    <label for="nama_belakang" class="form-label fw-semibold" 
                        style="font-size: 13px;"> 
                        Nama Belakang <span class="text-danger">*</span> 
                    </label> 

                    <input type="text" 
                        class="form-control <?php $__errorArgs = ['nama_belakang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        id="nama_belakang" 
                        name="nama_belakang" 
                        value="<?php echo e(old('nama_belakang', $penulis->nama_belakang)); ?>" 
                        placeholder="Masukkan nama belakang"> 

                    <?php $__errorArgs = ['nama_belakang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                        <div class="invalid-feedback"><?php echo e($message); ?></div> 
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                </div> 
            </div> 

            <div class="mb-3"> 
                <label for="user_name" class="form-label fw-semibold" 
                    style="font-size: 13px;"> 
                    Username <span class="text-danger">*</span> 
                </label> 

                <input type="text" 
                    class="form-control <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    id="user_name" 
                    name="user_name" 
                    value="<?php echo e(old('user_name', $penulis->user_name)); ?>" 
                    placeholder="Masukkan username"> 

                <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    <div class="invalid-feedback"><?php echo e($message); ?></div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
            </div>

            <div class="mb-3"> 
                <label for="password" class="form-label fw-semibold" 
                    style="font-size: 13px;"> 
                    Password Baru 
                </label> 

                <input type="password" 
                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    id="password" 
                    name="password" 
                    placeholder="Kosongkan jika tidak ingin mengubah password"> 

                <div class="form-text" style="font-size: 12px;"> 
                    Minimal 8 karakter. Kosongkan jika tidak ingin mengubah password. 
                </div> 

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    <div class="invalid-feedback"><?php echo e($message); ?></div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
            </div>

            <div class="mb-4"> 
                <label for="foto" class="form-label fw-semibold" 
                    style="font-size: 13px;"> 
                    Foto Profil 
                </label> 

                <div class="mb-2"> 
                    <img src="<?php echo e(asset('storage/foto/' . $penulis->foto)); ?>" 
                        alt="Foto Profil" 
                        style="width: 60px; height: 60px; object-fit: cover;
                        border-radius: 8px; border: 1px solid #e9ecef;"> 
                </div> 

                <input type="file" 
                    class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    id="foto" 
                    name="foto" 
                    accept="image/jpg,image/jpeg,image/png"> 

                <div class="form-text" style="font-size: 12px;"> 
                    Format yang diizinkan: JPG, JPEG, PNG. Ukuran maksimal 2 MB. 
                    Kosongkan jika tidak ingin mengubah foto. 
                </div> 

                <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    <div class="invalid-feedback"><?php echo e($message); ?></div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
            </div> 

            <div class="d-flex gap-2 justify-content-end"> 
                <a href="<?php echo e(route('penulis.index')); ?>" class="btn btn-sm" 
                    style="background-color: #f0f0f0; color: #555555;"> 
                    Batal 
                </a> 
                <button type="submit" class="btn btn-sm btn-success"> 
                    Simpan Perubahan 
                </button> 
            </div> 
        </form> 
    </div> 
</div> 
 
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\aplikasi-blog\resources\views/penulis/edit.blade.php ENDPATH**/ ?>