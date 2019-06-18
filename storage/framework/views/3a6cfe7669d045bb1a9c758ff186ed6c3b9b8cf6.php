<?php $__env->startSection('content'); ?>
    <?php if(isset($albums)): ?>
        <form role="form" method="get" action="<?php echo e(route('admin/modify/albums/vue/filled')); ?>">
            <div class="row center">
                <div class="col-5 offset-4">
                    <label for="id">Choisir le chien à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($a->id); ?>"><?php echo e($a->name); ?></option>
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
        <?php if(isset($album)): ?>
        <div class="row center">
            <div class="alert alert-success col-12" role="alert">
                <a href="/album/details/<?php echo e($album->id); ?>" class="alert-link">Liens de l'album</a>
            </div>
        </div>
    <?php endif; ?>
        <div class="row">
            <div class="center col-12">
                <form role="form" method="post" action="<?php echo e(route('admin/add/album')); ?>">
                <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->

                    <div class="form-group col-12">
                        <label for="name">Titre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Titre"
                               value="<?php echo e(isset($album) ? $album->name : ''); ?>" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="info">Informations</label>
                        <textarea class="form-control" id="info" name="info" rows="3">
                    <?php echo e(isset($album) ? $album->info : ''); ?>

                </textarea>
                    </div>

                    <input type="hidden" name="id" value="<?php echo e(isset($album) ? $album->id : ''); ?>">
                    <button type="submit" class="btn btn-primary">Entrer !
                    </button>
                </form>
                <br>
            </div>
            <?php if(isset($album)): ?>
                <div class="form-group col-6">
                    <form role="form" method="post" action="<?php echo e(route('upload/image')); ?>"
                          enctype="multipart/form-data">
                    <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
                        <input type="file" name="image[]" multiple="multiple">
                        <input type="hidden" name="folder" value="albums">
                        <input type="hidden" name="id" value="<?php echo e(isset($album) ? $album->id : ''); ?>">
                        <button type="submit" class="btn btn-primary" data-buttonText="Browse">Uplaod</button>
                    </form>
                </div>

                <div class="form-group col-6">
                    <form role="form" method="post" action="<?php echo e(route('upload/video')); ?>"
                          enctype="multipart/form-data">
                    <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
                        <label>Ajouter le lien d'une vidéo</label>
                        <input type="text" name="lien" placeholder="http://..." required>
                        <input type="hidden" name="folder" value="albums">
                        <input type="hidden" name="id" value="<?php echo e(isset($album) ? $album->id : ''); ?>">
                        <button type="submit" class="btn btn-primary" data-buttonText="Browse">Uplaod</button>
                    </form>
                </div>



                <div class="row">
                    <div class="col-12">
                        <div class="card-group">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card">
                                    <?php if($image->ext != 'video'): ?>
                                    <img class="maxImgAdmin" src="/storage/albums/<?php echo e($image->slug); ?><?php echo e($image->ext); ?>"
                                         alt="Album : <?php echo e($album->name); ?>">
                                    <?php endif; ?>
                                    <div class="card-body center">

                                        <?php if($image->pos != 1): ?>
                                            <a href="<?php echo e(route('delete/image', ['folder' => 'albums', 'id_folder' => $album->id, 'id_image' => $image->id, 'slug' => $image->slug . '' . $image->ext])); ?>"
                                               title="Suprimer l'image">
                                                <button class="btn btn-danger">X</button>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>


    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>