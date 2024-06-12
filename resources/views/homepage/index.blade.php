<h1>Liste des pokemons</h1>
<ul>
  @foreach($pokemons as $pokemon)
  <li>{{ $pokemon->title }}</li>
  @endforeach
</ul>
