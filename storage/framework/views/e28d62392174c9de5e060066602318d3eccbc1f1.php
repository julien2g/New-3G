<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>

            <li class="breadcrumb-item active" aria-current="page">Nos chiots</li>

        </ol>
    </nav>
    <h3 class="center">Nos petites boules de poils</h3>
    <div class="row">
        <?php $__currentLoopData = $chiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$chien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!isset($chiens)): ?>
                <h3 class="center">Prochainement</h3>
                <div class="row">
                        <div class="jumbotron col-12">
                            <h4>Nous n'avons actuellement aucun chiot disponible</h4>

                            <hr class="my-4">
                            <p>Nous n'avons actuellement aucun chiot dispible.</p>
                            <p>Revenez nous voir bientôt.</p>
                            <p>Vous pouvez égalemement <a href="/contact">nous contacter</a></p>

                        </div>
                </div>
            <?php endif; ?>


            <div class="col-6">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php $__currentLoopData = $images[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($image->id_chien == $chien->id): ?>

                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                        <?php if($image->pos == 1): ?> class="active" <?php endif; ?>></li>
                                    


                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                        <div class="carousel-inner">

                            <?php $__currentLoopData = $images[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($image->id_chien == $chien->id): ?>

                                    <div class="carousel-item  <?php if($image->pos == 1): ?> active" <?php endif; ?>>
                                        <a href="<?php echo e(route('details', ['id' => "$chien->id"])); ?>">
                                            <img src="/public/storage/chiens/<?php echo e($image->slug); ?><?php echo e($image->ext); ?>"
                                                 class="d-block w-100 maxImg"
                                                 alt="<?php echo e($chien->name); ?> de l'élevage de <?php echo e($chien->race); ?> : De la légende asturienne"
                                                 title="<?php echo e($chien->name); ?> de l'élevage de <?php echo e($chien->race); ?> : De la légende asturienne">
                                        </a>
                                    </div>


                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <div class="card-body center col-12">
                    <h5 class="card-title"><?php echo e($chien->name); ?></h5>
                    <p class="text-muted"><?php echo e($chien->race); ?></p>
                    <hr>
                    <p class="card-text"><?php echo e($chien->info); ?></p>
                    <a href="<?php echo e(route('details', ['id' => "$chien->id"])); ?>" class="btn btn-primary">Plus de détails</a>
                </div>
            </div>
            <hr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div>
            <?php echo e($chiens->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>