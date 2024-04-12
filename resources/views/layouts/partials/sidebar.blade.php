<div class="sidebar" data-color="black" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
               {{--  <img src="../assets/img/logo-small.png"> --}}
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="{{route('home')}}" class="simple-text logo-normal" style="font-weight: bold">
            <p  style="color: brown"><span style="color: #089938">BENIN</span><span
                style="color: #F18829">DO</span>KOUN </p>
            <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="{{ route('getAllUsers') }}">
                    <i class="nc-icon nc-tile-56" style="color: #0f0"></i>
                    <p style="color: #0f0; font-weight:bold">Liste des Utilisateurs</p>
                </a>
            </li>
            <li>
               {{--  <a href="{{route('register')}}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Ajouter un agent</p>
                </a> --}}
            </li>
            <li>
                <a href="{{route('categories.index')}}">
                    <i class="nc-icon nc-bell-55" style="color: #0f0; font-weight:bold"></i>
                    <p style="color: #0f0; font-weight:bold">Categories</p>
                </a>
            </li>
            <li>
                <a href="{{route('getAllUsers')}}">
                    <i class="nc-icon nc-tile-56" style="color: #0f0; font-weight:bold"></i>
                    <p style="color: #0f0; font-weight:bold">Sites</p>
                </a>
            </li>
         
           
            
            <li class="active-pro">
                <a href="./upgrade.html">
                  {{--   <i class="nc-icon nc-spaceship"></i>
                    <p>Upgrade to PRO</p> --}}
                </a>
            </li>
        </ul>
    </div>
</div>
