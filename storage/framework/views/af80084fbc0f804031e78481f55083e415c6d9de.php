<?php $__env->startSection('content'); ?>

    <?php if(isset($chiens)): ?>
        <form role="form" method="get" action="<?php echo e(route('admin/modify/chiens/vue/filled')); ?>">
            <div class="row center">
                <div class="col-5 offset-4">
                    <label for="id">Choisir le chien à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        <?php $__currentLoopData = $chiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Choisir</button>
                </div>
            </div>

        </form>
        <br>
        <br>
    <?php else: ?>

        <?php if(isset($chien)): ?>
            <div class="row center">
                <div class="alert alert-success col-12" role="alert">
                    <a href="/details/<?php echo e($chien->id); ?>" class="alert-link">Liens du chien</a>
                </div>
            </div>
        <?php endif; ?>
        <form role="form" method="post"
              action="<?php echo e(isset($chien) ? route('admin/modify/chien') : route('admin/add/chien')); ?>">
        <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nom</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom"
                           value="<?php echo e(isset($chien) ? $chien->name : ''); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titre"
                           value="<?php echo e(isset($chien) ? $chien->title : ''); ?>">
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-4">
                    <label for="race">Race</label>
                    <select id="race" name="race" class="form-control">
                        <option
                            value="<?php echo e(isset($chien) ? $chien->race : ''); ?>"><?php echo e(isset($chien) ? $chien->race : 'Choisir...'); ?> </option>
                        <option <?php echo e(!isset($chien) ? 'selected' : ''); ?>  value="Berger Australien">Berger Australien
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="adult">Adutle</label>
                    <select id="adult" name="adult" class="form-control">
                        <option selected
                                value="<?php echo e(isset($chien) ? $chien->adult : ''); ?>"><?php echo e(isset($chien) ? $chien->adult : 'Choisir...'); ?></option>
                        <option value="0">Chiot</option>
                        <option value="1">Chien</option>

                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="sex">Sexe</label>
                    <select id="sex" name="sex" class="form-control">
                        <option selected
                                value="<?php echo e(isset($chien) ? $chien->sex : ''); ?>"><?php echo e(isset($chien) ? $chien->sex : 'Choisir...'); ?></option>
                        <option value="1">Mâle</option>
                        <option value="0">Femelle</option>

                    </select>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="info">Informations</label>
                    <textarea class="form-control" name="info" id="info"
                              rows="3"><?php echo e(isset($chien) ? $chien->info : ''); ?></textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="birthday">Date de naissance</label>
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="YYYY-MM-DD"
                           value="<?php echo e(isset($chien) ? $chien->birthday : ''); ?>" required>
                </div>
                <div class="form-group col-3">
                    <label for="portee">Portée</label>
                    <select id="portee" name="portee" class="form-control">
                        <option selected value="">Choose...</option>

                        <?php if(isset($parents)): ?>
                            <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($portees[$key]->id); ?>"><?php echo e($parent['dad']->name); ?>

                                    ---X---<?php echo e($parent['mom']->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="award">Recompences</label>
                    <textarea class="form-control" name="award" id="award" rows="3">
                        <?php echo e(isset($chien) ? $chien->awards : ''); ?>

                    </textarea>
                </div>
                <div class="form-group col-4">
                    <label for="exposition">Expositions</label>
                    <textarea class="form-control" name="exposition" id="exposition" rows="3">
                                                <?php echo e(isset($chien) ? $chien->expositions : ''); ?>


                    </textarea>
                </div>
                <div class="form-group col-4">
                    <label for="analyse">Analyses</label>
                    <textarea class="form-control" name="analyse" id="analyse" rows="3">
                                                <?php echo e(isset($chien) ? $chien->analyses : ''); ?>


                    </textarea>
                </div>
            </div>
            <div class="row">

                <div class="form-group col-md-2">
                    <label for="owner">Le propriétaire </label>
                    <select id="owner" name="owner" class="form-control">
                        <option selected
                                value=" <?php echo e(isset($chien) ? $chien->owner : '0'); ?>"> <?php echo e(isset($chien) ? $chien->owner : 'Moi'); ?></option>
                        <option value="1">Autre</option>

                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="own">Ce chien est chez moi </label>
                    <select id="own" name="own" class="form-control">
                        <option selected
                                value=" <?php echo e(isset($chien) ? $chien->own : '1'); ?>"> <?php echo e(isset($chien) ? $chien->own : 'Oui'); ?></option>
                        <option value="0">Non</option>

                    </select>
                </div>

            </div>
            <input type="hidden" name="id" value=" <?php echo e(isset($chien) ? $chien->id : ''); ?>">
            <button type="submit" class="btn btn-primary">Entrer</button>
        </form>
        <br><br><br>
    <?php endif; ?>
    <?php if(isset($chien)): ?>


        <div class="row">
            <div class="alert alert-success col-12" role="alert">
                Un petit tour sur <a href="https://tinypng.com">Tinypng</a>
            </div>
        </div>
        <div class="form-group col-12">
            <form role="form" method="post" action="<?php echo e(route('upload/image')); ?>"
                  enctype="multipart/form-data">
            <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
                <input type="file" name="image[]" multiple="multiple">
                <input type="hidden" name="folder" value="chiens">
                <input type="hidden" name="id" value="<?php echo e(isset($chien) ? $chien->id : ''); ?>">
                <button type="submit" class="btn btn-primary" data-buttonText="Browse">Enoyer les images</button>
            </form>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card-group">
                    <div class="row">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-2 ">
                                <div class="card ">
                                    <img class="maxImgAdmin embed-responsive"
                                         src="/public/storage/chiens/<?php echo e($image->slug); ?><?php echo e($image->ext); ?>"
                                         alt="Album : <?php echo e($chien->name); ?>">
                                    <div class="card-body center">
                                        <form action="<?php echo e(route('admin/update/pos')); ?>" method="get">
                                            <input class="input_style" type="number" name="pos" value="<?php echo e($image->pos); ?>">
                                            <input type="hidden" name="id" value="<?php echo e($image->id); ?>">
                                            <input type="hidden" name="folder" value="chiens">
                                            <input type="hidden" name="id_folder" value="<?php echo e($chien->id); ?>">
                                        </form>
                                        <a href="<?php echo e(route('delete/image', ['folder' => 'chiens', 'id_folder' => $chien->id, 'id_image' => $image->id, 'slug' => $image->slug . '' . $image->ext])); ?>"
                                           title="Suprimer l'image">
                                            <button class="btn btn-danger btn-sm">X</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>