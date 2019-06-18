<?php $__env->startSection('content'); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>

            <li class="breadcrumb-item active" aria-current="page">Albums photos</li>

        </ol>
    </nav>


    <h3 class="center">Albums</h3>

    <div class="row">
        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-6">
                <a href="<?php echo e(route('album/details', ['id' => "$album->id"])); ?>">
                    <div class="card-body center col-md-12">
                        <?php if(isset($images[$key])): ?>
                            <img src="/storage/albums/<?php echo e($images[$key]->slug); ?><?php echo e($images[$key]->ext); ?>"
                                 class="maxImg embed-responsive"
                                 title="Album de l'élevage de berger australien - De la legende asturienne"
                                 alt="Album de l'élevage de berger australien - De la legende asturienne">
                        <?php endif; ?>
                        <h5 class="card-title"><?php echo e($album->name); ?></h5>
                        <hr>
                        <p class="text-muted"><?php echo e($album->date); ?></p>

                        <img
                            src="<?php echo e(url('/storage/img/pate.png')); ?>" class="pate" height="100px" width="100px"
                            alt="Pate de berger australien" title="Voir l'album">
                    </div>
                </a>
            </div>
            <hr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <?php echo e($albums->links()); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>