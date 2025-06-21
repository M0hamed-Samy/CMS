@extends('admin.layouts.master')

@section('css')
    <!--Internal Notify -->
    <link href="{{ URL::asset('dashboard/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection

@section('title')
    تعديل مقال
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
                    <form action="{{ route('admin.videos.update', $video->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>عنوان الفيديو</label>
                            <textarea name="title" class="form-control">{{ old('title', $video->title) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>وصف الفيديو</label>
                            <input type="text" name="description" class="form-control"
                                value="{{ old('description', $video->description) }}">
                        </div>

                        <div class="form-group">
                            <label>صورة الفيديو</label>
                            <input type="file" name="image" class="form-control">
                            @if ($video->image)
                                <img src="{{ asset('storage/' . $video->image) }}" alt="Video Image" width="50"
                                    class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>نوع الفيديو</label>
                            <select name="video_type" class="form-control">
                                <option value="file"
                                    {{ old('video_type', $video->video_type) == 'file' ? 'selected' : '' }}>فيديو مرفوع
                                </option>
                                <option value="url"
                                    {{ old('video_type', $video->video_type) == 'url' ? 'selected' : '' }}>رابط فيديو
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>مسار الفيديو</label>
                            <input type="text" name="video_path" class="form-control"
                                value="{{ old('video_path', $video->video_path) }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">تحديث الفيديو</button>
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
