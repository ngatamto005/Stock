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
              <a class="nav-link d-block" href="deconnexion ">
                {{session('utilisateur')->utilisateur}}, <b>Deconnexion</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">Identifiant </th>
                    <th scope="col">Nom Client </th>
                    <th scope="col"> Email </th>
                    <th scope="col"> contact </th>
                    <th scope="col"> Actions </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $cls )
                    <tr>
                        <th scope="row">{{$cls->id}}</th>
                        <td class="tm-product-name">{{$cls->nom}}</td>
                        <td>{{$cls->email}}</td>
                        <td>{{$cls->contact}}</td>
                        <td>
                          <a href="#" class="tm-product-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                          </a>
                          <a href="#" class="tm-product-delete-link">
                            <i class="far fa-edit tm-product-delete-icon"></i>
                          </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title"> Rechercher Client </h2>
            <div class="tm-product-table-container">
                <table class="table tm-table-small tm-product-table">
                    <tbody>
                        <tr>
                            <td class="tm-product-name"><input class="" type="text" ></td>
                            <td class="text-center">
                              <a href="#" class="tm-product-delete-link">
                                <i class="fas fa-search tm-product-delete-icon"></i>
                              </a>
                            </td>
                          </tr>
                    </tbody>
                </table>
            </div>
            <a href="customer" class="btn btn-primary btn-block text-uppercase mb-3" > Ajouter Nouveau Client</a>
          </div>
        </div>
      </div>
    </div>
    @include('footer')

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
