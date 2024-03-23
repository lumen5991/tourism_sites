@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>
        <!-- Header Start -->
        <div class="container-fluid page-header-sites">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">Sites touristiques</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Sites touristiques</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Categories Tourism Start -->
        <div class="container-fluid booking mt-5 pb-5">
            <div class="container pb-5">
                <div class="bg-light shadow p-4 rounded">
                    <div class="row justify-content-center">
                        <div class="col-md-2 text-center m-1 ">
                            <a href="#" class="text-decoration-none">
                                <div class="text-white rounded p-3" style="background-color: #4A4646">
                                    Restaurations
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 text-center m-1">
                            <a href="#" class="text-decoration-none">
                                <div class="text-white rounded p-3" style="background-color: #4A4646">
                                    Hébergements
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 text-center m-1">
                            <a href="#" class="text-decoration-none">
                                <div class="text-white rounded p-3" style="background-color:#4A4646">
                                    Cultures
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 text-center m-1">
                            <a href="#" class="text-decoration-none">
                                <div class="text-white rounded p-3" style="background-color: #4A4646">
                                    Monuments
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 text-center m-1">
                            <a href="#" class="text-decoration-none">
                                <div class="text-white rounded p-3" style="background-color:#4A4646">
                                    Natures
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Tourism End -->


        <!-- Sites Start -->
        <div>
            <div class="container-fluid py-5">
                <div class="container pt-5 pb-3">
                    <div class="text-center mb-3 pb-3">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sites touristiques</h6>
                        <h1>Les sites disponibles</h1>
                    </div>
                    <div class="row">
                        <!-- Colonne pour les sites touristiques -->
                        <div class="col-lg-8">
                            <div class="row pb-3">
                                <!-- Vos éléments de sites touristiques vont ici -->
                                <div class="col-md-6 mb-4">
                                    <div class="package-item bg-white mb-2">
                                        <a href="{{ route('detailsSites') }}">
                                            <img class="img-fluid w-100" src="{{ asset('IMAGES_BENIN/3.amazone.jpg') }}"
                                                alt="" style="height: 200px; object-fit: cover;">
                                        </a>
                                        <div class="p-4">
                                            <a class="h5 text-decoration-none text-primary"
                                                href="{{ route('detailsSites') }}">Place de
                                                l'amozone</a>
                                            <p class="text-justify mb-3">L’esplanade de l'Amazone sera un point d’attraction et de rencontre ...</p>
                                            <div class="d-flex justify-content-between mb-3 ">
                                                <small class="m-0"><i class="fa fa-map-marker-alt mr-2"
                                                        style="color: #F18829"></i>Cotonou</small>
                                            </div>

                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="">
                                                        <button type="submit" class=""
                                                            style="cursor:pointer; background:transparent; outline:none; border:none">
                                                            <i class="fa fa-heart" style="color: #F18829;"></i>
                                                        </button>
                                                        <small>(5)</small>
                                                    </h6>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="package-item bg-white mb-2">
                                        <a href="{{ route('detailsSites') }}">
                                            <img class="img-fluid w-100"
                                                src="{{ asset('IMAGES_BENIN/Beach_of_Ouidah_Benin.jpg') }}" alt=""
                                                style="height: 200px; object-fit: cover;">
                                        </a>
                                        <div class="p-4">
                                            <a class="h5 text-decoration-none text-primary"
                                                href="{{ route('detailsSites') }}">Plage de Ouidah</a>
                                            <p class="text-justify mb-3">Près de la porte du non-retour, se trouvent des petites échoppes à ...</p>
                                            <div class="d-flex justify-content-between mb-3 ">
                                                <small class="m-0"><i class="fa fa-map-marker-alt mr-2"
                                                        style="color: #F18829"></i>Ouidah</small>
                                            </div>

                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="m-0"><i class="fa fa-heart mr-2 "
                                                            style="color: #F18829; cursor:pointer"></i>
                                                        <small>(2)</small>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pagination -->
                                <div class="col-12">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination pagination-lg justify-content-center bg-white mb-0"
                                            style="padding: 30px;">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Colonne pour le bouton "Ajouter un site" -->
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <!-- Category List -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4" style="letter-spacing: 5px; color:#F18829">Categories</h4>
                                <div class="bg-white" style="padding: 30px;">
                                    <ul class="list-inline m-0">
                                        <li class="mb-3 d-flex justify-content-between align-items-center">
                                            <a class="text-dark" href="#"><i
                                                    class="fa fa-angle-right text-primary mr-2"></i>Restauration</a>
                                            <span class="badge badge-primary badge-pill">150</span>
                                        </li>
                                        <li class="mb-3 d-flex justify-content-between align-items-center">
                                            <a class="text-dark" href="#"><i
                                                    class="fa fa-angle-right text-primary mr-2"></i>Hébergement</a>
                                            <span class="badge badge-primary badge-pill">131</span>
                                        </li>
                                        <li class="mb-3 d-flex justify-content-between align-items-center">
                                            <a class="text-dark" href="#"><i
                                                    class="fa fa-angle-right text-primary mr-2"></i>Cultures</a>
                                            <span class="badge badge-primary badge-pill">78</span>
                                        </li>
                                        <li class="mb-3 d-flex justify-content-between align-items-center">
                                            <a class="text-dark" href="#"><i
                                                    class="fa fa-angle-right text-primary mr-2"></i>Monuments</a>
                                            <span class="badge badge-primary badge-pill">56</span>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <a class="text-dark" href="#"><i
                                                    class="fa fa-angle-right text-primary mr-2"></i>Natures</a>
                                            <span class="badge badge-primary badge-pill">98</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            
                    <!-- Search Form -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                <input type="text" class="form-control p-4" placeholder="voir les sites proches">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                            <!-- Add sites -->
                            <div class="mb-5">
                                <div class="bg-white" style="padding: 30px;">
                                    <a href="{{ route('addEvent') }}"
                                        class="btn btn-primary btn-block py-3 font-weight-bold">Ajouter un site</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Sites End -->

       

    </div>
@endsection
