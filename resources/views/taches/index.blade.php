@extends('Layouts.app')

@section('title','liste des taches')

@section('content')

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th >Nom</th>
                <th >Description</th>
                <th >Terminée</th>
                <th > Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th >{{ $taks->id }}</th>
                <td>{{ $taks->name }}</td>
                <td>{{ $taks->description }}</td>
                
              </tr>
             
            </tbody>
          </table>
    </div>
</div>
@endsection