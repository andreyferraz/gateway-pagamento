<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout de Pagamento</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4 img-fluid" src="img/gateway-imagem.webp" alt="">
    <h2>Tela de Pagamento</h2>
    <p class="lead">Aqui vai ser inserido um texto sobre o pagamento</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Seu carrinho</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Nome do produto</h6>
            <small class="text-muted">Descrição do produto</small>
          </div>
          <span class="text-muted">R$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Segundo produto</h6>
            <small class="text-muted">Descrição do produto</small>
          </div>
          <span class="text-muted">R$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Terceiro item</h6>
            <small class="text-muted">Descrição do produto</small>
          </div>
          <span class="text-muted">R$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Código de Desconto</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-R$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (R$)</span>
          <strong>R$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Resgatar</button>
          </div>
        </div>
      </form>
    </div>
    <!-- formulário de preenchimento dos dados do cliente  -->
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Endereço de cobrança</h4>
      <form class="needs-validation" novalidate action="efetuar-pagamento.php" method="POST">
        <input type="hidden" name="total" id="total" value="20">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Primeiro nome</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Sobrenome</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Opcional)</span></label>
          <input type="email" class="form-control" id="email" name="email"  placeholder="seuemail@examplo.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Endereço</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Complemento <span class="text-muted">(Opcional)</span></label>
          <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">

          <div class="col-md-4 mb-3">
            <label for="state">Estado</label>
            <select class="custom-select d-block w-100" id="state" name="state" required>
              <option value="">Selecione...</option>
              <option>BA</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-5 mb-3">
                <label for="city">Cidade</label>
                <select class="custom-select d-block w-100" name="city" id="city" required>
                  <option value="">Selecione...</option>
                  <option>Campinas</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid city.
                </div>
              </div>
          <div class="col-md-3 mb-3">
            <label for="zip">CEP</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <hr class="mb-4">

        <h4 class="mb-3">Pagamento</h4>

        <div class="row">
        <div class="col-md-6 mb-3">
                <label for="cc-flag">Bandeira</label>
                <input type="text" class="form-control" name="cc-flag" id="cc-flag" placeholder="" required>
                <div class="invalid-feedback">
                  Flag is required
                </div>
              </div>
          <div class="col-md-6 mb-3">
            <label for="cc-name">Nome no cartão</label>
            <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="" required>
            <small class="text-muted">Seu nome como está escrito no cartão</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Número do cartão de crédito</label>
            <input type="text" class="form-control" id="cc-number" name="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiração</label>
            <input type="text" class="form-control" id="cc-expiration" name="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" name="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue o checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/holder.min.js"></script>
</html>