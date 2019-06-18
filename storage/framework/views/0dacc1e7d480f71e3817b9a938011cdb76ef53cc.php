<?php $__env->startSection('content'); ?>
    <?php if(isset($news)): ?>
        <form role="form" method="get" action="<?php echo e(route('admin/modify/news/vue/filled')); ?>">
            <div class="row center">
                <div class="col-5 offset-4">
                    <label for="id">Choisir le chien à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
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
        <div class="center">
            <form role="form" method="post" action="<?php echo e(route('admin/add/news')); ?>">
            <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
                <div class="row">
                    <div class="form-group col-3">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titre"
                               value="<?php echo e(isset($new) ? $new->title : ''); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="info">Informations</label>
                        <textarea class="form-control" id="info" name="text" rows="3">
                    <?php echo e(isset($new) ? $new->text : ''); ?>

                </textarea>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo e(isset($new) ? $new->id : ''); ?>">
                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Envoyer la news !
                        </button>
                    </div>
                </div>
            </form>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>