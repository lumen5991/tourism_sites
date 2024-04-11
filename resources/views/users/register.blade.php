@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>
        <!-- Header Start -->
        <div class="container-fluid page-header-event">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">Inscription</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Histoire</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Créer un compte</p>
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
        <!-- Registration Form Start -->
        <div class="container-fluid py-5">
            <div class="container-lg py-5">
                <div class="text-center mb-4 pb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Inscription</h6>
                    {{-- <h1>Inscription des Utilisateurs</h1> --}}
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-form bg-white p-5">
                            <div id="success"></div>
                            <form action="{{ route('register.post') }}" method="post" enctype="multipart/form-data"
                                novalidate="novalidate">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Prénoms</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname"
                                                placeholder="Rolande Lumen" 
                                                data-validation-required-message="Veuillez entrer votre prénom" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Nom</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname"
                                                placeholder="AHLE" required="required"
                                                data-validation-required-message="Veuillez entrer votre nom" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="lulu" required="required"
                                        data-validation-required-message="Veuillez entrer un nom d'utilisateur" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="lumenahle@gmail.com" required="required"
                                        data-validation-required-message="Veuillez entrer votre adresse email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="picture">Photo de profil</label>
                                    <input type="file" class="form-control-file" id="picture" name="picture"
                                        required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="address">Adresse</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Cotonou, Bénin" required="required"
                                        data-validation-required-message="Veuillez entrer votre adresse" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="telephone">Téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone"
                                        placeholder="0022996787423" required="required"
                                        data-validation-required-message="Veuillez entrer votre numéro de téléphone" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Mot de passe" required="required"
                                        data-validation-required-message="Veuillez entrer votre mot de passe" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirmation du mot de passe</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="password_confirmation" placeholder="Confirmation du mot de passe"
                                        required="required"
                                        data-validation-required-message="Veuillez confirmer votre mot de passe" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="text-center bg-primary">
                                    <button class="btn  py-3 px-4 font-weight-bold text-white"
                                        type="submit">S'inscrire</button>
                                </div>
                                <div class="text-center mt-3">
                                    <p>Déjà un compte ? <a href="{{ route('login') }}"
                                            style="color: #F18829">Connectez-vous</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Form End -->

    </div>
@endsection
