@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')

    <div>
        <!-- Header Start -->
        <div class="container-fluid page-header-guides">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">Guides</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Guides</p>
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


        <!-- Guide Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                    <h1>Nos guides touristiques</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden" style="height:250px; ">
                                <img class="img-fluid w-100" src="{{ asset('assets/TEAM/20240304_220332_0000.png') }}"
                                    alt="">
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">AHLE Rolande</h5>
                                <p class="m-0">Guide</p>
                                <a href="{{ route('infosGuide') }}"
                                    class="font-weight-bold text-uppercase text-decoration-none" style="color: #F18829">Voir
                                    le profil du guide</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden" style="height:250px; ">
                                <img class="img-fluid w-100" src="{{ asset('assets/TEAM/20240304_222755_0000.png') }}"
                                    alt="">

                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">AHLE Lumen</h5>
                                <p class="m-0">Guide</p>
                                <a href="{{ route('infosGuide') }}"
                                    class="font-weight-bold text-uppercase text-decoration-none" style="color: #F18829">Voir
                                    le profil du guide</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden" style="height:250px; ">
                                <img class="img-fluid w-100" src="{{ asset('assets/TEAM/20240304_222825_0000.png') }}"
                                    alt="">
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">AHLE Rolande Lumen</h5>
                                <p class="m-0">Guide</p>
                                <a href="{{ route('infosGuide') }}"
                                    class="font-weight-bold text-uppercase text-decoration-none" style="color: #F18829">Voir
                                    le profil du guide</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden" style="height:250px; ">
                                <img class="img-fluid w-100" src="{{ asset('assets/TEAM/IMG-20230414-WA0036.jpg') }}"
                                    alt="">

                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">AHLE R.Lumen</h5>
                                <p class="m-0">Guide</p>
                                <a href="{{ route('infosGuide') }}"
                                    class="font-weight-bold text-uppercase text-decoration-none" style="color: #F18829">Voir
                                    le profil du guide</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Registration Guides start -->
        <div class="mt-5">
            <div class="text-center">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">S'inscrire</h6>
                <h1>Devenez Guide Partenaire</h1>
            </div>
            <div class="container-fluid bg-white py-5 mt-5">
                <div class="container py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-5 mb-lg-0 text-black" style="text-align: justify">
                            <p>Vous êtes un guide local passionné par la découverte et la mise en valeur des trésors du
                                Bénin ? Rejoignez notre plateforme en tant que Guide Partenaire et faites briller votre
                                expertise auprès des voyageurs du monde entier !</p>
                            <div class="mb-4">
                                <h2><span class="text-primary">Pourquoi Devenir</span> Guide Partenaire ?</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary mr-2"></i>Visibilité accrue : Profitez d'une
                                    visibilité maximale auprès des voyageurs en présentant votre profil détaillé sur notre
                                    site web, avec vos compétences, vos langues parlées.</li>
                                <li><i class="fas fa-check text-primary mr-2"></i>Opportunités de revenus : Transformez
                                    votre passion en source de revenus en proposant vos services de guidage aux voyageurs en
                                    recherche d'authenticité et d'expériences enrichissantes au Bénin.</li>
                                <li><i class="fas fa-check text-primary mr-2"></i>Flexibilité totale : Fixez vos propres
                                    tarifs, définissez vos disponibilités et personnalisez vos offres de services en
                                    fonction des attentes des voyageurs.</li>
                            </ul>
                            <h2><span class="text-primary">Comment Devenir</span> Guide Partenaire ?</h2>
                            <p>L'inscription en tant que Guide Partenaire est simple et gratuite ! Remplissez notre
                                formulaire d'inscription en fournissant les informations requises sur votre profil de guide.
                            </p>
                            <p style="text-align: center"> <strong>Rejoignez-nous dès aujourd'hui et partagez votre passion
                                    pour le Bénin avec le monde entier !</strong> </p>
                        </div>
                        <div class="col-lg-5">
                            <div class="card border-0">
                                <div class="card-header bg-primary text-center p-4">
                                    <h1 class="text-white m-0">Inscrivez-vous</h1>
                                </div>
                                <div class="card-body rounded-bottom p-5" style="background-color: #F3F3F3">
                                    <form action="#" method="post" enctype="multipart/form-data"
                                        novalidate="novalidate">
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" placeholder="Nom"
                                                required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" placeholder="Prénom"
                                                required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4"
                                                placeholder="Nom d'utilisateur" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control p-4" rows="2" placeholder="Description" required="required"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control p-4" placeholder="Téléphone"
                                                required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" placeholder="Numéro IFU"
                                                required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" placeholder="Langue parlée"
                                                required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="text-black">Une photo de vous</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-block py-3" type="submit"
                                                style="font-weight: bold">S'inscrire</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Guides End -->

    </div>

@endsection
