@extends('layouts.app')

@section('content')
    @if(isset($portees))
        <form role="form" method="get" action="{{ route('admin/modify/portee/vue/filled') }}">
            <div class="row center">
                <div class="col-5 offset-md-4">
                    <label for="id">Choisir la portée à modifier</label>
                    <select id="id" name="id" class="form-control">
                        <option selected>Choisir...</option>
                        @foreach($portees as $key=>$c)
                            <option value="{{$c->id}}">{{$parents[$key]['dad']->name}}
                                ---X---{{$parents[$key]['mom']->name}}</option>

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
                            @if(isset($dad))
                                @foreach($dad as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                @endforeach
                            @endif
                            @foreach($choice_dad as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="mom">Mère</label>
                        <select id="mom" name="mom" class="form-control">
                            @if(isset($mom))
                                @foreach($mom as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                @endforeach
                            @endif
                            @foreach($choice_mom as $m)
                                <option value="{{$m->id}}">{{$m->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="sex">Date de procréation </label>
                        <input type="text" class="form-control" id="sex" name="sex" placeholder=YYYY-MM-DD
                               value="{{isset($portee) ? $portee->sex_date : ''}}" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="birth">Date de naissance </label>
                        <input type="text" class="form-control" id="birth" name="birth" placeholder="YYYY-MM-DD"
                               value="{{isset($portee) ? $portee->birth_date : ''}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="infos">Informations</label>
                        <textarea class="form-control" id="infos" name="infos" rows="3">
                    {{isset($portee) ? $portee->infos : ''}}
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

