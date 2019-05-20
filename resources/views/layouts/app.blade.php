<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Elevage de la legende Asturienne') }}</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>


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


</head>

<body>
<br/>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-4 center">
            </div>
            <div class="col-4 center">
                <a href="/">
                    <img src="{{url('/storage/img/logo.png')}}" class="logoHeader"
                         alt="Logo de  l'élevage de berger autralien : la legende asturienne"
                         title="Le joli berger autralien de la legende asturienne qui surveille"/></a>
            </div>
            <div class="col-4 right">
                <a href="{{route('admin')}}"> Social media</a>
                <a href="https://www.facebook.com/De-La-Legende-Asturienne-101469213959401/?hc_ref=ARTWt0l76u1D_TKFlhUpD-iyBtIpgjDGd_eqZqWML4dP3ohn8gvzWZ1cdN-KvVnP0KM&fref=nf"
                   class="blue" title="Follow us on Facebook"> <i class="fab fa-facebook-square fa-2x"></i></a>
                <br> <a href="https://www.instagram.com/delalegendeasturienne/" class="blue"
                        title="Follow us on Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                <br><i class="fab fa-youtube fa-2x blue"></i>
            </div>
        </div>
        <ul class="nav nav-tabs nav-fill blue">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Acceuil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">Chiens</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item"
                       href="{{route('chiens/males')}}">Nos mâles</a>
                    <a class="dropdown-item"
                       href="{{route('chiens/femelles')}}">Nos femelles</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('chiens/ext/')}}">Mâles éxterieurs</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">Chiots</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('chiot', ['own' => "1"])}}">Chiots disponible </a>
                    <a class="dropdown-item" href="{{route('futures/portees')}}">Futures portées</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('chiot', ['own' => "0"])}}">Chiots nés chez nous</a>
                    <a class="dropdown-item" href="{{route('anciennes/portees')}}">Anciennes portées</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ Request::is('albums') ? 'active' : '' }}" href="{{route('albums')}}">Albums</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('album/details/3') ? 'active' : '' }} "
                   href="{{route('album/details', ['id' => 3])}}">Nos instalations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{route('about')}}">A propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button alert-success" href="{{route('contact')}}">Mon guide offert</a>
            </li>
        </ul>
    </div>
    {{-- <nav class=" bottom fixed-bottom navbar navbar-dark bg-primary ">
         <a class="navbar-brand" href="#">Fixed bottom</a>

         <a class="nav-link dropdown-toggle black" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Chiens</a>
         <div class="dropdown-menu">
             <a class="dropdown-item"
                href="{{route('add/chien')}}">Ajouter un chien</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item"
                href="{{route('modify/chien')}}">Modifier un chien</a>


         </div>


     </nav>--}}
    </br>
    <main class="container">
        @yield('content')
    </main>
    <hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4 center">
                    <h5>Notre site</h5>

                    <a href="{{route('/')}}">Accueil</a>
                    </br>
                    <a href="{{route('chiens/males')}}"><span
                            itemprop="brand">Nos Mâles</span></a>
                    </br>
                    <a href="{{route('chiens/femelles')}}"><span
                            itemprop="brand">Nos Femelles</span></a>
                    </br>
                    <a href="{{route('chiot', ['own' => 1])}}"><span
                            itemprop="brand">Nos Chiots</span></a>
                    </br>
                    <a href="{{route('albums')}}">Albums</a>
                    </ul>
                </div>
                <div class="col-4 center">
                    <img src="{{url('/storage/img/logo.png')}}" class="maxImg embed-responsive"
                         alt="Logo de  l'élevage de berger autralien : la legende asturienne"
                         title="Le joli berger autralien de la legende asturienne qui surveille"/>
                </div>
                <div class="col-4 center">
                    <h5>A propos de nous</h5>

                    <a href="#">Notre élevage</a>
                    </br>
                    <a href="#">Activités</a>
                    </br>
                    <a href="{{route('album/details', ['id' => 3])}}"><span
                            itemprop="hasOfferCatalog">Nos installations</span></a>
                    </br>
                    <a href="{{route('contact')}}">Contact</a>

                </div>
            </div>
            <div class="row">
                <div class="offset-7 col-5 right">
                    <form role="form" method="post" action="{{ route('email') }}">
                    @csrf <!-- {{ csrf_field() }} -->
                        <table>
                            <tr>
                                <th>Restez informés :</th>
                            </tr>
                            <tr>
                                <th>

                                    <input type="email" name="email" placeholder="Votre email">


                                </th>
                                <th><button type="submit" class="btn btn-primary">Confirm</button></th>
                                <th>
                                    <a href="https://www.facebook.com/De-La-Legende-Asturienne-101469213959401/?hc_ref=ARTWt0l76u1D_TKFlhUpD-iyBtIpgjDGd_eqZqWML4dP3ohn8gvzWZ1cdN-KvVnP0KM&fref=nf"
                                       class="blue" title="Follow us on Facebook"> <i
                                            class="fab fa-facebook-square fa-2x"></i></a></th>
                                <th><a href="https://www.instagram.com/delalegendeasturienne/" class="blue"
                                       title="Follow us on Instagram"><i class="fab fa-instagram fa-2x"></i></a></th>
                                <th><i class="fab fa-youtube fa-2x blue"></i></th>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <br>
</div>
</body>
</html>
