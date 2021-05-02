

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 pt-16">
<div class="popular-movies">
<h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Popular Movies </h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
<?php $__currentLoopData = $popularMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if (isset($component)) { $__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MovieCard::class, ['movie' => $movie,'genres' => $genres]); ?>
<?php $component->withName('movie-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c)): ?>
<?php $component = $__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c; ?>
<?php unset($__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>




<div class="now-playing-movies py-24">
<h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Now Playing </h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
<?php $__currentLoopData = $nowPlayingMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if (isset($component)) { $__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MovieCard::class, ['movie' => $movie,'genres' => $genres]); ?>
<?php $component->withName('movie-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c)): ?>
<?php $component = $__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c; ?>
<?php unset($__componentOriginalf6cc4121defb57aafadc06ceee38d5bd5a1b9d5c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-movie-examples\resources\views/index.blade.php ENDPATH**/ ?>