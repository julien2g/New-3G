<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="L'élevage de chien 'De la legende asturienne' vous propose des berger australien pure race, cours particulier afin d'éduquer vos chiens et chiots.">
    <meta name="keywords" content="Elevage berger australien dressage cours d'education chiens chien" />

    <link rel="apple-touch-icon" sizes="57x57" href="/public/storage/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/public/storage/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/storage/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/storage/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/storage/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/storage/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/public/storage/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/storage/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/storage/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/public/storage/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/storage/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/public/storage/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/storage/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/public/storage/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/public/storage/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link rel="icon" type="image/x-icon" href="<?php echo e(url('public/storage/img/logo.png')); ?>"/>
    <title><?php echo e(config('app.name')); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/style.css')); ?>"/>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78539603-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-78539603-3');
    </script>

</head>

<body>
<br/>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="offset-md-5 col-md-4 col-sm-6  center">
                <a href="/">
                    <img src="<?php echo e(url('public/storage/img/logo.png')); ?>" class="logoHeader embed-responsive"
                         alt="Logo de  l'élevage de berger autralien : la legende asturienne"
                         title="Le joli berger autralien de la legende asturienne qui surveille"/></a>
            </div>
            <div class="col-md-3 col-sm-1  right">
                <?php if(auth()->check()): ?>
                    <a href="<?php echo e(route('admin')); ?>">Admin</a>
                <?php endif; ?>
                <a href="https://www.facebook.com/De-La-Legende-Asturienne-101469213959401/?hc_ref=ARTWt0l76u1D_TKFlhUpD-iyBtIpgjDGd_eqZqWML4dP3ohn8gvzWZ1cdN-KvVnP0KM&fref=nf"
                   class="blue" title="Follow us on Facebook"> <i class="fab fa-facebook-square fa-2x"></i></a>
                <br> <a href="https://www.instagram.com/delalegendeasturienne/" class="blue"
                        title="Follow us on Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                <br><a href="https://www.youtube.com/channel/UCjI2c8IZko1BhgXsfz185IA" title="Nous voir sur Youtube"><i
                        class="fab fa-youtube fa-2x blue"></i></a>
            </div>
        </div>
        <ul class="nav nav-tabs nav-fill blue">
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="/">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">Chiens</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item"
                       href="<?php echo e(route('chiens/males')); ?>">Nos mâles</a>
                    <a class="dropdown-item"
                       href="<?php echo e(route('chiens/femelles')); ?>">Nos femelles</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('chiens/ext/')); ?>">Mâles éxterieurs</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">Chiots</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(route('chiot', ['own' => "1"])); ?>">Chiots disponible </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('chiot', ['own' => "0"])); ?>">Chiots nés chez nous</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">Portées</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(route('futures/portees')); ?>">Futures portées</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('anciennes/portees')); ?>">Anciennes portées</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo e(Request::is('albums') ? 'active' : ''); ?>" href="<?php echo e(route('albums')); ?>">Albums</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('album/details/3') ? 'active' : ''); ?> "
                   href="<?php echo e(route('album/details', ['id' => 3])); ?>">Nos instalations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('#') ? 'active' : ''); ?>" href="#">Cours d'éducation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>
            </li>
            
        </ul>
    </div>
    
    </br>
    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4 center">
                    <h5>Notre site</h5>

                    <a href="<?php echo e(route('/')); ?>">Accueil</a>
                    </br>
                    <a href="<?php echo e(route('chiens/males')); ?>"><span
                            itemprop="brand">Nos Mâles</span></a>
                    </br>
                    <a href="<?php echo e(route('chiens/femelles')); ?>"><span
                            itemprop="brand">Nos Femelles</span></a>
                    </br>
                    <a href="<?php echo e(route('chiot', ['own' => 1])); ?>"><span
                            itemprop="brand">Nos Chiots</span></a>
                    </br>
                    <a href="<?php echo e(route('albums')); ?>">Albums</a>
                    </ul>
                </div>
                <div class="col-4 center">
                    <img src="<?php echo e(url('public/storage/img/logo.png')); ?>" class="maxImg embed-responsive"
                         alt="Logo de  l'élevage de berger autralien : la legende asturienne"
                         title="Le joli berger autralien de la legende asturienne qui surveille"/>
                </div>
                <div class="col-4 center">
                    <h5>A propos de nous</h5>

                    <a href="<?php echo e(route('about')); ?>">Notre élevage</a>
                    </br>
                    <a href="#">Activités</a>
                    </br>
                    <a href="<?php echo e(route('album/details', ['id' => 3])); ?>"><span
                            itemprop="hasOfferCatalog">Nos installations</span></a>
                    </br>
                    <a href="<?php echo e(route('contact')); ?>">Contact</a>

                </div>
            </div>

            <div class="row">
                <div class="offset-md-7 col-md-6 right">
                    <form role="form" method="post" action="<?php echo e(route('email')); ?>">
                    <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
                        <table>
                            <tr>
                                <th>Restez informés :</th>
                            </tr>
                            <tr>
                                <th>
                                    <a href="https://www.facebook.com/De-La-Legende-Asturienne-101469213959401/?hc_ref=ARTWt0l76u1D_TKFlhUpD-iyBtIpgjDGd_eqZqWML4dP3ohn8gvzWZ1cdN-KvVnP0KM&fref=nf"
                                       class="blue" title="Follow us on Facebook"> <i
                                            class="fab fa-facebook-square fa-2x"></i></a></th>
                                <th><a href="https://www.instagram.com/delalegendeasturienne/" class="blue"
                                       title="Follow us on Instagram"><i class="fab fa-instagram fa-2x"></i></a></th>
                                <th><a href="https://www.youtube.com/channel/UCjI2c8IZko1BhgXsfz185IA"
                                       title="Nous voir sur Youtube"><i class="fab fa-youtube fa-2x blue"></i></a></th>
                            </tr>
                        </table>
                    </form>
                        <input class="col-sm-6 col-m-6" type="email" name="email" placeholder="Votre email">
                        <button type="submit" class="btn btn-sm btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </footer>
    <br>
</div>
</body>
</html>
