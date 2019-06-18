<?php $__env->startSection('content'); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
            <?php if($chien->sex == 1 && $chien->adult == 1 && $chien->own == 1): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('chiens/males')); ?>">Nos mâles</a></li>
            <?php elseif($chien->sex == 0 && $chien->adult == 1 && $chien->own == 1): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('chiens/femelles')); ?>">Nos femelles</a>
                </li>
            <?php elseif($chien->own == 0): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('chiens/ext/')); ?>">Mâles exterieur</a>
                </li>
            <?php elseif($chien->adult == 0 && $chien->own == 1): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('chiot', ['own' => 1])); ?>">Chiots diponibles</a></li>
            <?php elseif($chien->adult == 0  && $chien->own == 0): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('chiot', ['own' => 0])); ?>">Chiots nés chez nous</a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($chien->race); ?></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($chien->name); ?></li>
        </ol>
    </nav>

    <hr>

    <div class="row justify-content-center" itemscope itemtype="http://schema.org/Product">
        <div class="col-8 ">
            <!--Caroussel-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($image->id_chien == $chien->id): ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                <?php if($image->pos == 1): ?> class="active" <?php endif; ?>
                            ></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
                <div class="carousel-inner">
                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($image->id_chien == $chien->id): ?>

                            <div class="carousel-item  <?php if($image->pos == 1): ?> active <?php endif; ?>">
                                <a data-toggle="modal" data-target=".bd-example-modal-xl">
                                    <img
                                        src="/public/storage/chiens/<?php echo e($image->slug); ?><?php echo e($image->ext); ?>"
                                        class="d-block w-100 "
                                        alt="<?php echo e($chien->name); ?> de l'élevage de <?php echo e($chien->race); ?> : De la légende asturienne"
                                        title="<?php echo e($chien->name); ?> de l'élevage de <?php echo e($chien->race); ?> : De la légende asturienne. Photo uploadée le : <?php echo e($image->created_at); ?>">
                                </a>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="center" itemscope itemtype="http://schema.org/Product">
                        <h4 itemprop="name"><?php echo e($chien->name); ?></h4>
                        <h6 class="text-muted"><?php echo e($chien->race); ?> </h6>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text " itemprop="description"><?php echo e(htmlentities($chien->info)); ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <h4 class="text-muted center"><?php echo e($chien->title); ?> </h4>
            <div class="card ">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($title == 'expostions' || $title == '' ? 'active' : ''); ?>"
                               href="<?php echo e(route('details', ['id'=>$chien->id, 'title'=>'expostions'])); ?>">Expositions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($title == 'concours' ? 'active' : ''); ?>"
                               href="<?php echo e(route('details', ['id'=>$chien->id, 'title'=>'concours'])); ?>">Concours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($title == 'analyses' ? 'active' : ''); ?>"
                               href="<?php echo e(route('details', ['id'=>$chien->id, 'title'=>'analyses'])); ?>">Analyses</a>
                        </li>
                        <?php if(($chien->id_portee)): ?>
                            <li class="nav-item ">
                                <a class="nav-link <?php echo e($title == 'pere' ? 'active' : ''); ?>"
                                   href="<?php echo e(route('details', ['id'=>$chien->id, 'title'=>'pere'])); ?>">Père</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($title == 'mere' ? 'active' : ''); ?>"
                                   href="<?php echo e(route('details', ['id'=>$chien->id, 'title'=>'mere'])); ?>">Mère</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="card-body <?php echo e($title == 'expostions' || $title == '' ? '' : 'd-none'); ?>">

                    <p class="card-text"><?php echo e(nl2br($chien->expositions)); ?></p>

                </div>
                <div class="card-body <?php echo e($title == 'concours' ? '' : 'd-none'); ?>">

                    <p class="card-text"><?php echo e(nl2br($chien->awards)); ?></p>

                </div>
                <div class="card-body <?php echo e($title == 'analyses' ? '' : 'd-none'); ?>">

                    <p class="card-text"><?php echo e(nl2br($chien->analyses)); ?></p>

                </div>
                <?php if(($chien->id_portee)): ?>
                    <div class="card-body <?php echo e($title == 'pere' ? '' : 'd-none'); ?>">
                        <a href="<?php echo e(route('details', ['id'=>$parents[0]->id])); ?>">
                            <h5><?php echo e($parents[0]->name); ?></h5>
                            <br>
                            <img src="/public/storage/chiens/<?php echo e($parents_image[0]->slug); ?><?php echo e($parents_image[0]->ext); ?>"
                                 class="card-img-top maxImg"
                                 alt="<?php echo e($parents[0]->name); ?> de l'élevage de <?php echo e($parents[0]->race); ?> : De la légende asturienne"
                                 title="<?php echo e($parents[1]->name); ?> de l'élevage de <?php echo e($parents[1]->race); ?> : De la légende asturienne. . Photo uploadée le : <?php echo e($parents_image[0]->created_at); ?> ">

                        </a>
                    </div>
                    <div class="card-body <?php echo e($title == 'mere' ? '' : 'd-none'); ?>">
                        <a href="<?php echo e(route('details', ['id'=>$parents[1]->id])); ?>">
                            <h5><?php echo e($parents[1]->name); ?></h5>
                            <br>
                            <img src="/public/storage/chiens/<?php echo e($parents_image[1]->slug); ?><?php echo e($parents_image[1]->ext); ?>"
                                 class="card-img-top maxImg"
                                 alt="<?php echo e($parents[1]->name); ?> de l'élevage de <?php echo e($parents[1]->race); ?> : De la légende asturienne"
                                 title="<?php echo e($parents[1]->name); ?> de l'élevage de <?php echo e($parents[1]->race); ?> : De la légende asturienne . Photo uploadée le : <?php echo e($parents_image[1]->created_at); ?>">

                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <hr>

    <div class="row justify-content-center">
        <h4 class="blue">Envie de voir à quoi ressemble nos autre chiens ? </h4>
    </div>

    <br>

    <div class="row center">
        <?php $__currentLoopData = $chiens_rdm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$chien_rdm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class=" col-md-3 col-sm-6" style="width: 17rem;">
                <a href="<?php echo e(route('details', ['id' => "$chien_rdm->id"])); ?>">
                    <?php if(isset($images_rdm[$key])): ?>
                        <img src="/public/storage/chiens/<?php echo e($images_rdm[$key]->slug); ?><?php echo e($images_rdm[$key]->ext); ?>"
                             class="d-block w-100"
                             alt="<?php echo e($chien_rdm->name); ?> de l'élevage de <?php echo e($chien_rdm->race); ?> : De la légende asturienne"
                             title="<?php echo e($chien_rdm->name); ?> de l'élevage de <?php echo e($chien_rdm->race); ?> : De la légende asturienne">
                    <?php else: ?>
                        <img src="<?php echo e(url('public/storage/img/soon.jpg')); ?>"
                             class="d-block w-100 maxImg"
                             alt="<?php echo e($chien_rdm->name); ?> de l'élevage de <?php echo e($chien_rdm->race); ?> : De la légende asturienne"
                             title="<?php echo e($chien_rdm->name); ?> de l'élevage de <?php echo e($chien_rdm->race); ?> : De la légende asturienne">
                    <?php endif; ?>
                </a>

                <div class="card-body">
                    <h5 class="card-title"><?php echo e($chien_rdm->name); ?></h5>
                    <a href="<?php echo e(route('details', ['id' => "$chien_rdm->id"])); ?>"><img
                            src="<?php echo e(url('public/storage/img/pate.png')); ?>" class="pate" height="100px" width="100px"
                            alt="Pate de berger australien" title="Plus de détails"> </a>
                </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($image->id_chien == $chien->id): ?>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                        <?php if($image->pos == 1): ?>  class="active" <?php endif; ?>></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($image->id_chien == $chien->id): ?>
                                    <div class="carousel-item  <?php if($image->pos == 1): ?> active <?php endif; ?>">
                                        <a data-toggle="modal" data-target=".bd-example-modal-xl">
                                            <img src="/public/storage/chiens/<?php echo e($image->slug); ?><?php echo e($image->ext); ?>"
                                                 class="d-block w-100"
                                                 alt="<?php echo e($chien->name); ?> de l'élevage de <?php echo e($chien->race); ?> : De la légende asturienne"
                                                 title="<?php echo e($chien->name); ?> de l'élevage de <?php echo e($chien->race); ?> : De la légende asturienne. Photo uploadée le : <?php echo e($image->created_at); ?>">
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