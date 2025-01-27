<?php $__env->startSection('title', 'Sommaire'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Sommaire de la formation</h2>
                </div>
                <div class="card-body">
                    <div class="accordion" id="chaptersAccordion">
                        <!-- PHP Basics -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#phpBasics">
                                    Les bases de PHP
                                </button>
                            </h2>
                            <div id="phpBasics" class="accordion-collapse collapse show"
                                data-bs-parent="#chaptersAccordion">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($chapter['id'] <= 6): ?>
                                                <a href="<?php echo e(route('chapter.show', ['id' => $chapter['id']])); ?>"
                                                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                    <?php echo e($chapter['id']); ?>. <?php echo e($chapter['title']); ?>

                                                    <div>
                                                        <?php if(isset($quizResults[$chapter['id']])): ?>
                                                            <span class="badge bg-success me-2">
                                                                Score: <?php echo e($quizResults[$chapter['id']]->score); ?>%
                                                            </span>
                                                        <?php endif; ?>
                                                        <span class="badge bg-primary rounded-pill">
                                                            <?php echo e($chapter['duration']); ?>

                                                        </span>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Laravel Framework -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#laravelFramework">
                                    Framework Laravel
                                </button>
                            </h2>
                            <div id="laravelFramework" class="accordion-collapse collapse"
                                data-bs-parent="#chaptersAccordion">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($chapter['id'] > 6): ?>
                                                <a href="<?php echo e(route('chapter.show', ['id' => $chapter['id']])); ?>"
                                                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                    <?php echo e($chapter['id']); ?>. <?php echo e($chapter['title']); ?>

                                                    <div>
                                                        <?php if(isset($quizResults[$chapter['id']])): ?>
                                                            <span class="badge bg-success me-2">
                                                                Score: <?php echo e($quizResults[$chapter['id']]->score); ?>%
                                                            </span>
                                                        <?php endif; ?>
                                                        <span class="badge bg-primary rounded-pill">
                                                            <?php echo e($chapter['duration']); ?>

                                                        </span>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .accordion-button:not(.collapsed) {
        background-color: #f8f9fa;
        color: #0d6efd;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
    }

    .badge {
        font-size: 0.8em;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/greta/Desktop/workspace/Formation_Langages_Cie/TutoPHP/Programme-de-révisions/cours-laravel/resources/views/sommaire.blade.php ENDPATH**/ ?>