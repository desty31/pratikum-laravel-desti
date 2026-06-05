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

    <div class="max-w-5xl mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Selamat Datang di Toko Bunga Kami 🌸</h1>

        <p class="text-gray-600 mb-8">
            Kami menyediakan berbagai rangkaian bunga segar dan indah untuk berbagai momen spesial Anda.
            Mulai dari ulang tahun, pernikahan, wisuda, hingga ucapan duka cita.
        </p>

        <div class="grid md:grid-cols-3 gap-6 text-left">
            <div class="p-5 border rounded-lg hover:shadow">
                <h2 class="text-xl font-semibold mb-2">🌷 Bunga Segar</h2>
                <p class="text-gray-600">
                    Kami selalu menggunakan bunga segar berkualitas tinggi dari petani lokal terbaik.
                </p>
            </div>

            <div class="p-5 border rounded-lg hover:shadow">
                <h2 class="text-xl font-semibold mb-2">🎁 Rangkaian Kustom</h2>
                <p class="text-gray-600">
                    Anda bisa memesan rangkaian bunga sesuai keinginan dan kebutuhan acara Anda.
                </p>
            </div>

            <div class="p-5 border rounded-lg hover:shadow">
                <h2 class="text-xl font-semibold mb-2">🚚 Pengiriman Cepat</h2>
                <p class="text-gray-600">
                    Kami menyediakan layanan pengiriman cepat agar bunga sampai dalam kondisi terbaik.
                </p>
            </div>
        </div>

        <div class="mt-10">
            <a href="/about"
               class="bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-600">
                Pelajari Lebih Lanjut
            </a>
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
<?php endif; ?><?php /**PATH C:\laragon\www\desty\resources\views/Home.blade.php ENDPATH**/ ?>