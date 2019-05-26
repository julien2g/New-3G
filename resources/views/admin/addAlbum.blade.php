@extends('layouts.app')

@section('content')
    @if(isset($albums))
        <form role="form" method="get" action="{{ route('admin/modify/album/vue/filled') }}">
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
        <div class="center">
            <form role="form" method="post" action="{{route('admin/add/album')}}">
            @csrf <!-- {{ csrf_field() }} -->
                <div class="row">
                    <div class="form-group col-3">
                        <label for="name">Titre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Titre"
                               value="{{isset($album) ? $album->name : ''}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="info">Informations</label>
                        <textarea class="form-control" id="info" name="info" rows="3">
                    {{isset($album) ? $album->info : ''}}
                </textarea>
                    </div>
                </div>

                <input type="hidden" name="id" value="{{isset($album) ? $album->id : ''}}">
                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Envoyer la news !
                        </button>
                    </div>
                </div>
            </form>










          <form role="form" method="post" action="{{route('upload/image')}}" enctype="multipart/form-data">
           @csrf <!-- {{ csrf_field() }} -->
               <input type="file" name="image[]" multiple="multiple">
               <input type="hidden" name="folder" value="albums">
               <input type="hidden" name="id" value="{{isset($album) ? $album->id : ''}}">
               <button type="submit" data-buttonText="Browse">Uplaod </button>
           </form>


          {{--<form role="form" method="post" enctype="multipart/form-data" action="{{route('upload/image')}}" >
                @csrf
                <div class="form-group">
                    <input type="hidden" name="folder" value="album">
                    <input type="hidden" name="id" value="{{isset($album) ? $album->id : ''}}">
                    <label for="images">Example file input</label>
                    <input type="file" class="form-control-file" id="images" name="images">
                </div>
                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Upload !
                        </button>
                    </div>
                </div>
            </form>
            {{--<form action="{{ route('upload/image') }}" class="form-horizontal form-bordered" id="upload-contacts" method="post" enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="col-xs-12 col-sm-9 col-md-6">
                        <input type="file" class="filestyle" id="filename" name="images" data-buttonText="Browse">
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <button class="btn btn-info" type="submit"><i class="fa fa-upload"></i> Upload Contacts File</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>--}}
        </div>
    @endif
@endsection

