@extends('admin.layouts.master')

@section('css')
    <!--Internal Notify -->
    <link href="{{ URL::asset('dashboard/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection

@section('title')
    تعديل خدمة
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الخدمات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل خدمة</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    {{-- @include('messages_alert') --}}

    <!-- row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.services.update', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Main Title</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title', $service->title) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Icon (optional)</label>
                            <input type="file" name="icon" class="form-control">
                            @if ($service->icon)
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" width="50"
                                    class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Main Image</label>
                            <input type="file" name="title_image" class="form-control">
                            @if ($service->title_image)
                                <img src="{{ asset('storage/' . $service->title_image) }}" alt="Main Image" width="50"
                                    class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>About (optional)</label>
                            <textarea name="about" class="form-control">{{ old('about', $service->about) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Main Description</label>
                            <textarea name="description1" class="form-control" required>{{ old('description1', $service->description1) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Importance</label>
                            <textarea name="importance" class="form-control" required>{{ old('importance', $service->importance) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Small Image</label>
                            <input type="file" name="small_image" class="form-control">
                            @if ($service->small_image)
                                <img src="{{ asset('storage/' . $service->small_image) }}" alt="Small Image" width="50"
                                    class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Footer Title (optional)</label>
                            <input type="text" name="mini_title" class="form-control"
                                value="{{ old('mini_title', $service->mini_title) }}">
                        </div>

                        <div class="form-group">
                            <label>Footer Description (optional)</label>
                            <textarea name="description2" class="form-control">{{ old('description2', $service->description2) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Footer Image (optional)</label>
                            <input type="file" name="large_image" class="form-control">
                            @if ($service->large_image)
                                <img src="{{ asset('storage/' . $service->large_image) }}" alt="Footer Image"
                                    width="50" class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Mini Image 1 (optional)</label>
                            <input type="file" name="mini_one_image" class="form-control">
                            @if ($service->mini_one_image)
                                <img src="{{ asset('storage/' . $service->mini_one_image) }}" alt="Mini Image 1"
                                    width="50" class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Mini Image 2 (optional)</label>
                            <input type="file" name="mini_two_image" class="form-control">
                            @if ($service->mini_two_image)
                                <img src="{{ asset('storage/' . $service->mini_two_image) }}" alt="Mini Image 2"
                                    width="50" class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Mini Image 3 (optional)</label>
                            <input type="file" name="mini_three_image" class="form-control">
                            @if ($service->mini_three_image)
                                <img src="{{ asset('storage/' . $service->mini_three_image) }}" alt="Mini Image 3"
                                    width="50" class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Service</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

@section('js')
    <!-- Notify -->
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
