@include('header')

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="accueil">
                <i class="fas fa-tachometer-alt"></i> Statistiques
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
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
                <a class="nav-link active" href="compte">
                  <i class="far fa-user"></i> Mon Compte
                </a>
              </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="deconnexion ">
                {{session('users')->utilisateur}} <b>Deconnexion</b>
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
                <h2 class="tm-block-title d-inline-block"> Informations Entreprise </h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form">
                    <div class="form-group mb-3">
                        <label
                          for="entreprise"
                          >Nom Entreprise
                        </label>
                        <input
                          id="nom_entreprise"
                          name="nom_entreprise"
                          type="text"
                          value="{{session('users')->utilisateur}}"
                          class="form-control validate"
                          required
                        />
                    </div>
                    <div class="form-group mb-3">
                        <label
                          for="email"
                          >Email
                        </label>
                        <input
                          id="email"
                          name="email"
                          type="email"
                          value="{{session('users')->email}}"
                          class="form-control validate"
                          required
                        />
                    </div>
                    <div class="form-group mb-3">
                        <label
                          for="name"
                          > Contact
                        </label>
                        <input
                          id="contact"
                          name="contact"
                          type="tel"
                          value="{{session('users')->contact}}"
                          class="form-control validate"
                          required
                        />
                    </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="ville"
                            > ville
                          </label>
                          <input
                            id="ville"
                            name="ville"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="localisation"
                            > localisation
                          </label>
                          <input
                            id="localisation"
                            name="localisation"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>

              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value=" AJOUTER UN LOGO A L'ENTREPEISE  "
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">

                <input type="submit" name="save" class="btn btn-primary btn-block text-uppercase" value="sauvegarder les informations">
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
