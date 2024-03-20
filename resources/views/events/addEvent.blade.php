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
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Histoire</a></p>
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


        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase font-weight-bold" style="letter-spacing: 5px;">Ajouter un
                        évènement</h6>
                    <h1>Bien vouloir remplir ce formulaire pour enregistrer un évènement</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-form bg-white" style="padding: 50px;">
                            <div id="success"></div>

                            <form action="#" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="event-title">Titre de l'événement</label>
                                    <input type="text" class="form-control" id="event-title"
                                        placeholder="Entrez le titre de l'événement">
                                </div>
                                <div class="form-group">
                                    <label for="event-description">Description de l'événement</label>
                                    <textarea class="form-control" id="event-description" rows="3" placeholder="Entrez la description de l'événement"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="event-start-date">Date de début</label>
                                        <input type="date" class="form-control" id="event-start-date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="event-end-date">Date de fin</label>
                                        <input type="date" class="form-control" id="event-end-date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="event-location">Localisation</label>
                                    <input type="text" class="form-control" id="event-location"
                                        placeholder="Entrez la localisation de l'événement">
                                </div>
                                <div class="form-group">
                                    <label for="event-organizer">Organisateur</label>
                                    <input type="text" class="form-control" id="event-organizer"
                                        placeholder="Entrez le nom de l'organisateur">
                                </div>
                                <div class="form-group">
                                    <label for="event-poster">Affiche de l'événement</label>
                                    <input type="file" class="form-control-file" id="event-poster">
                                    <small id="event-poster-help" class="form-text text-muted">Téléchargez les affiches de
                                        l'événement au format image (jpg, png, etc.).</small>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit"
                                        style="font-weight: bold">Ajouter évènement</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </div>
@endsection
