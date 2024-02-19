@include('header')

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item active">
                <a class="nav-link" href="accueil">
                <i class="fas fa-tachometer-alt"></i> Statistiques
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item  dropdown">
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
                    , <b>Deconnexion</b>
                </a>
            </li>
            </ul>
        </div>
       </div>
       </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b></b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title"> Clients avec Grands Achats </h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title"> Produits Plus Vendus </h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller">
                        <h2 class="tm-block-title"> Total Par Mois </h2>
                        <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();
            });
        })
    </script>
</body>

</html>
