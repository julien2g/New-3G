<?php $__env->startSection('content'); ?>
    <h3 class="center">Nos <?php if(!isset($chiots)): ?> Futures <?php endif; ?> Portées</h3>
    <?php $__currentLoopData = $portees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$portee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row center ">
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img
                                            src="/public/storage/chiens/<?php echo e($images[$key]["dad"]->slug); ?><?php echo e($images[$key]["dad"]->ext); ?>"
                                            class="d-block w-100"
                                            alt="<?php echo e($parents[$key]["dad"]->name); ?> de l'élevage de <?php echo e($parents[$key]["dad"]->race); ?> : De la légende asturienne"
                                            title="<?php echo e($parents[$key]["dad"]->name); ?> de l'élevage de <?php echo e($parents[$key]["dad"]->race); ?> : De la légende asturienne">

                                        <h5 class="card-title"><?php echo e($parents[$key]["dad"]->name); ?></h5>
                                        <p class="text-muted"><?php echo e($parents[$key]["dad"]->race); ?></p>

                                        <p class="text-muted">Mâle</p>
                                        <a href="<?php echo e(route('details', ['id' => $parents[$key]["dad"]->id])); ?>"
                                           class="btn btn-primary">Plus de détails</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6  col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img
                                            src="/public/storage/chiens/<?php echo e($images[$key]["mom"]->slug); ?><?php echo e($images[$key]["mom"]->ext); ?>"
                                            class="d-block w-100"
                                            alt="<?php echo e($parents[$key]["mom"]->name); ?> de l'élevage de <?php echo e($parents[$key]["mom"]->race); ?> : De la légende asturienne"
                                            title="<?php echo e($parents[$key]["mom"]->name); ?> de l'élevage de <?php echo e($parents[$key]["mom"]->race); ?> : De la légende asturienne">

                                        <h5 class="card-title"><?php echo e($parents[$key]["mom"]->name); ?></h5>
                                        <p class="text-muted"><?php echo e($parents[$key]["dad"]->race); ?></p>
                                        <p class="text-muted">Femelle</p>
                                        <a href="<?php echo e(route('details', ['id' => $parents[$key]["mom"]->id])); ?>"
                                           class="btn btn-primary">Plus de détails</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <strong>Date de saillie : </strong> <?php echo e($portee->sex_date->format('d-m-Y')); ?>

                                </br>
                                <strong>Naissance <?php if(!isset($chiots)): ?> prévue <?php endif; ?>
                                    : </strong> <?php echo e($portee->birth_date->format('d-m-Y')); ?>


                            </div>
                            <div class="col-8">
                                <?php echo e($portee->infos); ?>

                            </div>
                        </div>
                        <?php if(isset($chiots)): ?>
                            <br>
                            <h3 class="center blue">Les chiots nées de la portée</h3>
                            <br>
                            <div class="row">
                                <?php $__currentLoopData = $chiots[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$chiot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-3">
                                        <a href="<?php echo e(route('details', ['id' => $chiot->id])); ?>">
                                            <div class="card">
                                                <?php $__currentLoopData = $images_chiots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(isset($img) && $img->id_chien == $chiot->id): ?>
                                                        <img src="/public/storage/chiens/<?php echo e($img->slug); ?><?php echo e($img->ext); ?>"
                                                             class="card-img-top maxImg"
                                                             alt="<?php echo e($chiot->name); ?> de l'élevage de <?php echo e($chiot->race); ?> : De la légende asturienne"
                                                             title="<?php echo e($chiot->name); ?> de l'élevage de <?php echo e($chiot->race); ?> : De la légende asturienne">
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo e($chiot->name); ?></h5>
                                                    <div class="center">
                                                        <img
                                                            src="<?php echo e(url('public/storage/img/pate.png')); ?>" class="pate "
                                                            height="100px" width="100px"
                                                            alt="Pate de berger australien" title="Plus de détails">

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <br>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>