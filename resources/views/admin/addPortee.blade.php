@extends('layouts.app')

@section('content')
    @if(isset($portee))
        <form role="form" method="get" action="{{ route('admin/modify/Portee/vue/filled') }}">
            <div class="row center">
                <div class="col-5 offset-4">
                    <label for="id">Choisir la portée à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        @foreach($portee as $c)
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
            <form role="form" method="post" action="{{route('admin/add/portee')}}">
            @csrf <!-- {{ csrf_field() }} -->
                <div class="row">
                    <div class="form-group col-6">
                        <label for="dad">Père</label>
                        <select id="dad" name="dad" class="form-control">
                            @foreach($dad as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="mom">Mère</label>
                        <select id="mom" name="mom" class="form-control">

                            @foreach($mom as $m)
                                <option value="{{$m->id}}">{{$m->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="sex">Date de procréation </label>
                        <input type="date" class="form-control" id="sex" name="sex" placeholder="Titre"
                               value="{{isset($portee) ? $portee->title : ''}}">
                    </div>
                    <div class="form-group col-6">
                        <label for="birth">Date de naissance </label>
                        <input type="date" class="form-control" id="birth" name="birth" placeholder="Titre"
                               value="{{isset($portee) ? $portee->title : ''}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="infos">Informations</label>
                        <textarea class="form-control" id="infos" name="infos" rows="3">
                    {{isset($portee) ? $portee->text : ''}}
                </textarea>
                    </div>
                </div>

                <input type="hidden" name="id" value="{{isset($portee) ? $portee->id : ''}}">
                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Entrer !
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection

