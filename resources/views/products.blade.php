<h1>Villota's Movie Collection</h1>
<ul>
    @foreach($products as $movie)
        <li>{{ $movie['title'] }} ({{ $movie['year'] }}) - {{ $movie['genre'] }}</li>
    @endforeach
</ul>