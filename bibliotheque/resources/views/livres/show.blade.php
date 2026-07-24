@extends('layouts.app')

@section('title', 'Détails de l’ouvrage')

@section('content')


<div class="row justify-content-center">


    <div class="col-lg-7">


        <div class="card shadow border-0">


            <div class="card-header bg-primary text-white py-4">

                <h3 class="mb-0 fw-bold">

                    <i class="fa-solid fa-book-open me-2"></i>

                    Détails de l'ouvrage

                </h3>

            </div>




            <div class="card-body p-5">



                <div class="text-center mb-4">


                    <div class="bg-primary text-white rounded-circle d-inline-flex 
                                align-items-center justify-content-center"
                         style="width:90px;height:90px;">


                        <i class="fa-solid fa-book fa-2xl"></i>


                    </div>


                    <h2 class="mt-3 fw-bold">

                        {{ $livre->titre }}

                    </h2>


                </div>





                <div class="row">



                    <div class="col-md-6 mb-3">

                        <strong>

                            <i class="fa-solid fa-user text-primary me-2"></i>
                            Auteur

                        </strong>

                        <p class="text-muted">

                            {{ $livre->auteur }}

                        </p>

                    </div>





                    <div class="col-md-6 mb-3">


                        <strong>

                            <i class="fa-solid fa-building text-primary me-2"></i>
                            Editeur

                        </strong>


                        <p class="text-muted">

                            {{ $livre->editeur }}

                        </p>


                    </div>






                    <div class="col-md-6 mb-3">


                        <strong>

                            <i class="fa-solid fa-barcode text-primary me-2"></i>
                            ISBN

                        </strong>


                        <p class="text-muted">

                            {{ $livre->isbn }}

                        </p>


                    </div>






                    <div class="col-md-6 mb-3">


                        <strong>

                            <i class="fa-solid fa-copy text-primary me-2"></i>
                            Exemplaires

                        </strong>


                        <p class="text-muted">

                            {{ $livre->nombre_exemplaires }}

                        </p>


                    </div>




                </div>





                <div class="text-center mt-3">


                    @if($livre->statut == 'Disponible')


                        <span class="badge bg-success rounded-pill px-4 py-3">

                            <i class="fa-solid fa-check me-2"></i>

                            Disponible

                        </span>


                    @else


                        <span class="badge bg-danger rounded-pill px-4 py-3">

                            <i class="fa-solid fa-xmark me-2"></i>

                            Epuisé

                        </span>


                    @endif


                </div>





                <div class="text-center mt-5">


                    <a href="{{ route('livres.index') }}"
                       class="btn btn-secondary px-4">


                        <i class="fa-solid fa-arrow-left me-2"></i>

                        Retour


                    </a>


                </div>




            </div>


        </div>


    </div>


</div>


@endsection