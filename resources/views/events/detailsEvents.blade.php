@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>

        <!-- Header Start -->
        <div class="container-fluid page-header-event">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">Détails Évènements</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Détails évènements</p>
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


        <!-- Event Start -->
        <div>
            <div class="container-fluid py-5">
                <h6 class="text-primary text-uppercase text-center" style="letter-spacing: 5px;">Détails</h6>
            
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Event Detail Start -->
                            <div>
                                <div class="pb-3">
                                    <div class="blog-item">
                                        <div class="position-relative">
                                            <div>
                                                <img class="img-fluid w-100" src="{{ asset('IMAGES_BENIN/3.amazone.jpg') }}"
                                                    alt="">
                                            </div>
                                            <!-- Event Dates -->
                                            <div class="blog-date">
                                                <h6 class="font-weight-bold mb-n1">01</h6>
                                                <small class="text-white text-uppercase">Jan</small>
                                                <h6 class="font-weight-bold mb-n1">2024</h6>
                                                <!-- Add End Date if needed -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white mb-3" style="padding: 30px;">
                                        <!-- Event Title and Location -->
                                        <div class="bg-white ">
                                            <div class="">
                                                <div>
                                                    <a class="font-weight-bold text-uppercase text-decoration-none text-black"
                                                        href="">Eat and drink</a>
                                                </div>
                                                <div>
                                                    <a class="font-weight-bold text-uppercase text-decoration-none"
                                                        style="color:#F18829;" href="">Palais des
                                                        congrès</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Event Description -->
                                        <div>
                                            <div>
                                                <p class="text-justify">Sadipscing labore amet rebum est et justo gubergren.
                                                    Et eirmod ipsum sit diam ut
                                                    magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd,
                                                    stet
                                                    amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing
                                                    et at at
                                                    sanctus et. </p>
                                            </div>
                                        </div>
                                        
                                        <!-- Image or Video Gallery -->
                                        <div id="imageGallery" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" style="height: 400px">
                                                    <img class="d-block w-100"
                                                        src="{{ asset('IMAGES_BENIN/Beach_of_Ouidah_Benin.jpg') }}"
                                                        alt="First slide" style="object-fit: cover; height:100%">
                                                </div>

                                                <div class="carousel-item" style="height: 400px">
                                                    <img class="d-block w-100"
                                                        src="{{ asset('IMAGES_BENIN/Beach_of_Ouidah_Benin.jpg') }}"
                                                        alt="First slide" style="object-fit: cover; height:100%">
                                                </div>

                                            </div>
                                            <!-- Carousel Controls -->
                                            <a class="carousel-control-prev" href="#imageGallery" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#imageGallery" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>

                                        <div class="pt-2">
                                            <p>Période :
                                                <strong>
                                                    01 Jan 2024 -
                                                    01 Jan 2024
                                                </strong>
                                            </p>
                                        </div>

                                        <div class="pt-2">
                                            <p>Organisé par : <strong>AHLE Lumen</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Event Detail End -->

                        </div>
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <!-- Guide Bio -->
                            <div class="bg-white mb-5 py-5 px-4 text-center">
                                <div style="height: 100px; width:100px; margin: 0 auto;">
                                    <!-- Guide Image -->
                                    <a href="#">
                                        <img src="{{ asset('TEAM/IMG-20230414-WA0036.jpg') }}"
                                            class="img-fluid mx-auto mb-3"
                                            style="object-fit:cover; width:100%; height:100%">
                                    </a>
                                </div>
                                <!-- Organizer Details -->
                                <h3 class=" text-primary mb-3 font-weight-bold pt-3">AHLE Rolande</h3>
                                <div class="text-center">
                                    <p>Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est
                                        ipsum
                                        erat kasd amet elitr</p>
                                    <div class="text-center">
                                        <p>Téléphone : <strong>99 3802 99</strong></p>
                                        <p>Email : <strong>rolande.ahle@ecole229.bj</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Add event -->
                            <div class="mb-5">
                                <div class="bg-white" style="padding: 30px;">
                                    <a href="{{route('addEvent')}}" class="btn btn-primary btn-block py-3 font-weight-bold">Ajouter un
                                        événement</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->


    </div>
@endsection
