@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>

            <li class="breadcrumb-item active" aria-current="page">Nos chiots</li>

        </ol>
    </nav>
    <h3 class="center">Nos petite boules de poils</h3>
    <div class="row">
        @foreach($chiens as $key=>$chien )

            <div class="col-6">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($images[$key] as $image)
                                @if($image->id_chien == $chien->id)

                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            @if($image->pos == 1) class="active" @endif></li>
                                    {{--@else
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>--}}


                                @endif
                            @endforeach
                        </ol>
                        <div class="carousel-inner">

                            @foreach($images[$key] as $image)
                                @if($image->id_chien == $chien->id)

                                        <div class="carousel-item  @if($image->pos == 1) active" @endif>
                                            <a href="{{route('details', ['id' => "$chien->id"])}}">
                                                <img src="/public/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                     class="d-block w-100 maxImg"
                                                     alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                                     title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne">
                                            </a>
                                        </div>
                                    {{--@else
                                        <div class="carousel-item">
                                            <a href="{{route('details', ['id' => "$chien->id"])}}">
                                                <img src="/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                     class="d-block w-100 maxImg"
                                                     alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                                     title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne">
                                            </a>
                                        </div>--}}


                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="card-body center col-12">
                    <h5 class="card-title">{{$chien->name}}</h5>
                    <p class="text-muted">{{$chien->race}}</p>
                    <hr>
                    <p class="card-text">{{$chien->info}}</p>
                    <a href="{{route('details', ['id' => "$chien->id"])}}" class="btn btn-primary">Plus de détails</a>
                </div>
            </div>
            <hr>

        @endforeach
        <div class="row">
            <div class="center ">
                {{$chiens->links()}}
            </div>
        </div>
    </div>
@endsection

