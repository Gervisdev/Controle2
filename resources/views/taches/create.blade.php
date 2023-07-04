@extends('Layouts.app')

@section('title','créer une tache')

@section('content')

<div class="container">
    <div class="row">
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom de la tache</label>
            <input type="text" class="form-control" id="name" >
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description de la tache</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
          </div>

           <form action="{{ route('Task.store')}}" method="POST">
            @csrf
            <button type="button" class="btn btn-success"> Ajouter </button>
           </form>
    </div>
</div>

@endsection