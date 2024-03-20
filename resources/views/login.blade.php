@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>
        <!-- Header Start -->
        <div class="container-fluid page-header-event">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">Connexion</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Histoire</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Connectez-vous</p>
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
        <!-- Login Form Start -->
        <div class="container-fluid py-5">
            <div class="container-lg py-5">
                <div class="text-center mb-4 pb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Connexion</h6>
                    <h1>Connectez-vous à votre compte</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="contact-form bg-white p-5">
                            <div id="success"></div>
                            <form action="#" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                        required="required" data-validation-required-message="Veuillez entrer votre adresse email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe"
                                        required="required" data-validation-required-message="Veuillez entrer votre mot de passe" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="text-center mb-3 bg-primary">
                                    <button class="btn btn-primary font-weight-bold" type="submit">Se connecter</button>
                                </div>
                            </form>
                            <div class="text-justify">
                                <p>Mot de passe oublié ? <a href="" style="color:#F18829">Modifier mot de passe</a></p>
                                <p>Pas de compte ? <a href="" style="color:#F18829">Inscrivez-vous ici</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Login Form End -->

    </div>
@endsection
