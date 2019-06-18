<?php $__env->startSection('content'); ?>

<div class="row">
    <!-- Map Column -->
    <div class="col-md-8">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9073.863480115748!2d4.441896770394585!3d43.785639432118664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d14632dc2bba63f!2sLes+Joyeux+Cabots!5e1!3m2!1sfr!2sfr!4v1502381468361"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-md-4"  itemscope itemtype="http://schema.org/Person">
        <h3>Contact Details</h3>
        <p><span itemprop="address">
                   Lieu Dit Le Canabier
                    <br>Chemin de Bellegarde
                    <br>30230 Bouillargues<br>
                    France
                    </span>
        </p>
        <p><i class="fas fa-phone"></i>
            <abbr title="Phone">Portable <span itemprop="name">Marielle</span> : </abbr> <span itemprop="telephone">+33 6 09 83 61 53</span></p>
        <p><i class="fas fa-phone"></i>
            <abbr title="Phone">Portable <span itemprop="name">Emiliano</span> : </abbr> <span itemprop="telephone">+33 6 22 31 68 85</span></p>
        <p><i class="fas fa-envelope"></i>
            <abbr title="Email">Email</abbr> : <span itemprop="email"><a href="mailto:delalegendeasturienne@yahoo.com">delalegendeasturienne@yahoo.com</a></span>
        </p>


    </div>
</div>
<!-- /.row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>