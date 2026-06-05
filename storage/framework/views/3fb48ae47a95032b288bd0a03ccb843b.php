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
        <h1 class="text-3xl font-bold mb-6">Blog Kami</h1>

        <p class="text-gray-600 mb-6">
            Selamat datang di blog kami. Di sini kami membagikan artikel seputar bunga,
            tips perawatan, inspirasi rangkaian bunga, dan berbagai informasi menarik lainnya.
        </p>


        <div class="mb-6 p-5 border rounded-lg hover:shadow">
            <h2 class="text-xl font-semibold">Tips Merawat Bunga Agar Tetap Segar</h2>
            <p class="text-gray-500 text-sm mb-2">10 Juni 2026</p>
            <p class="text-gray-700">
                Merawat bunga agar tetap segar membutuhkan perhatian khusus seperti mengganti air
                secara rutin, memotong batang, dan meletakkannya di tempat yang tidak terkena
                sinar matahari langsung.
            </p>
        </div>


        <div class="mb-6 p-5 border rounded-lg hover:shadow">
            <h2 class="text-xl font-semibold">Inspirasi Bouquet Pernikahan Modern</h2>
            <p class="text-gray-500 text-sm mb-2">5 Juni 2026</p>
            <p class="text-gray-700">
                Bouquet pernikahan modern kini banyak mengusung gaya minimalis dengan kombinasi
                warna pastel yang elegan dan terlihat mewah.
            </p>
        </div>


        <div class="mb-6 p-5 border rounded-lg hover:shadow">
            <h2 class="text-xl font-semibold">Makna di Balik Setiap Warna Bunga</h2>
            <p class="text-gray-500 text-sm mb-2">1 Juni 2026</p>
            <p class="text-gray-700">
                Setiap warna bunga memiliki arti tersendiri, seperti merah untuk cinta,
                putih untuk kesucian, dan kuning untuk persahabatan.
            </p>
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
<?php endif; ?><?php /**PATH C:\laragon\www\desty\resources\views/blog.blade.php ENDPATH**/ ?>