<?php $__env->startSection('title', 'Page non trouvée'); ?>

<?php $__env->startSection('content'); ?>
<div class="container text-center">
    <h1 class="display-1 text-danger">404</h1>
    <p class="lead">Oups ! La page que vous cherchez n'existe pas ou a été déplacée.</p>
    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary"><i class="fas fa-home"></i> Retour à votre tableau de
            bord</a>
    <?php else: ?>
        <a href="/" class="btn btn-primary"><i class="fas fa-home"></i> Retour à la page d'accueil</a>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/greta/Desktop/workspace/Formation_Langages_Cie/TutoPHP/Programme-de-révisions/cours-laravel/resources/views/errors/404.blade.php ENDPATH**/ ?>