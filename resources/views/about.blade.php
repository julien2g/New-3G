@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="page-header center">Les premiers <strong>Bergers Australiens</strong> qui nous ont donné envie de
                devenir <strong>éleveurs canins</strong>.</h1>
        </div>
        <div class="col-md-6 col-sm-12">
            <p>C’est grâce à ces trois grosses boules de poils que nous avons eu envie de partager notre amour pour les
                <strong>Bergers Australiens</strong>.</p>

            <p>C’est une <strong>race de chien</strong> qui peut tout à fait convenir comme chien de famille mais
                également comme chien de travail.</p>

            <p><strong>Les Bergers Australiens</strong> aiment toutes sortes d’activités comme l’agility, le dog dance
                et de manière générale tout ce que son maître partagera de positif avec lui.</p>

            <p>Cette race de chien est très présente également dans les <strong>expositions canines</strong>. Il existe
                plusieurs couleurs de robe telles que <strong>le noir tricolore, le rouge tricolore, le bleu merle ou
                    encore le rouge merle</strong>. Leurs yeux peuvent être bleus, marrons ou même vairons (un oeil de
                chaque couleur).</p>
        </div>

        <div class="col-md-6 col-sm-12">
            <img class="img-thumbnail" src="{{url('/storage/img/Les3.png')}}"
                 alt="Elevage de chiens berger Australien Sud" title="Elevage de chiens berger Australien">

        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <h3 class="center">Notre équipe</h3>
    <div class="row">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{url('/storage/img/maman.png')}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Marielle GADEA</h5>
                        <p class="card-text">
                            <small class="text-muted">Eleveuse de Bergers Australiens</small>

                        <p><small>Portable : +33 6 09 83 61 53</small></p>
                        <p><small> Email : <a href="mailto:delalegendeasturienne@yahoo.com">delalegendeasturienne@yahoo.com</a></small></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card md-3" style="max-width: 540px;">
            <div class="row no-gutters">

                <div class="col-md-8">
                    <div class="card-body right">
                        <h5 class="card-title">Emiliano GUTIERREZ</h5>
                        <p class="card-text">
                            <small class="text-muted">Eleveur de Bergers Australiens</small>
                        <p><small>Portable : +33 6 22 31 68 85</small></p>
                        <p><small> Email : <a href="mailto:delalegendeasturienne@yahoo.com">delalegendeasturienne@yahoo.com</a></small></p>
                        </p>

                    </div>
                </div>
                <div class="col-md-4 ">

                    <img src="{{url('/storage/img/emile.png')}}" width="200px" height="318px" class="card-img"
                         alt="...">

                </div>
            </div>
        </div>
    </div>
    <br>

    <h3 class="center">Notre histoire</h3>
    <div class="row">

        <p>Nous avons eu notre premier <strong>Berger Australien</strong> début 2012. C’était une petite boule de poils âgée de trois mois, très attachante et très gentille, qui se nomme <a href="{{route('details', ['id' => 1])}}">GEO de la Lauze aux Micocouliers</a>.</p>

        <p>Nous avons cherché un club d’éducation canine et sommes devenus adhérents à l’Association Canine des Joyeux Cabots à Bouillargues (30), anciennement sur Garons (30).</p>

        <p>Au fil du temps, nous nous sommes investis dans le club et sommes devenus moniteurs « stagiaires » dans un premier temps, puis nous avons passé notre MEC1 (Moniteur Educateur Canin), afin de pouvoir assurer les cours en totale autonomie.</p>

        <p>Puis, nous avons voulu agrandir la famille, et de là est arrivée <a href="{{route('details', ['id' => 13])}}">LITTLE BLACK SWAN</a> « dit <a href="{{route('details', ['id' => 13])}}">SWAN</a> » des Allées Brumeuses, <strong>Berger Australien</strong> femelle, que nous avons eue fin 2015 à l’âge de trois mois.</p>

        <p>Nous sommes tombés « amoureux » de cette race car se sont des compagnons très agréables et à l’écoute. Des chiens de famille sans nul doute, même si parfois un peu têtus :-)</p>

        <p>De là, nous avons choisi de changer d’orientation professionnelle et avons décidé de devenir éleveurs de <strong>Bergers Australiens</strong>.</p>

        <p>Nous avons pris une troisième femelle cet été, notre petite <a href="{{route('details', ['id' => 2])}}">NEEDED ME</a> «  dit <a href="{{route('details', ['id' => 2])}}">NEED</a> » of Falnette History, âgée alors de cinq mois.</p>

        <p>Nos trois chiens ont des caractères tout de même assez différents mais n’en sont pas moins tous extraordinaires.</p>

        <p>Tous nos <strong>Bergers Australiens</strong> passent ou passeront le Test de Sociabilité, le CSAU (Certificat de Sociabilité et d’Aptitude à l’Utilisation) et actuellement nous entraînons SWAN et NEED afin de passer le <strong>Brevet de Sauvetage</strong> puis par la suite le Test de <strong>Qualification de Sauvetage</strong>.</p>

        <p>Nous avons fait toutes sortes d’activités avec nos <strong>Bergers Australiens</strong> (éducation bien sûr mais aussi des expos  <strong>beauté</strong>, de l’ <strong>agility</strong>, du  <strong>troupeau</strong> et du  <strong>sauvetage</strong>).</p>

        <p>Nos structures se composent de 10 box individuels de minimum 25 m2 et un box double de 30 m2. Nos chiens sont sortis plusieurs fois par jour sur un terrain d’environ deux hectares, ils sont et seront socialisés et sociabilisés, éduqués, sortis en ville, au marché et mis en diverses situations afin de leur permettre d’évoluer confortablement et aisément dans notre monde.</p>

        <p>En ce qui nous concerne, au delà de notre MEC1, nous avons également notre attestation de connaissances (anciennement certificat de capacité), nous avons aussi suivi des formations sur l’actualisation des connaissances (module comportement), l’école du chiot et les premiers secours canins. D’autres formation seront à venir sur l’année 2019 et 2020 car nous souhaitons rester actifs dans le domaine de la connaissance pour être toujours plus près de nos Bergers Australiens.</p>

        <p>Nous vous invitons à découvrir nos albums photos ainsi que les autres rubriques (activités, installations….).</p>

        <p>N’hésitez pas à vous aventurer dans la rubrique « contact » si vous souhaitez des renseignements complémentaires.</p>


    </div>

    <h3 class="center">Nos racines</h3>
    <div class="row">

        <div class="card col-12">
            <div class="row no-gutters">
                <div class="col-6">
                    <img src="{{url('/storage/img/1.jpg')}}" class="card-img" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Le pont de covadonga</h5>
                        <p class="card-text">Voila le pont le plus representatif de notre si belle region avec la crois
                            des asturies suspendu au millieux. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>
    <div class="row right">
        <div class="card col-12">
            <div class="row no-gutters">

                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">L'oreo</h5>
                        <p class="card-text">En voila une bonne invention, à votre avis, que cela pourrait bien être ?
                            En faite cette cabane et le fruit de recherches abouti, cela sert à stocker les ressourses.
                            Mais si vous faite bien attention les marches sont bien eloigné de la cabanne de tel sorte à
                            evité que n'importe quel animal ne puisse entrer et, devorer les ressources stocké.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{url('/storage/img/5.jpg')}}" class="card-img" alt="...">
                </div>
            </div>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="card col-12">
            <div class="row no-gutters">
                <div class="col-6">
                    <img src="{{url('/storage/img/3.jpg')}}" class="card-img" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Le cidre</h5>
                        <p class="card-text">Le cidre de la region des Asturie est fameux pour son tres bon goût tres frais servis dans l'emblematique verre des asturies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

