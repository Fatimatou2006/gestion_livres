@extends('layouts.app')

@section('title', 'Catalogue des ouvrages')

@section('content')


<!-- En-tête -->

<div class="d-flex justify-content-between align-items-center mb-5">


    <div>

        <h1 class="fw-bold text-dark">

            <i class="fa-solid fa-book-open text-primary me-2"></i>

            Gestion des ouvrages

        </h1>


        <p class="text-muted mb-0">

            Consultez, ajoutez et gérez les ouvrages de votre bibliothèque.

        </p>


    </div>



    <a href="{{ route('livres.create') }}"
       class="btn btn-primary btn-lg shadow">


        <i class="fa-solid fa-plus me-2"></i>

        Nouvel ouvrage


    </a>


</div>




<!-- Cartes statistiques -->


<div class="row mb-5">


    <div class="col-md-4 mb-3">


        <div class="card shadow-sm border-0 p-3">


            <div class="d-flex align-items-center">


                <div class="bg-primary text-white rounded-circle p-3 me-3">

                    <i class="fa-solid fa-book fa-xl"></i>

                </div>


                <div>

                    <h6 class="text-muted mb-1">
                        Total ouvrages
                    </h6>

                    <h3 class="fw-bold mb-0">
                        {{ $livres->count() }}
                    </h3>

                </div>


            </div>


        </div>


    </div>




    <div class="col-md-4 mb-3">


        <div class="card shadow-sm border-0 p-3">


            <div class="d-flex align-items-center">


                <div class="bg-success text-white rounded-circle p-3 me-3">

                    <i class="fa-solid fa-circle-check fa-xl"></i>

                </div>


                <div>

                    <h6 class="text-muted mb-1">
                        Disponibles
                    </h6>


                    <h3 class="fw-bold mb-0">

                        {{ $livres->where('statut','Disponible')->count() }}

                    </h3>


                </div>


            </div>


        </div>


    </div>





    <div class="col-md-4 mb-3">


        <div class="card shadow-sm border-0 p-3">


            <div class="d-flex align-items-center">


                <div class="bg-danger text-white rounded-circle p-3 me-3">

                    <i class="fa-solid fa-circle-xmark fa-xl"></i>

                </div>


                <div>


                    <h6 class="text-muted mb-1">
                        Épuisés
                    </h6>


                    <h3 class="fw-bold mb-0">

                        {{ $livres->where('statut','Epuisé')->count() }}

                    </h3>


                </div>


            </div>


        </div>


    </div>



</div>






<!-- Message succès -->


@if(session('success'))

<div class="alert alert-success shadow-sm">

    <i class="fa-solid fa-check-circle me-2"></i>

    {{ session('success') }}

</div>

@endif






<!-- Tableau -->


<div class="card shadow border-0">


    <div class="card-body">


        <div class="table-responsive">


            <table class="table align-middle table-hover">


                <thead>

                <tr>

                    <th>ID</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Editeur</th>
                    <th>ISBN</th>
                    <th>Exemplaires</th>
                    <th>Statut</th>
                    <th>Actions</th>

                </tr>


                </thead>



                <tbody>


                @forelse($livres as $livre)


                <tr>


                    <td>
                        {{ $livre->id }}
                    </td>


                    <td class="fw-semibold">

                        <i class="fa-solid fa-book text-primary me-2"></i>

                        {{ $livre->titre }}

                    </td>


                    <td>{{ $livre->auteur }}</td>


                    <td>{{ $livre->editeur }}</td>


                    <td>{{ $livre->isbn }}</td>


                    <td>{{ $livre->nombre_exemplaires }}</td>



                    <td>


                    @if($livre->statut == 'Disponible')

                        <span class="badge bg-success rounded-pill">

                            Disponible

                        </span>


                    @else


                        <span class="badge bg-danger rounded-pill">

                            Epuisé

                        </span>


                    @endif


                    </td>




                    <td>


                        <a href="{{ route('livres.show',$livre->id) }}"
                           class="btn btn-info btn-sm"
                           title="Voir">

                            <i class="fa-solid fa-eye"></i>

                        </a>



                        <a href="{{ route('livres.edit',$livre->id) }}"
                           class="btn btn-warning btn-sm"
                           title="Modifier">

                            <i class="fa-solid fa-pen"></i>

                        </a>



                        <form action="{{ route('livres.destroy',$livre->id) }}"
                              method="POST"
                              class="d-inline">


                            @csrf
                            @method('DELETE')


                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Supprimer cet ouvrage ?')">


                                <i class="fa-solid fa-trash"></i>


                            </button>


                        </form>


                    </td>


                </tr>


                @empty


                <tr>

                    <td colspan="8" class="text-center text-muted">

                        Aucun ouvrage enregistré.

                    </td>

                </tr>


                @endforelse


                </tbody>


            </table>


        </div>


    </div>


</div>



@endsection