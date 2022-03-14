@extends('template.base')
@section('section')
<div class="container">
<form method="POST" action="/entreprises/store">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom de l'entreprise</label>
    <input type="text"  name="nom" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Siege</label>
    <input type="text"  name="siege" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Telephone</label>
    <input type="text"  name="telephone" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Date de creation</label>
    <input type="date"  name="date_creation" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Registe de commerce</label>
    <input type="text"  name="registre" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ninea</label>
    <input type="text"  name="ninea" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Site Web</label>
    <input type="text"  name="site" class="form-control" id="exampleFormControlInput1" >
  </div>
<label>Quartier</label>
<select name="quartier_id" class="form-select" aria-label="Default select example">
    @foreach($quartiers as $quartier)
        <option value="{{$quartier->id}}">{{$quartier->nom}}</option>
    @endforeach
</select>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" name="organigramme"id="flexSwitchCheckChecked" value='1' >
  <label class="form-check-label" for="flexSwitchCheckChecked">Avez-vous un organigramme?</label>
</div>

<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" name="contrat" id="flexSwitchCheckChecked" value='1'>
  <label class="form-check-label" for="flexSwitchCheckChecked">Avez-vous un dispositf de formation?</label>
</div>

<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox"  name="dispositif_formation'" id="flexSwitchCheckChecked" value='1'>
  <label class="form-check-label" for="flexSwitchCheckChecked">Avez-vous un des contrats ?</label>
</div>

<div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Enregistrer</button>
    </div>
</form>
</div>
@endsection