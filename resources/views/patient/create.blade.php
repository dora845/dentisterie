@extends('layouts.main')
@section('content')
<div class="pagetitle">
    <h1>Ajouter des Patients</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/')}}">Acceuil</a></li>
        <li class="breadcrumb-item active">Ajouter des patients</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<div class="card">
    <div class="card-body" style="margin-top: 30px">
      <div class="content">
        <span class="card-title text-md-left">Ajouter Patients</span>
      <a type="button" class="btn pmd-btn-fab btn-danger pmd-ripple-effect pmd-btn-raised" style="position: relative; float: right; padding-botton: 10px; " href="{{url('/')}}"><i class="material-icons pmd-sm">close</i></a>
    </div>
      <!-- General Form Elements -->
<br>
    @csrf
      <form action="{{url('/patient/store')}}" method="POST">
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nom">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Numero de Fiche</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="id">
            </div>
          </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">adresse</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="address">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">contact</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="contact">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">Avatar</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputDate" class="col-sm-2 col-form-label">Date de naissaince</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="birthday">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Sexe</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name="gender">
              <option selected>sexe...</option>
              <option value="male">Masculin</option>
              <option value="female">feminin</option>
            </select>
          </div>
        </div>


        <div class="mx-5 px-5 text-center">
            <button type="submit" class="btn btn-primary text-center">Envoyer</button>
          </div>
        </div>

      </form><!-- End General Form Elements -->

    </div>
  </div>

</div>
@endsection
