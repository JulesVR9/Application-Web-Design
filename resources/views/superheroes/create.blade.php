<h1>Nuevo Superheroe</h1>

<form action="{{ route('superheroes.store') }}" method="POST">
    @csrf

    <input type="text" name="real_name" placeholder="Nombre real"><br>
    <input type="text" name="hero_name" placeholder="Nombre héroe"><br>
    <input type="text" name="photo" placeholder="URL imagen"><br>
    <textarea name="description" placeholder="Descripción"></textarea><br>

    <button type="submit">Guardar</button>
</form>