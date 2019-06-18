@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Accueil</a></li>
            @if($chien->sex == 1 && $chien->adult == 1 && $chien->own == 1)
                <li class="breadcrumb-item"><a href="{{route('chiens/males')}}">Nos mâles</a></li>
            @elseif ($chien->sex == 0 && $chien->adult == 1 && $chien->own == 1)
                <li class="breadcrumb-item"><a href="{{route('chiens/femelles')}}">Nos femelles</a>
                </li>
            @elseif($chien->own == 0)
                <li class="breadcrumb-item"><a href="{{route('chiens/ext/')}}">Mâles exterieur</a>
                </li>
            @elseif ($chien->adult == 0 && $chien->own == 1)
                <li class="breadcrumb-item"><a href="{{route('chiot', ['own' => 1])}}">Chiots diponibles</a></li>
            @elseif ($chien->adult == 0  && $chien->own == 0)
                <li class="breadcrumb-item"><a href="{{route('chiot', ['own' => 0])}}">Chiots nés chez nous</a></li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">{{$chien->race}}</li>
            <li class="breadcrumb-item active" aria-current="page">{{$chien->name}}</li>
        </ol>
    </nav>

    <hr>

    <div class="row justify-content-center" itemscope itemtype="http://schema.org/Product">
        <div class="col-8 ">
            <!--Caroussel-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($images as $image)
                        @if($image->id_chien == $chien->id)
                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                @if($image->pos == 1) class="active" @endif
                            ></li>
                        @endif
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($images as $image)
                        @if($image->id_chien == $chien->id)

                            <div class="carousel-item  @if($image->pos == 1) active @endif">
                                <a data-toggle="modal" data-target=".bd-example-modal-xl">
                                    <img
                                        src="/public/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                        class="d-block w-100 "
                                        alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                        title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne. Photo uploadée le : {{$image->created_at}}">
                                </a>
                            </div>

                        @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="center" itemscope itemtype="http://schema.org/Product">
                        <h4 itemprop="name">{{$chien->name}}</h4>
                        <h6 class="text-muted">{{$chien->race}} </h6>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text " itemprop="description">{{($chien->info)}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <h4 class="text-muted center">{{$chien->title}} </h4>
            <div class="card ">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'expostions' || $title == '' ? 'active' : '' }}"
                               href="{{route('details', ['id'=>$chien->id, 'title'=>'expostions']) }}">Expositions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'concours' ? 'active' : '' }}"
                               href="{{route('details', ['id'=>$chien->id, 'title'=>'concours']) }}">Concours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'analyses' ? 'active' : '' }}"
                               href="{{route('details', ['id'=>$chien->id, 'title'=>'analyses']) }}">Analyses</a>
                        </li>
                        @if(($chien->id_portee))
                            <li class="nav-item ">
                                <a class="nav-link {{ $title == 'pere' ? 'active' : '' }}"
                                   href="{{route('details', ['id'=>$chien->id, 'title'=>'pere']) }}">Père</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $title == 'mere' ? 'active' : '' }}"
                                   href="{{route('details', ['id'=>$chien->id, 'title'=>'mere']) }}">Mère</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="card-body {{ $title == 'expostions' || $title == '' ? '' : 'd-none' }}">

                    <p class="card-text">{{($chien->expositions)}}</p>

                </div>
                <div class="card-body {{ $title == 'concours' ? '' : 'd-none' }}">

                    <p class="card-text">{{($chien->awards)}}</p>

                </div>
                <div class="card-body {{ $title == 'analyses' ? '' : 'd-none' }}">

                    <p class="card-text">{{($chien->analyses)}}</p>

                </div>
                @if(($chien->id_portee))
                    <div class="card-body {{ $title == 'pere' ? '' : 'd-none' }}">
                        <a href="{{route('details', ['id'=>$parents[0]->id])}}">
                            <h5>{{$parents[0]->name}}</h5>
                            <br>
                            <img src="/public/storage/chiens/{{$parents_image[0]->slug}}{{$parents_image[0]->ext}}"
                                 class="card-img-top maxImg"
                                 alt="{{$parents[0]->name}} de l'élevage de {{$parents[0]->race}} : De la légende asturienne"
                                 title="{{$parents[1]->name}} de l'élevage de {{$parents[1]->race}} : De la légende asturienne. . Photo uploadée le : {{$parents_image[0]->created_at}} ">

                        </a>
                    </div>
                    <div class="card-body {{ $title == 'mere' ? '' : 'd-none' }}">
                        <a href="{{route('details', ['id'=>$parents[1]->id])}}">
                            <h5>{{$parents[1]->name}}</h5>
                            <br>
                            <img src="/public/storage/chiens/{{$parents_image[1]->slug}}{{$parents_image[1]->ext}}"
                                 class="card-img-top maxImg"
                                 alt="{{$parents[1]->name}} de l'élevage de {{$parents[1]->race}} : De la légende asturienne"
                                 title="{{$parents[1]->name}} de l'élevage de {{$parents[1]->race}} : De la légende asturienne . Photo uploadée le : {{$parents_image[1]->created_at}}">

                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <hr>

    <div class="row justify-content-center">
        <h4 class="blue">Envie de voir à quoi ressemble nos autre chiens ? </h4>
    </div>

    <br>

    <div class="row center">
        @foreach($chiens_rdm as $key=>$chien_rdm)
            <div class=" col-md-3 col-sm-6" style="width: 17rem;">
                <a href="{{route('details', ['id' => "$chien_rdm->id"])}}">
                    @if(isset($images_rdm[$key]))
                        <img src="/public/storage/chiens/{{$images_rdm[$key]->slug}}{{$images_rdm[$key]->ext}}"
                             class="d-block w-100"
                             alt="{{$chien_rdm->name}} de l'élevage de {{$chien_rdm->race}} : De la légende asturienne"
                             title="{{$chien_rdm->name}} de l'élevage de {{$chien_rdm->race}} : De la légende asturienne">
                    @else
                        <img src="{{url('public/storage/img/soon.jpg')}}"
                             class="d-block w-100 maxImg"
                             alt="{{$chien_rdm->name}} de l'élevage de {{$chien_rdm->race}} : De la légende asturienne"
                             title="{{$chien_rdm->name}} de l'élevage de {{$chien_rdm->race}} : De la légende asturienne">
                    @endif
                </a>

                <div class="card-body">
                    <h5 class="card-title">{{$chien_rdm->name}}</h5>
                    <a href="{{route('details', ['id' => "$chien_rdm->id"])}}"><img
                            src="{{url('public/storage/img/pate.png')}}" class="pate" height="100px" width="100px"
                            alt="Pate de berger australien" title="Plus de détails"> </a>
                </div>
            </div>
    @endforeach


    <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($images as $image)
                                @if($image->id_chien == $chien->id)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                        @if($image->pos == 1)  class="active" @endif></li>
                                @endif
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($images as $image)
                                @if($image->id_chien == $chien->id)
                                    <div class="carousel-item  @if($image->pos == 1) active @endif">
                                        <a data-toggle="modal" data-target=".bd-example-modal-xl">
                                            <img src="/public/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                 class="d-block w-100"
                                                 alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                                 title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne. Photo uploadée le : {{$image->created_at}}">
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicator" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


@endsection

