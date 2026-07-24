@extends('layouts.app')

@section('title', 'Modifier un ouvrage')

@section('content')


<div class="row justify-content-center">


    <div class="col-lg-8">


        <div class="card shadow border-0">


            <div class="card-header bg-warning py-4">


                <h3 class="mb-0 fw-bold text-dark">

                    <i class="fa-solid fa-pen-to-square me-2"></i>

                    Modifier l'ouvrage

                </h3>


                <p class="mb-0 mt-2 text-dark">

                    Modifiez les informations de cet ouvrage

                </p>


            </div>




            <div class="card-body p-5">


                @include('livres.form')


            </div>



        </div>



    </div>


</div>


@endsection