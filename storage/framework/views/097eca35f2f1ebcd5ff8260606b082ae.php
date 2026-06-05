<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

    <div class="max-w-4xl mx-auto">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center gap-6">
                <img src="img/daisy.png"
                     alt="Foto Profil"
                     class="w-32 h-32 rounded-full object-cover border-4 border-pink-200">

                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Desty Florist</h1>
                    <p class="text-gray-600">Pemilik & Pengelola Toko Bunga</p>
                    <p class="mt-2 text-gray-500">
                        Menghadirkan keindahan dan kebahagiaan melalui setiap rangkaian bunga.
                    </p>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-3">Tentang Saya</h2>
                <p class="text-gray-700 leading-relaxed">
                    Halo, saya adalah pemilik Desty Florist. Saya memiliki passion dalam
                    merangkai bunga dan menciptakan dekorasi yang indah untuk berbagai acara.
                    Melalui toko bunga ini, saya ingin membantu pelanggan menyampaikan
                    perasaan mereka melalui rangkaian bunga yang elegan dan berkualitas.
                </p>
            </div>

            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-3">Informasi</h2>
                <ul class="space-y-2 text-gray-700">
                    <li><strong>Nama:</strong> Desti Florist</li>
                    <li><strong>Bidang:</strong> Toko Bunga & Dekorasi</li>
                    <li><strong>Lokasi:</strong> bangka</li>
                    <li><strong>Email:</strong> destyflorist@gmail.com</li>
                    <li><strong>Telepon:</strong> 083110985997</li>
                </ul>
            </div>

            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-3">Keahlian</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full">Flower Arrangement</span>
                    <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full">Wedding Decoration</span>
                    <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full">Bouquet Design</span>
                    <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full">Customer Service</span>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\desty\resources\views/profile.blade.php ENDPATH**/ ?>