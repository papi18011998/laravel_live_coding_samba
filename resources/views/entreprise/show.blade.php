@extends('template.base')
@section('section')
<table class="table table-hover container">
            <thead class=" bg-warning">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Siege Social</th>
                    <th>Telephone</th>
                    <th>Date de creation</th>
                    <th>Registre de commerce</th>
                    <th>Ninea</th>
                    <th>Page WEB</th>
                    <th>Quartier</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{$entreprise->id}}</th>
                    <th>{{$entreprise->nom}}</th>
                    <th>{{$entreprise->siege}}</th>
                    <th>{{$entreprise->telephone}}</th>
                    <th>{{$entreprise->date_creation}}</th>
                    <th>{{$entreprise->registre}}</th>
                    <th>{{$entreprise->ninea}}</th>
                    <th>{{$entreprise->site}}</th>
                    <th>{{$entreprise->quartier->nom}}:senegal:</th>
                    <th>
                        <i class="bi bi-screwdriver text-success"></i> 
                        <i class="bi bi-x-circle text-danger"></i></th>
                </tr>
            </tbody>
        </table>
@endsection()