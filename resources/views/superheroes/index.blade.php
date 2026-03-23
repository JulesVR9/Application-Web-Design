<h1>Superheroes</h1>

<a href="{{ route('superheroes.create') }}">Nuevo Superheroe</a>

<ul>
@foreach($superheroes as $hero)
    <li>
        {{ $hero->hero_name }} 
        <a href="{{ route('superheroes.show', $hero->id) }}">Ver</a>
        <a href="{{ route('superheroes.edit', $hero->id) }}">Editar</a>

        <form action="{{ route('superheroes.destroy', $hero->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
@endforeach
</ul>