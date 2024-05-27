<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nombre de la Empresa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
  @include('partials.navbar')

  <div class="hero">
    <div class="container">
      <h1>Avanzamos en nuestra apuesta por los combustibles 100% renovables</h1>
      <p>Nuestros clientes ya pueden repostar los combustibles 100% renovables en más de 150 estaciones de servicio de la Península Ibérica.</p>
      <a href="#" class="btn btn-primary">Ver mapa</a>
    </div>
  </div>

  <div class="container my-5">
    @yield('content')
  </div>

  <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
      <p class="mb-0">&copy; 2024 Nombre de la Empresa. Todos los derechos reservados.</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Inicio</a></li>
        <li class="list-inline-item"><a href="{{ url('/servicios') }}" class="text-white">Servicios</a></li>
        <li class="list-inline-item"><a href="{{ url('/sobre-nosotros') }}" class="text-white">Sobre Nosotros</a></li>
        <li class="list-inline-item"><a href="{{ url('/contacto') }}" class="text-white">Contacto</a></li>
      </ul>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>