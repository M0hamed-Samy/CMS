@foreach ($services as $service)
    <div class="service">
        <h2>{{ $service->name }}</h2>
        <p>{{ $service->description }}</p>
        <p>Price: ${{ $service->price }}</p>
    </div>
@endforeach
