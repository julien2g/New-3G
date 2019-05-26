@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>

            @if($chiens[0]->sex == 1 && $chiens[0]->adult == 1 && $chiens[0]->own == 1)
                <li class="breadcrumb-item active" aria-current="page">Nos mâles</li>
            @elseif ($chiens[0]->sex == 0 && $chiens[0]->adult == 1 && $chiens[0]->own == 1)
                <li class="breadcrumb-item active">Nos femelles</li>
            @elseif($chiens[0]->own == 0)
                <li class="breadcrumb-item active">Mâles exterieur</li>
            @endif

        </ol>
    </nav>

    @foreach($chiens as $key=>$chien )
        <div class="row">
            <div class="col-md-6">

                {{--@foreach($images as $image)
                    @if($image->id_chien == $chien->id && $image->pos == 1)
                            <img src="/storage/chiens/{{$image->slug}}{{$image->ext}}" class="card-img" alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne" title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne">
                    @endif
                @endforeach--}}


 {{--               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($images as $image)
                            @if($image->id_chien == $chien->id)
                                @if($image->pos == 1)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                @else
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                @endif

                            @endif
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                        @foreach($images as $image)
                            @if($image->id_chien == $chien->id)
                                @if($image->pos == 1)
                                    <div class="carousel-item active">
                                        <a href="{{route('details', ['id' => "$chien->id"])}}">
                                            <img src="/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                 class="d-block w-100 maxImg"
                                                 alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                                 title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne">
                                        </a>
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <a href="{{route('details', ['id' => "$chien->id"])}}">
                                            <img src="/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                 class="d-block w-100 maxImg"
                                                 alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                                 title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne">
                                        </a>
                                    </div>
                                @endif

                            @endif
                        @endforeach
                    </div>

                </div>--}}


                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($images[$key] as $image)
                            @if($image->id_chien == $chien->id)
                                @if($image->pos == 1)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                @else
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                @endif

                            @endif
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                        @foreach($images[$key] as $image)
                            @if($image->id_chien == $chien->id)
                                @if($image->pos == 1)
                                    <div class="carousel-item active">
                                        <a href="{{route('details', ['id' => "$chien->id"])}}">
                                            <img src="/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                 class="d-block w-100 maxImg"
                                                 alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                                 title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne">
                                        </a>
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <a href="{{route('details', ['id' => "$chien->id"])}}">
                                            <img src="/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                 class="d-block w-100 maxImg"
                                                 alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                                 title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne">
                                        </a>
                                    </div>
                                @endif

                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="card-body center col-md-6 ">
                <h5 class="card-title">{{$chien->name}}</h5>
                <p class="text-muted">{{$chien->race}}</p>
                <hr>
                <p class="card-text">{{$chien->info}}</p>
                <a href="{{route('details', ['id' => "$chien->id"])}}" class="btn btn-primary">Plus de détails</a>
            </div>
        </div>

        <hr>
    @endforeach

@endsection
