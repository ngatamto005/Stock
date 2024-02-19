<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> CAMES STORE </title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
  </head>

  <body>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4"> S'inscrire </h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="/traitement" method="post" class="tm-login-form">
                    @csrf
                  <div class="form-group">
                    <label for="utilisateur"> Nom utilisateur </label>
                    <input
                      name="utilisateur"
                      type="text"
                      placeholder="votre nom "
                      class="form-control validate"
                      id="username"
                      value=""
                      requiredS
                    />
                  </div>
                  <div class="form-group">
                    <label for="utilisateur"> Email </label>
                    <input
                      name="email"
                      type="email"
                      placeholder="xxxx@gmail.com"
                      class="form-control validate"
                      id="username"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="contact"> contact  </label>
                    <input
                      name="contact"
                      type="tel"
                      placeholder="123456789"
                      class="form-control validate"
                      id="tel"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password"> Password </label>
                    <input
                      name="password"
                      type="password"
                      class="form-control validate"
                      id="password"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <input type="submit" name="save" value="s'inscrire" class="btn btn-primary btn-block text-uppercase" ><br>
                    <p style="color: white"> deja connecté(e) ? <a href="connexion" style="color: orange"> cliquez ici </a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
