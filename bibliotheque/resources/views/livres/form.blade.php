<form action="{{ isset($livre) ? route('livres.update', $livre->id) : route('livres.store') }}"
      method="POST">

    @csrf

    @if(isset($livre))
        @method('PUT')
    @endif



    <div class="row">


        <div class="col-md-6 mb-4">

            <label class="form-label fw-semibold">
                Titre
            </label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="fa-solid fa-book"></i>
                </span>

                <input type="text"
                       name="titre"
                       class="form-control"
                       value="{{ old('titre', $livre->titre ?? '') }}">

            </div>

        </div>





        <div class="col-md-6 mb-4">

            <label class="form-label fw-semibold">
                Auteur
            </label>


            <div class="input-group">

                <span class="input-group-text">
                    <i class="fa-solid fa-user"></i>
                </span>


                <input type="text"
                       name="auteur"
                       class="form-control"
                       value="{{ old('auteur', $livre->auteur ?? '') }}">

            </div>

        </div>





        <div class="col-md-6 mb-4">


            <label class="form-label fw-semibold">
                Editeur
            </label>


            <input type="text"
                   name="editeur"
                   class="form-control"
                   value="{{ old('editeur', $livre->editeur ?? '') }}">


        </div>





        <div class="col-md-6 mb-4">


            <label class="form-label fw-semibold">
                ISBN
            </label>


            <input type="text"
                   name="isbn"
                   class="form-control"
                   value="{{ old('isbn', $livre->isbn ?? '') }}">


        </div>





        <div class="col-md-6 mb-4">


            <label class="form-label fw-semibold">
                Nombre d'exemplaires
            </label>


            <input type="number"
                   name="nombre_exemplaires"
                   class="form-control"
                   value="{{ old('nombre_exemplaires', $livre->nombre_exemplaires ?? '') }}">


        </div>





        <div class="col-md-6 mb-4">


            <label class="form-label fw-semibold">
                Statut
            </label>


            <select name="statut"
                    class="form-select">


                <option value="Disponible">

                    Disponible

                </option>


                <option value="Epuisé">

                    Epuisé

                </option>


            </select>


        </div>


    </div>





    <div class="text-end mt-3">


        <a href="{{ route('livres.index') }}"
           class="btn btn-secondary">

            Annuler

        </a>



        <button class="btn btn-primary px-4">

            <i class="fa-solid fa-save me-2"></i>

            Enregistrer

        </button>


    </div>



</form>