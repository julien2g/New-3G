@extends('layouts.app')

@section('content')
    <h3 class="center">Nos @if(!isset($chiots)) Futures @endif Portées</h3>
    @foreach($portees as $key=>$portee)
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row center ">
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img
                                            src="/public/storage/chiens/{{$images[$key]["dad"]->slug}}{{$images[$key]["dad"]->ext}}"
                                            class="d-block w-100"
                                            alt="{{$parents[$key]["dad"]->name}} de l'élevage de {{$parents[$key]["dad"]->race}} : De la légende asturienne"
                                            title="{{$parents[$key]["dad"]->name}} de l'élevage de {{$parents[$key]["dad"]->race}} : De la légende asturienne">

                                        <h5 class="card-title">{{{$parents[$key]["dad"]->name}}}</h5>
                                        <p class="text-muted">{{$parents[$key]["dad"]->race}}</p>

                                        <p class="text-muted">Mâle</p>
                                        <a href="{{route('details', ['id' => $parents[$key]["dad"]->id])}}"
                                           class="btn btn-primary">Plus de détails</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6  col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img
                                            src="/public/storage/chiens/{{$images[$key]["mom"]->slug}}{{$images[$key]["mom"]->ext}}"
                                            class="d-block w-100"
                                            alt="{{$parents[$key]["mom"]->name}} de l'élevage de {{$parents[$key]["mom"]->race}} : De la légende asturienne"
                                            title="{{$parents[$key]["mom"]->name}} de l'élevage de {{$parents[$key]["mom"]->race}} : De la légende asturienne">

                                        <h5 class="card-title">{{$parents[$key]["mom"]->name}}</h5>
                                        <p class="text-muted">{{$parents[$key]["dad"]->race}}</p>
                                        <p class="text-muted">Femelle</p>
                                        <a href="{{route('details', ['id' => $parents[$key]["mom"]->id])}}"
                                           class="btn btn-primary">Plus de détails</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <strong>Date d'accouplment : </strong> {{$portee->sex_date->format('d M Y')}}
                                </br>
                                <strong>Naissance @if(!isset($chiots)) prévu @endif
                                    : </strong> {{$portee->birth_date->format('d M Y')}}

                            </div>
                            <div class="col-8">
                                {{$portee->infos}}
                            </div>
                        </div>
                        @if(isset($chiots))
                            <br>
                            <h3 class="center blue">Les chiots nées de la portée</h3>
                            <br>
                            <div class="row">
                                @foreach($chiots[$key] as $k=>$chiot)
                                    <div class="col-3">
                                        <a href="{{route('details', ['id' => $chiot->id])}}">
                                            <div class="card">
                                                @foreach($images_chiots as $img)
                                                    @if(isset($img) && $img->id_chien == $chiot->id)
                                                        <img src="/public/storage/chiens/{{$img->slug}}{{$img->ext}}"
                                                             class="card-img-top maxImg"
                                                             alt="{{$chiot->name}} de l'élevage de {{$chiot->race}} : De la légende asturienne"
                                                             title="{{$chiot->name}} de l'élevage de {{$chiot->race}} : De la légende asturienne">
                                                    @endif
                                                @endforeach
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$chiot->name}}</h5>
                                                    <div class="center">
                                                        <img
                                                            src="{{url('public/storage/img/pate.png')}}" class="pate "
                                                            height="100px" width="100px"
                                                            alt="Pate de berger australien" title="Plus de détails">

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <br>


    @endforeach
@endsection

