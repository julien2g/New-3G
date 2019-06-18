<?php $__env->startSection('content'); ?>
    <?php if(isset($success) && $success == 'TRUE' && isset($msg)): ?>
        <div class="row center">
            <div class="alert alert-success col-12" role="alert">
                    <?php echo e($msg); ?>

            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder
                -img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="37%" y="50%" fill="#eceeef" dy=".3em">Espace chien</text>
                </svg>
                <div class="card-body">
                    <div class="center">
                        <div class="btn-group">
                            <a href="<?php echo e(route('add/chien/vue')); ?>">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                            </a>
                            <a href="<?php echo e(route('modify/chien/vue')); ?>">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="37%" y="50%" fill="#eceeef" dy=".3em">Espace news</text>
                </svg>
                <div class="card-body">
                    <div class="center">
                        <div class="btn-group">
                            <a href="<?php echo e(route('admin/add/news/vue')); ?>">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                            </a>
                            <a href="<?php echo e(route('admin/modify/news/vue')); ?>">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="37%" y="50%" fill="#eceeef" dy=".3em">Espace album</text>
                </svg>
                <div class="card-body">
                    <div class="center">
                        <div class="btn-group">
                            <a href="<?php echo e(route('admin/add/album/vue')); ?>">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                            </a>
                            <a href="<?php echo e(route('admin/modify/album/vue')); ?>">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="37%" y="50%" fill="#eceeef" dy=".3em">Espace portée</text>
                </svg>
                <div class="card-body">
                    <div class="center">
                        <div class="btn-group">
                            <a href="<?php echo e(route('admin/add/portee/vue')); ?>">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                            </a>
                            <a href="<?php echo e(route('admin/modify/portee/vue')); ?>">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
