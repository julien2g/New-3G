@extends('layouts.app')

@section('content')
    <h3 class="center">Actualités</h3>
    <div class="row">
        @foreach($news as $n)
            <div class="jumbotron col-12">
                <h3>{{$n->title}}</h3>

                <hr class="my-4">
                <p>{{$n->text}}</p>
                <p class="right">{{$n->date}}</p>
            </div>
        @endforeach
    </div>

    <div class="blue">
        {{ $news->links() }}

    </div>
    <hr>

    <div class="row">
        <div class="col-12">
            <h1 class="page-header center">Les premiers <strong>Bergers Australiens</strong> qui nous ont donné envie de
                devenir <strong>éleveurs canins</strong>.</h1>
        </div>
        <div class="col-6">
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

        <div class="col-6">
            <img class="img-thumbnail" src="{{url('/storage/img/Les3.png')}}"
                 alt="Elevage de chiens berger Australien Sud" title="Elevage de chiens berger Australien">

        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <hr>

    <h3 class="center">A savoir</h3>


    <div class="row center">
        <div class="col-sm-4">
            <div class="card minCard">
                <div class="minImgCard">
                    <img src="{{url('/storage/img/adopt.jpg')}}" class="card-img-top "
                         alt="Adopter un animal de compagnie c'est pour la vie"
                         title="L'enfant et le berger australien">
                </div>
                <div class="card-body">
                    <div class="minCardTitle">
                        <h5 class="card-title">Adopter un animal de compagnie</h5>
                        <h8 class="card-title text-muted">C'est pour le vie !</h8>
                    </div>
                    <hr>
                    <p class="card-text">Adopter un <strong>berger australien</strong>, qu’il soit chiot ou adulte reste
                        une décision
                        importante, engageant à long terme les propriétaires. Effectivement ce chien vit en moyenne 13
                        ans,
                        il y aura alors à son arrivée des conséquences sur l’avenir.</p>

                </div>
                <a href="{{route('explaination', ['title' => 'adopter_pour_la_vie'])}}" rel="nofollow"><img
                        src="{{url('/storage/img/pate.png')}}" class="pate" height="100px" width="100px"
                        alt="Pate de berger australien" title="Plus de détails"> </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card minCard">
                <div class="minImgCard">
                    <img src="{{url('/storage/img/sport.png')}}" class="card-img-top "
                         alt="La tribu de berger australien" title="La tribu de berger australien">
                </div>
                <div class="card-body">
                    <div class="minCardTitle">
                        <h5 class="card-title ">Les besoins des berger australiens</h5>
                    </div>
                    <hr>
                    <h8 class="card-title ">Ce sont des
                        <stong>chiens</stong>
                        tres actifs
                    </h8>

                    <p class="card-text">Très vif et très adapté aux sportifs, le <strong>berger australien</strong> est
                        renommé pour sa grande rapidité.</p>

                </div>
                <a href="{{route('explaination', ['title' => 'les_besoins_des_bergers_australiens'])}}"
                   rel="nofollow"><img
                        src="{{url('/storage/img/pate.png')}}" class="pate" height="100px" width="100px"
                        alt="Pate de berger australien" title="Plus de détails"> </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card minCard">
                <div class="minImgCard">
                    <img src="{{url('/storage/img/sport.png')}}" class="card-img-top"
                         alt="La tribu de berger australien" title="La tribu de berger australien">
                </div>
                <div class="card-body">
                    <div class="minCardTitle">
                        <h5 class="card-title ">Un mauvais marquage ou blanc envahissant</h5>
                        <h8 class="card-title text-muted">Attention !</h8>
                    </div>
                    <hr>

                    <p class="card-text">Les chiens avec un excès des marquages blancs sont parfois appelés des blancs
                        envahissant ou des mauvais marquages.</p>

                </div>
                <a href="{{route('explaination', ['title' => 'mauvais_marquage_blanc'])}}" rel="nofollow"><img
                        src="{{url('/storage/img/pate.png')}}" class="pate" height="100px" width="100px"
                        alt="Pate de berger australien" title="Plus de détails"> </a>
            </div>
        </div>
    </div>




@endsection

