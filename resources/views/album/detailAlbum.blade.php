@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>

            <li class="breadcrumb-item active" aria-current="page">Albums photos</li>

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
                    <img src="/storage/albums/{{$image->slug}}{{$image->ext}}"
                         class="maxImg embed-responsive"
                         title="Album de l'élevage de berger australien - De la legende asturienne"
                         alt="Album de l'élevage de berger australien - De la legende asturienne">
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
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                    @if($image->pos == 1) class="active" @endif></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($images as $image)
                                <div class="carousel-item @if($image->pos == 1) active @endif">
                                    <a data-toggle="modal" data-target=".bd-example-modal-xl">
                                        <img src="/storage/albums/{{$image->slug}}{{$image->ext}}"
                                             class="d-block w-100"
                                             alt="élevage de berger australien : De la légende asturienne"
                                             title="élevage de berger australien : De la légende asturienne">
                                    </a>
                                </div>
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

