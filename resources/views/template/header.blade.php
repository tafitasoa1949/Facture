<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gestion de facture</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    {{-- <link href="{{ asset('img/favicon.ico') }}" rel="icon"> --}}

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- admin -->
    <!-- <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="{{ route('index') }}" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><i class="far fa-smile text-primary me-2"></i>G-Facture</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 me-n3">
            <a href="{{ url('/listclient') }}" class="nav-item nav-link">Facture</a>
            <a href="{{ url('/grandlivre') }}" class="nav-item nav-link">Grand livre</a>
            <a href="{{ url('/etatfinanciere') }}" class="nav-item nav-link">Etat Financière</a>
            <a href="{{ url('/listfacture') }}" class="nav-item nav-link">Liste facture</a>
        </div>
        <div class="ms-lg-2"></div>
        <!-- Champ de recherche -->
        <form class="d-flex" action="{{ url('/recherche') }}" method="GET">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search" value="{{ request('search')}}" name="search">
            <button class="btn btn-outline-dark" type="submit">Rechercher</button>
        </form>

        <!-- <form method="GET" action="{{ route('search') }}">
            @csrf
            <input type="text" name="search" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
        </form> -->
    </div>
</nav>
<!-- Navbar End -->


