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
        <h1 class="text-3xl font-bold mb-4">Tentang Kami</h1>

        <p class="mb-4 text-gray-700">
            Selamat datang di <strong>Desty Florist</strong>, toko bunga yang hadir untuk
            membantu Anda menyampaikan perasaan melalui rangkaian bunga yang indah dan bermakna.
            Kami menyediakan berbagai jenis bunga segar untuk berbagai kebutuhan, mulai dari
            hadiah ulang tahun, pernikahan, wisuda, ucapan selamat, hingga ungkapan belasungkawa.
        </p>

        <p class="mb-4 text-gray-700">
            Dengan komitmen terhadap kualitas dan kepuasan pelanggan, kami selalu memilih bunga
            terbaik dan merangkainya dengan penuh kreativitas serta perhatian terhadap detail.
            Setiap rangkaian dibuat untuk memberikan kesan yang istimewa bagi penerimanya.
        </p>

        <p class="mb-4 text-gray-700">
            Kami percaya bahwa bunga bukan sekadar hadiah, tetapi juga cara untuk menyampaikan
            cinta, kebahagiaan, rasa syukur, dan berbagai emosi lainnya. Oleh karena itu,
            kami berusaha memberikan pelayanan terbaik dan produk berkualitas tinggi kepada
            setiap pelanggan.
        </p>

        <div class="mt-6 p-5 bg-pink-50 rounded-lg">
            <h2 class="text-xl font-semibold mb-2">Visi Kami</h2>
            <p class="text-gray-700">
                Menjadi toko bunga terpercaya yang menghadirkan keindahan dan kebahagiaan
                melalui setiap rangkaian bunga yang kami buat.
            </p>
        </div>

        <div class="mt-4 p-5 bg-green-50 rounded-lg">
            <h2 class="text-xl font-semibold mb-2">Misi Kami</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Menyediakan bunga segar dan berkualitas terbaik.</li>
                <li>Memberikan pelayanan yang ramah dan profesional.</li>
                <li>Menciptakan rangkaian bunga yang kreatif dan elegan.</li>
                <li>Memberikan pengalaman berbelanja yang mudah dan menyenangkan.</li>
            </ul>
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
<?php endif; ?><?php /**PATH C:\laragon\www\desty\resources\views/about.blade.php ENDPATH**/ ?>