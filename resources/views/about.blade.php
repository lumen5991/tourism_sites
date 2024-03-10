@extends('layouts.master')

@section('title', 'Bénin tourisme')

@section('content')
    <div>
        <!-- Header Start -->
        <div class="container-fluid page-header">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 500px">
                    <h3 class="display-4 text-white text-uppercase">A propos</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">A propos</p>
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


        <!-- Mission Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{ asset('IMAGES_BENIN/bio-guera-1.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5">
                        <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Notre Mission</h6>
                            <h1 class="mb-3">Connecter les Voyageurs au Cœur du Bénin</h1>
                            <p style="text-align: justify">Nous sommes dédiés à offrir des expériences de voyage
                                authentiques et enrichissantes au Bénin. Notre mission est de connecter les voyageurs du
                                monde entier avec les guides locaux afin de leur faire découvrir la richesse culturelle,
                                historique et naturelle de notre pays. En permettant aux guides de proposer leurs services
                                et de gagner ainsi des revenus, nous contribuons à la création de richesse et de services
                                touristiques durables. Cela permet également aux touristes de vivre une expérience
                                extraordinaire tout en contribuant à la richesse et au développement du Bénin.</p>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <img class="img-fluid h-100" src="{{ asset('IMAGES_BENIN/benin-ganvie.bb32d59.png') }}"
                                        alt="">
                                    <h6 style="color: #FFC65A">ganvié</h6>
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid h-100" src="{{ asset('IMAGES_BENIN/benin-ouidah.jpg') }}"
                                        alt="">
                                    <h6 style="color: #FFC65A">ouidah</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Mission End -->


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

        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Équipe</h6>
                    <h1>Notre Fondatrice</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 pb-1">
                        <div class="team-item bg-white mb-4 h-100">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100 h-100" src="{{ asset('TEAM/20240304_222755_0000.png') }}"
                                    alt="Membre de l'équipe 1">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square"
                                        href="https://x.com/RolandeLumen?t=1tKjbmtQp7x8yjjzFq5BfQ&s=08"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square"
                                        href="https://www.facebook.com/profile.php?id=100013386458340"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square"
                                        href="https://www.linkedin.com/in/rolande-lumen-ahle-76622b228"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">AHLE Rolande Lumen</h5>
                                <p class="m-0">Fondatrice, Développeuse full stack / Fonction</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-1">
                        <div class=" mb-4 h-100">
                            <div class="text-center py-4">
                                <h5 class="text-truncate">Présentation de la Fondatrice</h5>
                                <p class="text-justify">
                                    Titulaire d'un BTS en comptabilité et gestion ainsi que d'une licence en banque finance
                                    et assurance, Mlle Rolande Lumen AHLE a débuté sa carrière dans un
                                    cabinet comptable où elle a consolidé ses compétences et sa compréhension des mécanismes
                                    financiers et comptables. Cependant, sa passion pour la technologie et l'innovation
                                    l'a rapidement conduite à explorer le monde du numérique.
                                </p>
                                <p class="text-justify">
                                    Passionnée par la convergence entre le numérique et les affaires. Elle cherche à
                                    combiner ses compétences en comptabilité et gestion d'entreprise avec celles
                                    du développement Web et mobile pour exceller plus tard dans les domaines du Product
                                    Ownership, de la Gestion de Projet IT et du Marketing Digital.
                                    Son objectif est de jouer un rôle stratégique dans la création et la gestion de produits
                                    numériques, en devenant un leader agile et innovant, capable de comprendre les besoins
                                    des utilisateurs,
                                    de diriger des équipes multidisciplinaires et de promouvoir efficacement des produits
                                    sur le marché numérique mondial.
                                </p>
                                <p class="text-justify">
                                    <strong class="text-success">Bénindokoun</strong> est l'un de ses projets phares,
                                    reflétant sa vision d'utiliser le pouvoir du numérique pour créer des opportunités et
                                    transformer positivement la société.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Registration Guides start -->
        <div class="mt-5 py-5">
            <div class="text-center">
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
                                    <form>
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
