@extends('layouts.app')

@section('title', 'Ajouter un ouvrage')

@section('content')


<div class="row justify-content-center">


    <div class="col-lg-8">


        <div class="card shadow border-0">


            <div class="card-header bg-primary text-white py-4">

                <h3 class="mb-0 fw-bold">

                    <i class="fa-solid fa-book-medical me-2"></i>

                    Ajouter un nouvel ouvrage

                </h3>


                <p class="mb-0 mt-2">

                    Remplissez les informations du livre

                </p>


            </div>



            <div class="card-body p-5">


                @include('livres.form')


            </div>


        </div>


    </div>


</div>


@endsection