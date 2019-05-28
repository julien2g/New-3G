@extends('layouts.app')

@section('content')
    @if(isset($success) && $success == 'TRUE')
        <div class="row center">
            <div class="alert alert-success col-12" role="alert">
                @if(isset($success))
                    {{$msg}}
                @endif
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="37%" y="50%" fill="#eceeef" dy=".3em">Espace chien</text>
                </svg>
                <div class="card-body">
                    <div class="center">
                        <div class="btn-group">
                            <a href="{{route('add/chien/vue')}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                            </a>
                            <a href="{{route('modify/chien/vue')}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="37%" y="50%" fill="#eceeef" dy=".3em">Espace news</text>
                </svg>
                <div class="card-body">
                    <div class="center">
                        <div class="btn-group">
                            <a href="{{route('admin/add/news/vue')}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                            </a>
                            <a href="{{route('admin/modify/news/vue')}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="37%" y="50%" fill="#eceeef" dy=".3em">Espace album</text>
                </svg>
                <div class="card-body">
                    <div class="center">
                        <div class="btn-group">
                            <a href="{{route('admin/add/album/vue')}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                            </a>
                            <a href="{{route('admin/modify/album/vue')}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="37%" y="50%" fill="#eceeef" dy=".3em">Espace portée</text>
                </svg>
                <div class="card-body">
                    <div class="center">
                        <div class="btn-group">
                            <a href="{{route('admin/add/portee/vue')}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                            </a>
                            <a href="{{route('admin/modify/portee/vue')}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

