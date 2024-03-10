@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>
        <!-- Header Start -->
        <div class="container-fluid page-header">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">Profil Guide</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Profil Guide</p>
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

    <!-- Profile Guide Start -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="text-center">
                <img class="rounded-circle mb-4" src="{{ asset('TEAM/20240304_220332_0000.png') }}" alt="Profile Image" style="width: 200px; height: 200px; object-fit: cover;" >
                <h5 class="mb-2 text-primary">AHLE Rolande</h5>
                <p class="text-muted mb-2">Guide Touristique</p>
                <p class="text-muted">Langues Parlées: Français, Anglais</p>
            </div>
        </div>
        <div class="col-lg-8">
            <h2 class="mb-4">À propos de moi</h2>
            <p class="text-muted text-justify">Je suis passionné par la découverte et la mise en valeur des trésors du Bénin. Avec plusieurs années d'expérience dans le domaine du guidage touristique, je m'engage à offrir des expériences authentiques et enrichissantes à mes clients.</p>
          
            <h2 class="mb-4">Me contacter</h2>
            <ul class="list-unstyled">
                <li><a href="mailto:rolande.ahle@yahoo.ca"><i class="fas fa-envelope text-primary mr-2"></i>rolande.ahle@yahoo.ca</a></li>
                <li><a href="https://wa.me/+22996787423"><i class="fab fa-whatsapp text-primary mr-2"></i>+22996787423</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Profile Guide End -->



    </div>
@endsection
