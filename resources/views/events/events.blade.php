@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>
        <!-- Header Start -->
        <div class="container-fluid page-header-event">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">Évènements</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Les évènements</p>
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

        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <h6 class="text-primary text-uppercase text-center" style="letter-spacing: 5px;">Evènements</h6>
            <h1 class="mb-3 text-center">Les évènements</h1>
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row pb-3">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="blog-item">
                                    <div class="position-relative">
                                        <a href="{{ route('detailsEvents') }}">
                                            <img class="img-fluid w-100"
                                                src="{{ asset('assets/IMAGES_BENIN/events/eat and drink.jpg') }}" alt=""
                                                style="height: 200px; object-fit: cover;">
                                        </a>
                                        <div class="blog-date">
                                            <h6 class="font-weight-bold mb-n1">08</h6>
                                            <small class="text-white text-uppercase">Août</small>
                                            <h6 class="font-weight-bold mb-n1">2024</h6>
                                        </div>
                                    </div>
                                    <div class="bg-white p-4">
                                        <div class="">
                                            <div>
                                                <a class="font-weight-bold text-uppercase text-decoration-none text-black"
                                                    href="{{ route('detailsEvents') }}">Eat and drink</a>
                                            </div>

                                            <div>
                                                <a class="font-weight-bold text-uppercase text-decoration-none"
                                                    style="color:#F18829; " href="{{ route('detailsEvents') }}">Palais des
                                                    congrès</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="blog-item">
                                    <div class="position-relative">
                                        <a href="{{ route('detailsEvents') }}">
                                            <img class="img-fluid w-100"
                                                src="{{ asset('assets/IMAGES_BENIN/events/vague blanche.jpg') }}"
                                                alt="" style="height: 200px; object-fit: cover;">
                                        </a>
                                        <div class="blog-date">
                                            <h6 class="font-weight-bold mb-n1">05</h6>
                                            <small class="text-white text-uppercase">Juin</small>
                                            <h6 class="font-weight-bold mb-n1">2024</h6>
                                        </div>
                                    </div>
                                    <div class="bg-white p-4">
                                        <div class="">
                                            <div>
                                                <a class="font-weight-bold text-uppercase text-decoration-none text-black"
                                                    href="{{ route('detailsEvents') }}">La vague blanche</a>
                                            </div>

                                            <div>
                                                <a class="font-weight-bold text-uppercase text-decoration-none"
                                                    style="color:#F18829; " href="{{ route('detailsEvents') }}">Tori</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="blog-item">
                                    <div class="position-relative">
                                        <a href="{{ route('detailsEvents') }}">
                                            <img class="img-fluid w-100"
                                                src="{{ asset('assets/IMAGES_BENIN/events/récré.jpg') }}" alt=""
                                                style="height: 200px; object-fit: cover;">
                                        </a>
                                        <div class="blog-date">
                                            <h6 class="font-weight-bold mb-n1">05</h6>
                                            <small class="text-white text-uppercase">Août</small>
                                            <h6 class="font-weight-bold mb-n1">2024</h6>
                                        </div>
                                    </div>
                                    <div class="bg-white p-4">
                                        <div class="">
                                            <div>
                                                <a class="font-weight-bold text-uppercase text-decoration-none text-black"
                                                    href="{{ route('detailsEvents') }}">La récré</a>
                                            </div>

                                            <div>
                                                <a class="font-weight-bold text-uppercase text-decoration-none"
                                                    style="color:#F18829; " href="{{ route('detailsEvents') }}"> We love eya </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="blog-item">
                                    <div class="position-relative">
                                        <a href="{{ route('detailsEvents') }}">
                                            <img class="img-fluid w-100"
                                                src="{{ asset('assets/IMAGES_BENIN/events/cotonou barbecue.jpg') }}"
                                                alt="" style="height: 200px; object-fit: cover;">
                                        </a>
                                        <div class="blog-date">
                                            <h6 class="font-weight-bold mb-n1">21</h6>
                                            <small class="text-white text-uppercase">Juil</small>
                                            <h6 class="font-weight-bold mb-n1">2024</h6>
                                        </div>
                                    </div>
                                    <div class="bg-white p-4">
                                        <div class="">
                                            <div>
                                                <a class="font-weight-bold text-uppercase text-decoration-none text-black"
                                                    href="{{ route('detailsEvents') }}">Cotonou barbecue</a>
                                            </div>

                                            <div>
                                                <a class="font-weight-bold text-uppercase text-decoration-none"
                                                    style="color:#F18829; " href="{{ route('detailsEvents') }}"> Canal Olympia </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


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

                    <div class="col-lg-4 mt-5 mt-lg-0">

                        <!-- Recent Event -->
                        <div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Evènements passés</h4>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3"
                                href="{{ route('detailsEvents') }}">
                                <div style="height: 100px; width:100px">
                                    <img class="img-fluid" src="{{ asset('assets/IMAGES_BENIN/eat_and_drink.png') }}"
                                        alt="" style="object-fit: cover">
                                </div>

                                <div class="pl-3">
                                    <h6 class="m-1">Eat and Drink</h6>
                                    <small style="color: #F18829" class="font-weight-bold">15 Mars 2024</small>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3"
                                href="{{ route('detailsEvents') }}">
                                <div style="height: 100px; width:100px">
                                    <img class="img-fluid" src="{{ asset('assets/IMAGES_BENIN/events/vodunsday.jpg') }}"
                                        alt="" style="object-fit: cover">
                                </div>

                                <div class="pl-3">
                                    <h6 class="m-1">Vodun's days</h6>
                                    <small style="color: #F18829" class="font-weight-bold">10 Jan 2024</small>
                                </div>
                            </a>

                        </div>
                        <!-- Add event -->
                        <div class="mb-5">
                            <div class="bg-white" style="padding: 30px;">
                                <a href="{{ route('addEvent') }}"
                                    class="btn btn-primary btn-block py-3 font-weight-bold">Ajouter un événement</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

    </div>
@endsection
