<?php $__env->startSection('content'); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Accueil</a></li>

            <?php if($chiens[0]->sex == 1 && $chiens[0]->adult == 1 && $chiens[0]->own == 1): ?>
                <li class="breadcrumb-item active" aria-current="page">Nos mâles</li>
            <?php elseif($chiens[0]->sex == 0 && $chiens[0]->adult == 1 && $chiens[0]->own == 1): ?>
                <li class="breadcrumb-item active">Nos femelles</li>
            <?php elseif($chiens[0]->own == 0): ?>
                <li class="breadcrumb-item active">Mâle éxterieurs</li>
            <?php endif; ?>

        </ol>
    </nav>

    <?php $__currentLoopData = $chiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$chien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row" >
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $__currentLoopData = $images[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($image->id_chien == $chien->id): ?>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" <?php if($image->pos == 1): ?> class="active"  <?php endif; ?>></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                    <div class="carousel-inner" itemscope itemtype="http://schema.org/Product">

                        <?php $__currentLoopData = $images[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($image->id_chien == $chien->id): ?>
                                    <div class="carousel-item <?php if($image->pos == 1): ?> active <?php endif; ?>">
                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <a itemprop="url" href="<?php echo e(route('details', ['id' => "$chien->id"])); ?>">
                                            <img itemprop="image" src="/public/storage/chiens/<?php echo e($image->slug); ?><?php echo e($image->ext); ?>"
                                                 class="d-block w-100 maxImg"
                                                 alt="<?php echo e($chien->name); ?> de l'élevage de <?php echo e($chien->race); ?> : De la légende asturienne"
                                                 title="<?php echo e($chien->name); ?> de l'élevage de <?php echo e($chien->race); ?> : De la légende asturienne">
                                        </a>
                                        </div>
                                    </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="card-body center col-md-6" itemscope itemtype="http://schema.org/Product">
                <h5 class="card-title" itemprop="name"><?php echo e($chien->name); ?></h5>
                <p class="text-muted"><?php echo e($chien->race); ?></p>
                <hr>
                <p class="card-text"><?php echo e($chien->info); ?></p>
                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <a itemprop="url" href="<?php echo e(route('details', ['id' => "$chien->id"])); ?>" class="btn btn-primary">Plus de détails</a>
                </div>
            </div>
        </div>

        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>