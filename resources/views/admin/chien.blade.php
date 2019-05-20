@extends('layouts.app')

@section('content')

    @if(isset($chiens))
        <form role="form" method="get" action="{{ route('find/chien') }}">
            <div class="row center">
                <div class="col-5 offset-4">
                    <label for="id">Choisir le chien à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        @foreach($chiens as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
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
        <form role="form" method="post"
              action="{{isset($chien) ? route('admin/modify/chien') : route('admin/add/chien')  }}">
        @csrf <!-- {{ csrf_field() }} -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nom</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom"
                           value="{{isset($chien) ? $chien->name : ''}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titre"
                           value="{{isset($chien) ? $chien->title : ''}}">
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-4">
                    <label for="race">Race</label>
                    <select id="race" name="race" class="form-control">
                        <option
                            value="{{isset($chien) ? $chien->race : ''}}">{{isset($chien) ? $chien->race : 'Choisir...'}} </option>
                        <option {{!isset($chien) ? 'selected' : ''}}  value="Berger Australien">Berger Australien
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="adult">Adutle</label>
                    <select id="adult" name="adult" class="form-control">
                        <option selected
                                value="{{isset($chien) ? $chien->adult : ''}}">{{isset($chien) ? $chien->adult : 'Choisir...'}}</option>
                        <option value="0">Chiot</option>
                        <option value="1">Chien</option>

                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="sex">Sexe</label>
                    <select id="sex" name="sex" class="form-control">
                        <option selected
                                value="{{isset($chien) ? $chien->sex : ''}}">{{isset($chien) ? $chien->sex : 'Choisir...'}}</option>
                        <option value="1">Mâle</option>
                        <option value="0">Femelle</option>

                    </select>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="info">Informations</label>
                    <textarea class="form-control" name="info" id="info"
                              rows="3">{{isset($chien) ? $chien->info : ''}}</textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="birthday">Date de naissance</label>
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="YYYY-MM-DD"
                           value="{{isset($chien) ? $chien->birthday : ''}}">
                </div>
                <div class="form-group col-3">
                    <label for="portee">Portée</label>
                    <select id="portee" name="portee" class="form-control">
                        <option selected value="">Choose...</option>

                        @if(isset($parents))
                            @foreach($parents as $key=>$parent)
                                <option value="{{$portees[$key]->id}}">{{$parent['dad']->name}}
                                    ---X---{{$parent['mom']->name}}  </option>

                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="award">Recompences</label>
                    <textarea class="form-control" name="award" id="award" rows="3">
                        {{isset($chien) ? $chien->awards : ''}}
                    </textarea>
                </div>
                <div class="form-group col-4">
                    <label for="exposition">Expositions</label>
                    <textarea class="form-control" name="exposition" id="exposition" rows="3">
                                                {{isset($chien) ? $chien->expositions : ''}}

                    </textarea>
                </div>
                <div class="form-group col-4">
                    <label for="analyse">Analyses</label>
                    <textarea class="form-control" name="analyse" id="analyse" rows="3">
                                                {{isset($chien) ? $chien->analyses : ''}}

                    </textarea>
                </div>
            </div>
            <div class="row">

                    <div class="form-group col-md-2">
                        <label for="owner">Le propriétaire </label>
                        <select id="owner" name="owner" class="form-control">
                            <option value=" {{isset($chien) ? $chien->owner : ''}}"> {{isset($chien) ? $chien->owner : 'Choisir...'}}</option>
                            <option selected value="0">Moi</option>
                            <option value="1">Autre</option>

                        </select>
                    </div>
                <div class="form-group col-md-3">
                    <label for="own">Ce chien est chez moi </label>
                    <select id="own" name="own" class="form-control">
                        <option value=" {{isset($chien) ? $chien->own : ''}}"> {{isset($chien) ? $chien->own : 'Choisir...'}}</option>
                        <option selected value="1">Oui</option>
                        <option value="0">Non</option>

                    </select>
                </div>

            </div>
            <input type="hidden" name="id" value=" {{isset($chien) ? $chien->id : ''}}">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    @endif
@endsection

