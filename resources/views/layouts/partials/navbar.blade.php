<nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background-color: chocolate;!important">
    <div class="container-fluid" >
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="javascript:;" style="color: #fff">Admin</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" style="background: none; border: none; cursor: pointer;">
              <i class="nc-icon nc-bell-55" style="font-weight:bold"></i>
              <p style="font-weight:bold">Me déconnecter</p>
          </button>
      </form>
      </div>
     
    </div>
  </nav>
  