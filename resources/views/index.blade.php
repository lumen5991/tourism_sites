@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" style="max-height: 80vh; object-fit: cover;"
                            src="{{ asset('assets/IMAGES_BENIN/Photo_chute_kota_route_des_tata_1-scaled.jpg') }}"
                            alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3">Bienvenue sur <span
                                        style="color: #089938;">BENIN</span><span style="color: #F18829">DO</span><span
                                        style="color: brown">KOUN</span></h4>
                                <h1 class="display-3 text-white mb-md-4">Explorons le Bénin ensemble</h1>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" style="max-height: 80vh; object-fit: cover;"
                            src="{{ asset('assets/IMAGES_BENIN/porte du non retour.jpg') }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3">Bienvenue sur <span
                                        style="color: #089938;">BENIN</span><span style="color: #F18829">DO</span><span
                                        style="color: brown">KOUN</span></h4>
                                <h1 class="display-3 text-white mb-md-4">Partons A La Découverte Du Bénin</h1>
                                {{--  <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Laissez-vous aller</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- Carousel End -->



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




        <!-- History Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100"
                                src="{{ asset('assets/IMAGES_BENIN/benin-carte--sur-fond-noir-gratuit-vectoriel.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5">
                        <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Historique 🇧🇯</h6>
                            <h1 class="mb-3">Découvrez l'histoire du Bénin</h1>
                            <p style="text-align:justify">Aux origines, la terre de l’actuel Bénin était occupée par
                                plusieurs royaumes. Les plus en vue s’appelaient Danhomé (Abomey), Xogbonou (Porto-Novo),
                                Allada, Nikki, Kouandé, Kandi… .

                                Les premiers souverains d’Abomey et de Porto-Novo sont issus de la migration Adja-Fon, venue
                                du Togo voisin (Tado). Les autres peuples proviennent de l’actuel Nigéria, Niger ou
                                Burkina-Faso. Ainsi, le pays était jadis un foyer de civilisations anciennes et brillantes,
                                bâties autour de ces royaumes : des cités-États.

                                Ces entités politiques, bien structurées, étaient pourvues de centres urbains fonctionnels.
                                Elles avaient développé un commerce local, basé dès le XVIIe siècle sur la traite des
                                esclaves, puis sur celle du palmier à huile après l’abolition du commerce négrier en 1807.
                            </p>

                            <p>Pour plus d’informations : prière consulter les liens suivant
                                <a href="https://presidence.bj/home/le-benin/histoire/ "
                                    style="color: #F18829">https://presidence.bj/home/le-benin/histoire/
                                </a> et
                                <a href="https://presidence.bj/home/le-benin/geographie/"
                                    style="color: #F18829">https://presidence.bj/home/le-benin/geographie/</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Service Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    {{--      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6> --}}
                    <h1>Pourquoi nous choisir?</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-item bg-white text-center mb-2 py-5 px-4">
                            <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                            <h5 class="mb-2">Explorez les attractions</h5>
                            <p class="m-0">Parcourez notre collection de sites touristiques et découvrez
                                la richesse culturelle et naturelle du Bénin à travers des photos inspirantes et des
                                descriptions détaillées.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-item bg-white text-center mb-2 py-5 px-4">
                            <i class="fas fa-user-friends fa-2x mx-auto mb-4"></i>
                            <h5 class="mb-2">Profils des guides</h5>
                            <p class="m-0">Consultez les profils complets de nos guides locaux. Contactez-les
                                directement par e-mail ou WhatsApp pour organiser votre voyage sur mesure.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-item bg-white text-center mb-2 py-5 px-4">
                            <i class="fas fa-concierge-bell fa-2x mx-auto mb-4"></i>
                            <h5 class="mb-2">Catégories</h5>
                            <p class="m-0">Que vous recherchiez une aventure en pleine nature, une exploration
                                historique ou une immersion culturelle,
                                nos guides sont là pour vous guider.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Registration Guides start -->
        <div class="mt-5">
            <div class="text-center">
                <h1>Devenez Guide Partenaire</h1>
            </div>
            <div class="container-fluid bg-white py-5 mt-5">
                <div class="container py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-5 mb-lg-0 text-black" style="text-align: justify">
                            <p>Vous êtes un guide local passionné par la découverte et la mise en valeur des trésors du Bénin ? Rejoignez notre plateforme en tant que Guide Partenaire et faites briller votre expertise auprès des voyageurs du monde entier !</p>
                            <div class="mb-4">
                                <h2><span class="text-primary">Pourquoi Devenir</span> Guide Partenaire ?</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary mr-2"></i>Visibilité accrue : Profitez d'une visibilité maximale auprès des voyageurs en présentant votre profil détaillé sur notre site web, avec vos compétences, vos langues parlées.</li>
                                <li><i class="fas fa-check text-primary mr-2"></i>Opportunités de revenus : Transformez votre passion en source de revenus en proposant vos services de guidage aux voyageurs en recherche d'authenticité et d'expériences enrichissantes au Bénin.</li>
                                <li><i class="fas fa-check text-primary mr-2"></i>Flexibilité totale : Fixez vos propres tarifs, définissez vos disponibilités et personnalisez vos offres de services en fonction des attentes des voyageurs.</li>
                            </ul>
                            <h2><span class="text-primary">Comment Devenir</span> Guide Partenaire ?</h2>
                            <p>L'inscription en tant que Guide Partenaire est simple et gratuite ! Remplissez notre formulaire d'inscription en fournissant les informations requises sur votre profil de guide.</p>
                            <p style="text-align: center"> <strong>Rejoignez-nous dès aujourd'hui et partagez votre passion pour le Bénin avec le monde entier !</strong> </p>
                        </div>
                        <div class="col-lg-5">
                            <div class="card border-0">
                                <div class="card-header bg-primary text-center p-4">
                                    <h1 class="text-white m-0">Inscrivez-vous</h1>
                                </div>
                                <div class="card-body rounded-bottom p-5" style="background-color: #F3F3F3">
                                    <form action="{{ route('register.post') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
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
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" id="firstname" name="firstname" placeholder="Nom" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" id="lastname" name="lastname" placeholder="Prénom" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" id="username" name="username" placeholder="Nom d'utilisateur" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control p-4" id="email" name="email" placeholder="Email" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control p-4" rows="2" id="description" name="description" placeholder="Description" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control p-4" id="phone" name="phone" placeholder="Téléphone"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" id="ifu" name="ifu" placeholder="Numéro IFU"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4" id="languages" name="languages" placeholder="Langue parlée" />
                                        </div>
                                        <div class="form-group">
                                            <label for="photo" class="text-black">Une photo de vous</label>
                                            <input type="file" class="form-control-file" id="photo" name="photo">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control p-4" id="password" name="password" placeholder="Mot de passe" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control p-4" id="password_confirmation" name="password_confirmation" placeholder="Confirmez le mot de passe" required="required" />
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-block py-3" type="submit" style="font-weight: bold">S'inscrire</button>
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
