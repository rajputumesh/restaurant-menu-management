@foreach ($restaurants as $restaurant)
    <h2>{{ $restaurant->name }}</h2>
    <p>{{ $restaurant->address }}</p>
    <p>{{ $restaurant->contact }}</p>
    <ul>
        @foreach ($restaurant->foodItems as $item)
            <li>{{ $item->name }} - ${{ $item->price }}</li>
        @endforeach
    </ul>
@endforeach