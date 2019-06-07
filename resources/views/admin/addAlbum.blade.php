@extends('layouts.app')

@section('content')
    @if(isset($albums))
        <form role="form" method="get" action="{{ route('admin/modify/albums/vue/filled') }}">
            <div class="row center">
                <div class="col-5 offset-4">
                    <label for="id">Choisir le chien à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        @foreach($albums as $a)
                            <option value="{{$a->id}}">{{$a->name}}</option>
                        @endforeach
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Choisir</button>
                </div>
            </div>

        </form>
        <br>
        <br>
    @else
        @if(isset($album))
        <div class="row center">
            <div class="alert alert-success col-12" role="alert">
                <a href="/album/details/{{$album->id}}" class="alert-link">Liens de l'album !</a>
            </div>
        </div>
    @endif
        <div class="row">
            <div class="center col-12">
                <form role="form" method="post" action="{{route('admin/add/album')}}">
                @csrf <!-- {{ csrf_field() }} -->

                    <div class="form-group col-12">
                        <label for="name">Titre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Titre"
                               value="{{isset($album) ? $album->name : ''}}" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="info">Informations</label>
                        <textarea class="form-control" id="info" name="info" rows="3">
                    {{isset($album) ? $album->info : ''}}
                </textarea>
                    </div>

                    <input type="hidden" name="id" value="{{isset($album) ? $album->id : ''}}">
                    <button type="submit" class="btn btn-primary">Enregistrer !
                    </button>
                </form>
                <br>
            </div>
            @if(isset($album))
                Un petit tour sur <a href="https://tinypng.com">Tinypng</a>
                <div class="form-group col-6">
                    <form role="form" method="post" action="{{route('upload/image')}}"
                          enctype="multipart/form-data">
                    @csrf <!-- {{ csrf_field() }} -->
                        <input type="file" name="image[]" multiple="multiple">
                        <input type="hidden" name="folder" value="albums">
                        <input type="hidden" name="id" value="{{isset($album) ? $album->id : ''}}">
                        <button type="submit" class="btn btn-primary" data-buttonText="Browse">Envoyer en ligne</button>
                    </form>
                </div>

                <div class="form-group col-6">
                    <form role="form" method="post" action="{{route('upload/video')}}"
                          enctype="multipart/form-data">
                    @csrf <!-- {{ csrf_field() }} -->
                        <label>Ajouter le lien d'une vidéo</label>
                        <input type="text" name="lien" placeholder="http://..." required>
                        <input type="hidden" name="folder" value="albums">
                        <input type="hidden" name="id" value="{{isset($album) ? $album->id : ''}}">
                        <button type="submit" class="btn btn-primary" data-buttonText="Browse">Envoyer en ligne</button>
                    </form>
                </div>



                <div class="row">
                    <div class="col-12">
                        <div class="card-group">
                            @foreach ($images as $image)
                                <div class="card">
                                    @if($image->ext != 'video')
                                    <img class="maxImgAdmin" src="/public/storage/albums/{{$image->slug}}{{$image->ext}}"
                                         alt="Album : {{$album->name}}">
                                    @endif
                                    <div class="card-body center">

                                        @if($image->pos != 1)
                                            <a href="{{route('delete/image', ['folder' => 'albums', 'id_folder' => $album->id, 'id_image' => $image->id, 'slug' => $image->slug . '' . $image->ext])}}"
                                               title="Suprimer l'image">
                                                <button class="btn btn-danger">X</button>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>


    @endif
@endsection

