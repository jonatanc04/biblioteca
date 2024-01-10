<nav>
    <ul>
        <li class="{{ setActivo('libros.index') }}">
            <a href="{{ route('libros.index') }}">Inicio</a>
        </li>
        <li class="{{ setActivo('libros.create') }}">
            <a href="{{ route('libros.create') }}">Nuevo libro</a>
        </li>
    </ul>
</nav>