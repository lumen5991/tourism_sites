@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>
        <!-- Header Start -->
        <div class="container-fluid page-header-event">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">Sites touristiques</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Histoire</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Ajouter un site touristique</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Categories Tourism Start -->
        <div class="container-fluid booking mt-5 pb-5">
            <div class="container pb-5">
                <!-- Categories section... -->
            </div>
        </div>
        <!-- Categories Tourism End -->


       <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container mt-5">
            <!-- Form section... -->
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase font-weight-bold" style="letter-spacing: 5px;">Ajouter un
                    site</h6>
                <h3>Bien vouloir remplir ce formulaire pour enregistrer un site</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header text-center">Créer un nouveau site</div>
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('tourist_sites.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nom du site</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Entrez le nom du site touristique" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description du site</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"
                                        placeholder="Entrez la description du site touristique"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="location">Localisation</label>
                                    <select class="form-control" id="location" name="location">
                                        <option value="" selected disabled>Sélectionnez une localisation</option>
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->localisation }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Catégorie</label>
                                    <select class="form-control" id="category" name="category">
                                        <option value="" selected disabled>Sélectionnez une catégorie</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="location_latitude">Latitude</label>
                                    <input type="number" step="any" class="form-control" id="location_latitude"
                                        name="location_latitude" placeholder="Entrez la latitude" required>
                                </div>
                                <div class="form-group">
                                    <label for="location_longitude">Longitude</label>
                                    <input type="number" step="any" class="form-control" id="location_longitude"
                                        name="location_longitude" placeholder="Entrez la longitude" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image du site touristique</label>
                                    <input type="file" class="form-control-file" id="image" name="image" required>
                                    <small id="image-help" class="form-text text-muted">Téléchargez une image pour
                                        représenter le site touristique.</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter le site touristique</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact End -->
    </div>
@endsection

@section('scripts')
    <!-- Inclure le fichier JavaScript -->
    <script src="{{ asset('js/filterOptions.js') }}"></script>
@endsection
