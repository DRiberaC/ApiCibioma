<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>CIBIOMA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Centro de Investigación en Biodiversidad y Medio Ambiente" />
  <meta name="author" content="CIBIOMA" />
  <link rel="shortcut icon" href="{{ asset('shimba/assets/images/favicon.png') }}">
  @yield('styles')
  <link href="{{ asset('shimba/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('shimba/assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="">
  <div class="account-pages mt-5 mb-1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card mb-0">
            <div class="card-body p-4">
              <div class="text-center w-75 m-auto">
                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">CIBIOMA</h4>
                <p class="text-muted mb-4">Centro de Investigación en Biodiversidad y Medio Ambiente</p>
              </div>
              @if (session('status'))
              <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
              </div>
              @endif
              @if($errors->any())
              <p class="text-danger">{{ implode('', $errors->all(':message')) }}</p>
              @endif
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" id="name" name="name" :value="old('name')"
                      placeholder="Ingresar nombre" require>
                  </div>
                <div class="form-group">
                  <label for="email">Correo</label>
                  <input class="form-control" type="text" id="email" name="email" :value="old('email')"
                    placeholder="Ingresar correo" require>
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input class="form-control" type="password" id="password" name="password"
                    placeholder="Ingresa tu contraseña" required>
                </div>
                <div class="row justify-content-center">
                  <div class="col-8">
                    <div class="form-group mb-0">
                      <button class="btn btn-primary btn-block" type="submit"> Registrar </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('shimba/assets/js/app.min.js') }}"></script>
</body>

</html>