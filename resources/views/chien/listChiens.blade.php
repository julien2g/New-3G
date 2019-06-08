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
        <div class="row" >
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($images[$key] as $image)
                            @if($image->id_chien == $chien->id)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" @if($image->pos == 1) class="active"  @endif></li>
                            @endif
                        @endforeach
                    </ol>
                    <div class="carousel-inner" itemscope itemtype="http://schema.org/Product">

                        @foreach($images[$key] as $image)
                            @if($image->id_chien == $chien->id)
                                    <div class="carousel-item @if($image->pos == 1) active @endif">
                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <a itemprop="url" href="{{route('details', ['id' => "$chien->id"])}}">
                                            <img itemprop="image" src="/public/storage/chiens/{{$image->slug}}{{$image->ext}}"
                                                 class="d-block w-100 maxImg"
                                                 alt="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne"
                                                 title="{{$chien->name}} de l'élevage de {{$chien->race}} : De la légende asturienne">
                                        </a>
                                        </div>
                                    </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-body center col-md-6" itemscope itemtype="http://schema.org/Product">
                <h5 class="card-title" itemprop="name">{{$chien->name}}</h5>
                <p class="text-muted">{{$chien->race}}</p>
                <hr>
                <p class="card-text">{{$chien->info}}</p>
                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <a itemprop="url" href="{{route('details', ['id' => "$chien->id"])}}" class="btn btn-primary">Plus de détails</a>
                </div>
            </div>
        </div>

        <hr>
    @endforeach

@endsection

