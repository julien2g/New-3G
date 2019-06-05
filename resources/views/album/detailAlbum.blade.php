@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>

            <li class="breadcrumb-item " aria-current="page"><a href="/albums" title="Voir les albumes">Albums photos</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$album->name}}</li>

        </ol>
    </nav>


    <h3 class="center">Albums : {{$album->name}}</h3>
    <h6 class="text-muted center">{{$album->date}}</h6>
    <hr>
    <p class="text-muted center">{{$album->info}}</p>
    <div class="row">
        @foreach($images as $key=>$image )

            <div class="col-md-6">
                <div class="card-body center col-md-12">
                    <a data-toggle="modal" data-target=".bd-example-modal-xl">
                        @if($image->ext != 'video')
                            <img src="/public/storage/albums/{{$image->slug}}{{$image->ext}}"
                                 class="maxImg embed-responsive"
                                 title="Album de l'élevage de berger australien - De la legende asturienne"
                                 alt="Album de l'élevage de berger australien - De la legende asturienne. Photo uploadée le : {{$image->created_at}}">
                        @else
                            <iframe  width="500" height="400" src="{{$image->slug}}" frameborder="0" allowfullscreen></iframe>
                        @endif
                    </a>
                </div>
            </div>
            <hr>

        @endforeach

    </div>
<div class="">
    {{$images->links()}}
</div>

    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($images as $image)
                            @if($image->ext != 'video')
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                    @if($image->pos == 1) class="active" @endif></li>
                            @endif
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($images as $image)
                            @if($image->ext != 'video')
                                <div class="carousel-item @if($image->pos == 1) active @endif">
                                    <a data-toggle="modal" data-target=".bd-example-modal-xl">
                                        <img src="public/storage/albums/{{$image->slug}}{{$image->ext}}"
                                             class="d-block w-100"
                                             alt="élevage de berger australien : De la légende asturienne"
                                             title="élevage de berger australien : De la légende asturienne. Photo uploadée le : {{$image->created_at}}">
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

