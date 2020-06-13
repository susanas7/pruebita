<html>
    <head>
      <!--Creando el titulo de pestaña dinamico -->
      <title>@yield('title')</title>
    </head>
    <body>
      <nav>
        <ul>
          <!--navegador para acceder a las rutas dichas en web.php -->
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
      <!--contenido dinamico @yield('nombre unico')-->
      @yield('content')
    </body>

</html>
