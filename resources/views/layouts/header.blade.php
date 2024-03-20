<header>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>lumenahle@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+229 99 3802 99</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center" style="">
                        <a href="{{route('register')}}" class=" px-3 font-weight-bold text-uppercase text-decoration-none px-3" 
                            style="color: #089938; font-weight: bold; ">
                             S'INSCRIRE
                        </a>
                        <a href="{{route('login')}}" class=" px-3 font-weight-bold text-uppercase text-decoration-none px-3"
                            style="color: #F18829;">
                           SE CONNECTER
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h2 class="m-0 " style="color: brown"><span style="color: #089938">BENIN</span><span
                            style="color: #F18829">DO</span>KOUN</h2>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">A propos</a>
                        <a href="{{ route('events') }}" class="nav-item nav-link">Evènements</a>
                        <a href="{{ route('sites') }}" class="nav-item nav-link">Nos sites</a>
                        <a href="{{ route('guide') }}" class="nav-item nav-link">Nos guides</a>
                       <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mon compte</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{ route('blog') }}" class="dropdown-item">Mon profil</a>
                            <a href="{{ route('detailsEvents') }}" class="dropdown-item">Mes activités</a>
                            <a href="{{ route('destination') }}" class="dropdown-item">Me déconnecter</a>
                        </div>
                    </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</header>
