<?php $__env->startSection('content'); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>

            <li class="breadcrumb-item " aria-current="page"><a href="/albums" title="Voir les albumes">Albums photos</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($album->name); ?></li>

        </ol>
    </nav>


    <h3 class="center">Albums : <?php echo e($album->name); ?></h3>
    <h6 class="text-muted center"><?php echo e($album->date); ?></h6>
    <hr>
    <p class="text-muted center"><?php echo e($album->info); ?></p>
    <div class="row">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-6">
                <div class="card-body center col-md-12">
                    <a data-toggle="modal" data-target=".bd-example-modal-xl">
                        <?php if($image->ext != 'video'): ?>
                            <img src="/public/storage/albums/<?php echo e($image->slug); ?><?php echo e($image->ext); ?>"
                                 class="maxImg embed-responsive"
                                 title="Album de l'élevage de berger australien - De la legende asturienne"
                                 alt="Album de l'élevage de berger australien - De la legende asturienne. Photo uploadée le : <?php echo e($image->created_at); ?>">
                        <?php else: ?>
                            <iframe  width="500" height="400" src="<?php echo e($image->slug); ?>" frameborder="0" allowfullscreen></iframe>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
            <hr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
<div class="">
    <?php echo e($images->links()); ?>

</div>

    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($image->ext != 'video'): ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                    <?php if($image->pos == 1): ?> class="active" <?php endif; ?>></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($image->ext != 'video'): ?>
                                <div class="carousel-item <?php if($image->pos == 1): ?> active <?php endif; ?>">
                                    <a data-toggle="modal" data-target=".bd-example-modal-xl">
                                        <img src="/public/storage/albums/<?php echo e($image->slug); ?><?php echo e($image->ext); ?>"
                                             class="d-block w-100"
                                             alt="élevage de berger australien : De la légende asturienne"
                                             title="élevage de berger australien : De la légende asturienne. Photo uploadée le : <?php echo e($image->created_at); ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button"
                       data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicator" role="button"
                       data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>