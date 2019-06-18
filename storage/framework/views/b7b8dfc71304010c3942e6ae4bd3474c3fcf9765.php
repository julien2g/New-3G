<?php $__env->startSection('content'); ?>
    <?php if(isset($portees)): ?>
        <form role="form" method="get" action="<?php echo e(route('admin/modify/portee/vue/filled')); ?>">
            <div class="row center">
                <div class="col-5 offset-md-4">
                    <label for="id">Choisir la portée à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        <?php $__currentLoopData = $portees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($c->id); ?>"><?php echo e($parents[$key]['dad']->name); ?>

                                ---X---<?php echo e($parents[$key]['mom']->name); ?></option>

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
            <form role="form" method="post" action="<?php echo e(route('admin/add/portee')); ?>">
            <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
                <div class="row">
                    <div class="form-group col-6">
                        <label for="dad">Père</label>
                        <select id="dad" name="dad" class="form-control">
                            <?php if(isset($dad)): ?>
                                <?php $__currentLoopData = $dad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php $__currentLoopData = $choice_dad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="mom">Mère</label>
                        <select id="mom" name="mom" class="form-control">
                            <?php if(isset($mom)): ?>
                                <?php $__currentLoopData = $mom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($m->id); ?>"><?php echo e($m->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php $__currentLoopData = $choice_mom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($m->id); ?>"><?php echo e($m->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="sex">Date de procréation </label>
                        <input type="text" class="form-control" id="sex" name="sex" placeholder=YYYY-MM-DD
                               value="<?php echo e(isset($portee) ? $portee->sex_date : ''); ?>" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="birth">Date de naissance </label>
                        <input type="text" class="form-control" id="birth" name="birth" placeholder="YYYY-MM-DD"
                               value="<?php echo e(isset($portee) ? $portee->birth_date : ''); ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="infos">Informations</label>
                        <textarea class="form-control" id="infos" name="infos" rows="3">
                    <?php echo e(isset($portee) ? $portee->infos : ''); ?>

                </textarea>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo e(isset($portee) ? $portee->id : ''); ?>">
                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Entrer !
                        </button>
                    </div>
                </div>
            </form>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>