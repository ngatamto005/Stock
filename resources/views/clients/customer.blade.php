@include('header')

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="accueil">
                <i class="fas fa-tachometer-alt"></i> Statistiques
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="customer"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="far fa-file-alt"></i>
                <span> clients <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="customer"> ajouter un client </a>
                <a class="dropdown-item" href="all-customer"> tous les clients </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link  dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="fas fa-shopping-cart"></i>
                <span> Produits <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="produits"> ajouter un produit </a>
                <a class="dropdown-item" href="stock"> quantite restante </a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="compte">
                  <i class="far fa-user"></i> Mon Compte
                </a>
              </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="deconnexion ">{{session('utilisateur')->utilisateur}}, <b>Deconnexion</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block"> Ajouter Client  </h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="/customer/traitement" method="post" class="tm-edit-product-form">
                    @csrf
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Nom Client
                    </label>
                    <input
                      id="nom"
                      name="nom"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Email
                    </label>
                    <input
                      id="email"
                      name="email"
                      type="email"
                      class="form-control validate"
                      required
                    />
                  </div>

              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="form-group mb-3">
                    <label
                      for="ville"
                      > ville
                    </label>
                    <input
                      id="ville"
                      name="ville"
                      value=""
                      class="form-control validate"
                      required
                    />
                </div>
                <div class="form-group mb-3">
                    <label
                      for="contact"
                      > contact
                    </label>
                    <input
                      id="contact"
                      name="contact"
                      type="tel"
                      class="form-control validate"
                      required
                    />
                </div>
                <div class="form-group mb-3">
                    <label
                      for="utilisateur"
                      >
                    </label>
                    <input
                      id="utilisateur"
                      name="utilisateur"
                      type="text"
                      value="{{session('utilisateur')->utilisateur}}"
                      class="form-control validate"
                      required
                    />
                </div>
              </div>
              <div class="col-12">
                <input type="submit" class="btn btn-primary btn-block text-uppercase" name="save" value="enregistrez le client" >
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   @include('footer')
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
