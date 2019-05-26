@extends('layouts.app')

@section('content')
    @if(isset($news))
        <form role="form" method="get" action="{{ route('admin/modify/news/vue/filled') }}">
            <div class="row center">
                <div class="col-5 offset-4">
                    <label for="id">Choisir le chien à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        @foreach($news as $c)
                            <option value="{{$c->id}}">{{$c->title}}</option>
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
            <form role="form" method="post" action="{{route('admin/add/news')}}">
            @csrf <!-- {{ csrf_field() }} -->
                <div class="row">
                    <div class="form-group col-3">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titre"
                               value="{{isset($new) ? $new->title : ''}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="info">Informations</label>
                        <textarea class="form-control" id="info" name="text" rows="3">
                    {{isset($new) ? $new->text : ''}}
                </textarea>
                    </div>
                </div>

                <input type="hidden" name="id" value="{{isset($new) ? $new->id : ''}}">
                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Envoyer la news !
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection

