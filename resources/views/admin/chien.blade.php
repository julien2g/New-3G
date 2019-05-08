@extends('layouts.app')

@section('content')

    <form role="form" method="post" action="{{ route('admin/add/chien') }}">
    @csrf <!-- {{ csrf_field() }} -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
                <label for="title">Titre</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titre">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4">
                <label for="race">Race</label>
                <select id="race" name="race" class="form-control">
                    <option>Choisie...</option>
                    <option selected value="Berger Australien">Berger Australien</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="adult">Adutle</label>
                <select id="adult" name="adult" class="form-control">
                    <option selected>Choose...</option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>

                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="sex">Sexe</label>
                <select id="sex" name="sex" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">Mâle</option>
                    <option value="0">Femelle</option>

                </select>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-6">
                <label for="info">Informations</label>
                <textarea class="form-control" name="info" id="info" rows="3"></textarea>
            </div>
            <div class="form-group col-6">
                <label for="award">Recompences</label>
                <textarea class="form-control" name="award" id="award" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" name="owner" type="checkbox" id="gridCheck">
                <label class="form-check-label"  for="gridCheck">
                   Ce chien est à moi
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

@endsection

