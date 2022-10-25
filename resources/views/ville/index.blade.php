@extends('layouts.app')
@section('content')
<div class="container">
   <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      <div class="col-md-6 px-0">
         <h1 class="display-4 fst-italic">{{$title}}</h1>
      </div>
   </div>
   <div class="card-body">

      <table class="table table-striped">
         <thead>
            <tr class="table-primary">
               <th scope="col">ID</th>
               <th scope="col">Nom</th>
            </tr>
         </thead>
         <tbody>
         @forelse($villes as $ville)
         <tr>
            <td scope="row">{{$ville->id}}</td>
            <td><a href="{{route('ville.show', $ville->id)}}">{{$ville->nom}}</a></td>
         </tr>
         @empty
         <tr>
            <td colspan="2">Aucune ville est enrégistrée</td>
         </tr>
         @endforelse
         </tbody>
      </table>

      <div class="d-flex justify-content-center">
      {{ $villes->links() }}
      </div>
   </div>
</div>
@endsection