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
                class="nav-link active dropdown-toggle"
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
              <a class="nav-link d-block" href="deconnexion ">
                Admin, <b>Deconnexion</b>
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
                <h2 class="tm-block-title d-inline-block"> Ajouter Produit </h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="/produits/enregistrement" method="POST" class="tm-edit-product-form">
                    @csrf
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Nom Produit
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
                      for="description"
                      > Description Produit </label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      name="description"
                      required
                    ></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      > Categorie </label
                    >
                    <select name="categorie" class="custom-select tm-select-accounts" id="category">
                      <option selected>Selectionner une categorie </option>
                      <option value="shopping">shopping</option>
                      <option value="medicaments">medicaments</option>
                      <option value="nourriture">nourriture</option>
                      <option value="maconnerie">maconnerie</option>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            > Date Achat
                          </label>
                          <input
                            id="date_achat"
                            name="date_achat"
                            type="text"
                            class="form-control validate"
                            placeholder="xx/yy/1223"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            > Quantite
                          </label>
                          <input
                            id="stock"
                            name="stock"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>

              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                <img src="img/product-image.jpg" alt="Product image" class="img-fluid d-block mx-auto">
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" name="image" accept="image/*" type="file" style="display:none;" />
                  <input type="button" class="btn btn-primary btn-block mx-auto" value=" AJOUTER L'IMAGE DU PRODUIT "
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <input type="submit" value="enregistrez les informations" class="btn btn-primary btn-block text-uppercase" >
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
