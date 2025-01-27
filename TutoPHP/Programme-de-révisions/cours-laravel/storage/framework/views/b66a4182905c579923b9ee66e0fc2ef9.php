<?php $__env->startSection('title', 'Chapitre ' . $currentChapterId . ' : ' . $chapter->title); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <!-- Sidebar de navigation -->
        <div class="col-md-3">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Dans ce chapitre</h5>
                </div>
                <div class="card-body">
                    <nav id="navbar-chapter" class="nav flex-column">
                        <a class="nav-link" href="#section1">Qu'est-ce que PHP ?</a>
                        <a class="nav-link" href="#section2">Histoire de PHP</a>
                        <a class="nav-link" href="#section3">Pourquoi utiliser PHP ?</a>
                    </nav>
                </div>
            </div>

            <!-- Barre de progression -->
            <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo e($progress); ?>%">
                    <?php echo e(round($progress)); ?>% complété
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-md-9">
            <?php echo $chapter->description; ?>


            <!-- Bouton de complétion du chapitre -->
            <div class="chapter-completion mt-5 mb-4">
                <?php if(!$isCompleted): ?>
                    <form action="<?php echo e(route('chapter.complete', ['id' => $currentChapterId])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-success btn-lg w-100">
                            <i class="fas fa-check-circle"></i> Marquer ce chapitre comme terminé
                        </button>
                    </form>
                <?php else: ?>
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> Félicitations ! Vous avez terminé ce chapitre !
                    </div>
                <?php endif; ?>
            </div>

            <!-- Navigation entre chapitres -->
            <div class="d-flex justify-content-between mt-4">
                <?php if($currentChapterId > 1): ?>
                    <a href="<?php echo e(route('chapter.show', ['id' => $currentChapterId - 1])); ?>" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Chapitre précédent
                    </a>
                <?php else: ?>
                    <div></div>
                <?php endif; ?>

                <?php if($currentChapterId < $totalChapters): ?>
                    <a href="<?php echo e(route('chapter.show', ['id' => $currentChapterId + 1])); ?>" class="btn btn-primary">
                        Chapitre suivant <i class="fas fa-arrow-right"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .progress-bar {
        transition: width 0.5s;
    }

    .chapter-completion {
        border-top: 1px solid #eee;
        padding-top: 20px;
    }

    .nav-link {
        color: #333;
        padding: 8px 15px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        background-color: #f8f9fa;
        color: #007bff;
    }

    section {
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .btn-lg {
        padding: 15px 30px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Smooth scroll pour les liens de navigation
        document.querySelectorAll('#navbar-chapter a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/greta/Desktop/workspace/Formation_Langages_Cie/TutoPHP/Programme-de-révisions/cours-laravel/resources/views/quiz/show.blade.php ENDPATH**/ ?>