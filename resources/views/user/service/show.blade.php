@php
    dd($service::all());
@endphp
@section('content')
<div class="service-details">
        <h1>{{ $service->title }}</h1>
        <img src="{{ $service->image_url }}" alt="{{ $service->title }}" style="width:300px; height:auto;">
        <p>{{ $service->description }}</p>

        <a href="{{ url('/') }}">Back to Services</a>
    </div>
@endsection
