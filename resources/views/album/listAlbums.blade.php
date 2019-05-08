@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>

            <li class="breadcrumb-item active" aria-current="page">Albums photos</li>

        </ol>
    </nav>


    <h3 class="center">Albums</h3>

    <div class="row">
        @foreach($albums as $key=>$album )

            <div class="col-md-6">
                {{--<div class="col-md-12">
                     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           @foreach($images as $image)
                                @if($image->id_album == $album->id)
                                    @if($image->pos == 1)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                    @else
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                    @endif

                                @endif
                            @endforeach
                        </ol>
                        <div class="carousel-inner">

                            @foreach($images as $image)
                                @if($image->id_album == $album->id)
                                    @if($image->pos == 1)
                                        <div class="carousel-item active">
                                            <a href="{{route('details', ['id' => "$album->id"])}}">
                                                <img src="/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                     class="d-block w-100 maxImg"
                                                     alt="{{$album->name}} de l'élevage de {{$album->race}} : De la légende asturienne"
                                                     title="{{$album->name}} de l'élevage de {{$album->race}} : De la légende asturienne">
                                            </a>
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <a href="{{route('details', ['id' => "$album->id"])}}">
                                                <img src="/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                     class="d-block w-100 maxImg"
                                                     alt="{{$album->name}} de l'élevage de {{$album->race}} : De la légende asturienne"
                                                     title="{{$album->name}} de l'élevage de {{$album->race}} : De la légende asturienne">
                                            </a>
                                        </div>
                                    @endif

                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
--}}


                <a href="{{route('album/details', ['id' => "$album->id"])}}">
                    <div class="card-body center col-md-12">
                        @if(isset($images[$key]))
                            <img src="/storage/albums/{{$images[$key]->slug}}{{$images[$key]->ext}}"
                                 class="maxImg embed-responsive"
                                 title="Album de l'élevage de berger australien - De la legende asturienne"
                                 alt="Album de l'élevage de berger australien - De la legende asturienne">
                        @endif
                        <h5 class="card-title">{{$album->name}}</h5>
                        <hr>
                        <p class="text-muted">{{$album->date}}</p>

                        <img
                            src="{{url('/storage/img/pate.png')}}" class="pate" height="100px" width="100px"
                            alt="Pate de berger australien" title="Voir l'album">
                    </div>
                </a>
            </div>
            <hr>

        @endforeach

    </div>

    {{$albums->links()}}

@endsection

