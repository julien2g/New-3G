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

