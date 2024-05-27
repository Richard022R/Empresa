<form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
    @csrf
</form>

<a href="#"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Cerrar sesión
</a>