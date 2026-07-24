<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Gestion Bibliothèque')
    </title>


    <!-- MDB Bootstrap -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.0.0/mdb.min.css"
        rel="stylesheet">


    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        rel="stylesheet">


    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <style>

        body {

            font-family: 'Poppins', sans-serif;
            background: #f4f7fb;

        }


        /* Navbar */

        .navbar-custom {

            background: linear-gradient(
                135deg,
                #1e3c72,
                #2a5298
            );

            box-shadow: 0 8px 25px rgba(0,0,0,0.15);

        }



        /* Cards */

        .card {

            border-radius: 20px;

            transition: .3s ease;

        }


        .card:hover {

            transform: translateY(-3px);

            box-shadow:0 15px 35px rgba(0,0,0,0.12);

        }



        /* Boutons */

        .btn {

            border-radius: 12px;

            text-transform: none;

            font-weight: 500;

        }



        /* Tableau */

        .table thead th {

            background: linear-gradient(
                135deg,
                #1e3c72,
                #2a5298
            );

            color:white;

            border:none;

        }


        .table tbody tr {

            transition:.2s;

        }


        .table tbody tr:hover {

            background:#eef5ff;

            transform:scale(1.01);

        }



        /* Badge */

        .badge {

            padding:10px 15px;

            font-size:12px;

        }



        /* Footer */

        footer {

            color:#777;

        }


    </style>


</head>


<body>


<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">


    <div class="container">


        <a class="navbar-brand fw-bold fs-4"
           href="{{ route('livres.index') }}">


            <i class="fa-solid fa-book-open me-2"></i>

            Bibliothèque Pro


        </a>



    </div>


</nav>



<!-- Contenu -->

<main class="container py-5">


    @yield('content')


</main>




<footer class="text-center py-4">

    <p class="mb-0">

        © {{ date('Y') }} - Application de gestion de bibliothèque

    </p>

</footer>



<!-- MDB JS -->

<script
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.0.0/mdb.min.js">
</script>


</body>

</html>