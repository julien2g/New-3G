@extends('layouts.app')

@section('content')

    <ul class="nav justify-content-center">
        <li class="nav-item nav-pills">
            <a class="nav-link {{ $title == 'adopter_pour_la_vie' ? 'active' : '' }}"
               href="{{route('explaination', ['title' => 'adopter_pour_la_vie'])}}">Adoption</a>
        </li>
        <li class="nav-item nav-pills">
            <a class="nav-link {{ $title == 'les_besoins_des_bergers_australiens' ? 'active' : '' }}"
               href="{{route('explaination', ['title' => 'les_besoins_des_bergers_australiens'])}}">Besoins</a>
        </li>
        <li class="nav-item nav-pills">
            <a class="nav-link {{ $title == 'mauvais_marquage_blanc' ? 'active' : '' }}"
               href="{{route('explaination', ['title' => 'mauvais_marquage_blanc'])}}">Robe blanche</a>
        </li>
    </ul>

    <br>
    <div class="row ">
        <div class="col-12">

            @if( $title == 'adopter_pour_la_vie')

                <img class="img-thumbnail" src="{{url('public/storage/img/adopt.jpg')}}"
                     alt="Elevage de chiens berger Australien Sud" title="Elevage de chiens berger Australien">


                <h1 class="page-header center">Adopter un animal de compagnie</h1>
                <h3 class="page-header center text-muted">C'est pour le vie !</h3>

                <hr>
        </div>
        <div class="col-12">
            <p>Avant de penser à adopter un berger australien, il faut savoir quel maître il lui faut. Effectivement
                cette race de chien doit être éduquée et quelques rudiments de base en matière d’éducation canine
                doivent être acquis.</p>
            <p>Les chiens de cette race sont bons avec les animaux avec lesquels ils ont grandi, inutile de s’inquiéter
                sur ce point.</p>
            <p>Si ses critères sont rassemblés, un berger australien sera heureux avec vous.</p>
            <p>Adopter un berger australien, qu’il soit chiot ou adulte reste une décision importante, engageant à long
                terme les propriétaires. Effectivement ce chien vit en moyenne 13 ans.</p>
            <p>Élever un berger australien est une aventure formidable. Cela dit, comme tous les chiens et notamment
                chez les jeunes chiens, des bêtises seront faites : des trous dans le jardins, des objets mâchouillés,
                des oublis de pipis ou cacas…</p>
            <p>Adopter un berger australien change quelque peu la vie mais apporte un bonheur immense aux familles.</p>
            <p>Pour finir, comme tous les chiens, si vous adoptez un chien de cette race, prenez le temps de vous en
                occuper. Avec du temps, du sport et de l’affection, vous arriverez à développer une relation hors du
                commun avec votre berger australien. Personne ne sera aussi fidèle qu’un berger en pleine confiance avec
                ses maîtres.</p>

            <p> Source: <a href="http://berger-australien-officiel.com/adopter"
                           title="Adopter un berger australien"><strong>Berger australien Officiel</strong> </a></p>


            @elseif( $title == 'les_besoins_des_bergers_australiens')
                <div class="center">
                    <img class="img-thumbnail" src="{{url('public/storage/img/sport.png')}}"
                         alt="Elevage de chiens berger Australien Sud" title="Elevage de chiens berger Australien">
                </div>
                <h1 class="page-header center "> Besoin d'une bonne activités physiques</h1>
                <hr>

                <h3>Son caractère</h3>

                <p>Vif et adapté aux sportifs, le berger australien est renommé pour sa grande rapidité. Il a
                    toutes les qualités qui en font un excellent gardien de troupeaux qu’ils soient bovins, ovins ou à
                    plumes.</p>
                <p>Le cani-cross ou l’agility (disciplines sportives), le cavage et la fouille de décombres font
                    également partie de ses nombreuses fonctions.</p>
                <p>Très sociable et très tolérant, ce chien s’adapte très bien à la vie familiale. Il est très attachant
                    et il adore la compagnie.</p>
                <p>Son courage, son agilité, sa loyauté, sa dévotion et son équilibre font du berger australien un
                    excellent chien pour les enfants. Sa constance de caractère lui donne beaucoup de souplesse et de
                    facilité.</p>
                <p>Il adore le travail et l’exécute avec enthousiasme et avec grande allure.</p>
                <p>Très pot de colle, le berger australien n’aime pas trop la solitude. Il suit ses maîtres partout dans
                    la maison.</p>

                <h3>Sa santé</h3>

                <p>La dysplasie de la hanche et du coude est parfois présente chez la race. Généralement les éleveurs
                    procèdent à des tests afin d’éliminer les risques potentiels de ces maladies lors de la
                    reproduction. Les sujets atteints sont écartés du processus de reproduction.</p>
                <p>Les tares oculaires comme l’œil rouge, la conjonctivite, les cataractes ou l’épiphora sont très
                    répandus chez la race. Il arrive également qu’elle soit touchée par des problèmes d’épilepsie.</p>
                <p>Pour la race des bergers australiens, il ne faut surtout pas accoupler deux parents de couleur
                    ‘’merle’’. A l’état homozygote, le gêne ‘’merle’’ est récessif. Il peut provoquer la naissance de
                    chiots avec de graves problèmes de santé comme la surdité et/ou la cécité.</p>


                <h3>Entretien</h3>

                <p>Le berger australien possède un poil auto-nettoyant, aucun bain n’est donc nécessaire si ce n’est
                    qu’une seule fois par année. Autrement, vous allez abîmer sa fourrure. Un brossage régulière de 1 à
                    2 fois par semaine sera suffisant. Durant les périodes de mue (printemps et autonome), un brossage
                    quotidien est recommandé. Vous éviterez ainsi la création de nœuds et vous lui débarrasserez d’une
                    quantité importante de poils morts. Durant les périodes de brossages, porter une attention
                    particulière où les nœuds peuvent facilement se créer (dernière les oreilles, dernière les pattes et
                    sa culotte).</p>

                <p>Source : <a href="https://www.dogsplanet.com/race-de-chien/berger-australien" title="gogsplanet.com">
                        Dogsplanet.com</a></p>

            @elseif( $title == 'mauvais_marquage_blanc')

                <div class="center">
                    <img class="img-thumbnail" src="{{url('public/storage/img/sport.png')}}"
                         alt="Elevage de chiens berger Australien Sud" title="Elevage de chiens berger Australien">
                </div>
                <h1 class="page-header center "> Un mauvais marquage ou blanc envahissant ?</h1>
                <hr>

                <p>Les chiens avec un excès des marquages blancs sont parfois appelés des blancs envahissant ou des
                    mauvais marquages. Les bergers australiens avec trop de blanc sont généralement en bonne santé (les
                    exceptions sont notées ci-dessous). Il existe des races entières qui permettent beaucoup plus de
                    blanc de ce qui est typique chez les Aussies.</p>
                <p> Les standards de race limitent la quantité de marquages blancs qu’un berger australien est censé
                    d’avoir. L’Australian Shepherd Club of America note que les zones autour des yeux et des oreilles
                    doivent être « dominées » par une coloration non-blanche et que le collier blanc ne doit pas
                    s’étendre au-delà du point du garrot, avec des « tâches de blanc sur le corps » répertorié comme une
                    disqualification. L’American Kennel Club est très spécifique : Le blanc est admis au cou (partielle
                    ou en collier complet), la poitrine, les jambes, en dessous du museau, en liste sur la tête et en
                    extension en partant du dessous jusqu’à 10 cm sur les côtés en mesurant d’une ligne horizontale au
                    coude. Le blanc en tête ne doit pas prédominé et les yeux doivent être complètement entourés par la
                    couleur et le pigment.,Le standard AKC disqualifie non seulement les taches blanches sur le corps,
                    mais aussi du blanc sur le dos entre le garrot et la queue ou sur les côtés entre les coudes et le
                    haut de l’arrière train. Les standards dans la plupart des autres pays sont fondés sur le standard
                    AKC.</p>
                <p> Ces restrictions ne sont pas faites simplement pour produire un certain look. Les Aussies qui ont
                    plus de blanc que le montant autorisé peuvent avoir certains problèmes de santé et de solidité. Les
                    chiots de deux parents merle qui ont hérité deux copies du gène de merle ont presque toujours des
                    défauts importants de la vision et de l’audition et ils présentent presque toujours plus de blanc
                    que ce qui est autorisé par les standards. Les chiens de n’importe quelle couleur qui ont beaucoup
                    de blanc sur ou autour des oreilles peuvent être sourd d’une ou les deux oreilles. La peau rose sur
                    le pourtour des yeux, le nez ou la gueule est vu chez les chiens avec un excès de blanc et peuvent
                    être sujet à des dommages du soleil si le chien passe beaucoup de temps à l’extérieur dans des
                    environnements ensoleillés.</p>
                <p> Si un chien non-merle a un excès de blanc et au moins un de ses parents n’est pas merle, la cause
                    est une combinaison de gènes de taches blanches, qui détermine la quantité de blanc sur le corps.
                    Les parents de ce chien sont porteurs du gène(s) qui a abouti à des marquages inacceptables.</p>


                <p>Source : <a
                        href="http://www.ashgi.org/home-page/genetics-info/coat-color/excess-white/excess-white-fr"
                        title="ashgi">ashgi</a></p>


            @endif
        </div>


    </div>




@endsection

