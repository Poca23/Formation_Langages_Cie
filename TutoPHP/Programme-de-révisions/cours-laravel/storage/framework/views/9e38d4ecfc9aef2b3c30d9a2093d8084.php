<?php $__env->startSection('title', 'Tableau de bord'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="fas fa-user-circle fa-3x"></i>
                        <h5 class="mt-2"><?php echo e(Auth::user()->name); ?></h5>
                        <p class="text-muted"><?php echo e(Auth::user()->email); ?></p>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo e(isset($progress) ? $progress : 0); ?>%">
                            <?php echo e(isset($progress) ? number_format($progress, 2) : 0); ?>% complété
                        </div>
                        <p class="text-center">Progression globale</p>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <a href="#progression" class="list-group-item list-group-item-action active">
                    <i class="fas fa-chart-line me-2"></i> Progression
                </a>
                <a href="#quiz" class="list-group-item list-group-item-action">
                    <i class="fas fa-question-circle me-2"></i> Quiz
                </a>
                <a href="#achievements" class="list-group-item list-group-item-action">
                    <i class="fas fa-trophy me-2"></i> Réussites
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <!-- Welcome Card -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 class="card-title">Bienvenue sur votre tableau de bord</h4>
                    <p class="card-text">Suivez votre progression et accédez à vos ressources d'apprentissage.</p>
                </div>
            </div>

            <!-- Progress Section -->
            <div id="progression" class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Progression par chapitre</h5>
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = $chapters ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span><?php echo e(is_object($chapter) ? $chapter->title : 'N/A'); ?></span>
                                <span><?php echo e($chapter->progress); ?>%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo e($chapter->progress); ?>%"></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Recent Quiz Results -->
            <div id="quiz" class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Résultats récents des quiz</h5>
                </div>
                <div class="card-body">
                    <?php if(count($quizResults) > 0): ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Quiz</th>
                                        <th>Score</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $quizResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($result->quiz_name); ?></td>
                                            <td><?php echo e($result->score); ?>%</td>
                                            <td><?php echo e($result->created_at); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('quiz.show', $result->quiz_id)); ?>"
                                                    class="btn btn-sm btn-primary">Revoir</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <p class="text-center">Aucun quiz complété pour le moment.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/greta/Desktop/workspace/Formation_Langages_Cie/TutoPHP/Programme-de-révisions/cours-laravel/resources/views/dashboard.blade.php ENDPATH**/ ?>