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
                <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>العنوان الرئيسي</label>
                        <input type="text" name="main_title" class="form-control" value="{{ old('main_title', $service->main_title) }}" required>
                    </div>

                    <div class="form-group">
                        <label>الايقونة (512x512)</label>
                        <input type="file" name="icon" class="form-control">
                        @if ($service->icon)
                            <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>الصورة الرئيسية (770x450)</label>
                        <input type="file" name="main_image" class="form-control">
                        @if ($service->main_image)
                            <img src="{{ asset('storage/' . $service->main_image) }}" alt="Main Image" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>عنوان الشرح</label>
                        <textarea name="main_about" class="form-control" required>{{ old('main_about', $service->main_about) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>شرح تفصيلي</label>
                        <textarea name="main_description" class="form-control" required>{{ old('main_description', $service->main_description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>صورة العنوان الثاني</label>
                        <input type="file" name="secondary_image" class="form-control">
                        @if ($service->secondary_image)
                            <img src="{{ asset('storage/' . $service->secondary_image) }}" alt="Secondary Image" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>العنوان الثاني</label>
                        <input type="text" name="secondary_title" class="form-control" value="{{ old('secondary_title', $service->secondary_title) }}" required>
                    </div>

                    <div class="form-group">
                        <label>الشرح التفصيلي الثاني</label>
                        <textarea name="secondary_description" class="form-control" required>{{ old('secondary_description', $service->secondary_description) }}</textarea>
                    </div>

                    <hr>
                    <!-- Mini Set 1 -->
                    <h5>قبل وبعد 1</h5>
                    <div class="form-group">
                        <label>صورة قبل وبعد 1 (170x170)</label>
                        <input type="file" name="mini_image_1" class="form-control">
                        @if ($service->mini_image_1)
                            <img src="{{ asset('storage/' . $service->mini_image_1) }}" alt="Mini Image 1" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>عنوان قبل وبعد 1</label>
                        <input type="text" name="mini_title_1" class="form-control" value="{{ old('mini_title_1', $service->mini_title_1) }}" required>
                    </div>

                    <div class="form-group">
                        <label>صورة عنوان قبل وبعد 1 (470x620)</label>
                        <input type="file" name="mini_title_image_1" class="form-control">
                        @if ($service->mini_title_image_1)
                            <img src="{{ asset('storage/' . $service->mini_title_image_1) }}" alt="Mini Title Image 1" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>شرح تفصيلي قبل وبعد 1</label>
                        <textarea name="mini_description_1" class="form-control" required>{{ old('mini_description_1', $service->mini_description_1) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>عنوان الشرح قبل وبعد 1</label>
                        <input type="text" name="mini_about_1" class="form-control" value="{{ old('mini_about_1', $service->mini_about_1) }}" required>
                    </div>

                    <hr>
                    <!-- Mini Set 2 -->
                    <h5>قبل وبعد 2</h5>
                    <div class="form-group">
                        <label>صورة قبل وبعد 2 (170x170)</label>
                        <input type="file" name="mini_image_2" class="form-control">
                        @if ($service->mini_image_2)
                            <img src="{{ asset('storage/' . $service->mini_image_2) }}" alt="Mini Image 2" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>عنوان قبل وبعد 2</label>
                        <input type="text" name="mini_title_2" class="form-control" value="{{ old('mini_title_2', $service->mini_title_2) }}" required>
                    </div>

                    <div class="form-group">
                        <label>صورة عنوان قبل وبعد 2 (470x620)</label>
                        <input type="file" name="mini_title_image_2" class="form-control">
                        @if ($service->mini_title_image_2)
                            <img src="{{ asset('storage/' . $service->mini_title_image_2) }}" alt="Mini Title Image 2" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>شرح تفصيلي قبل وبعد 2</label>
                        <textarea name="mini_description_2" class="form-control" required>{{ old('mini_description_2', $service->mini_description_2) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>عنوان الشرح قبل وبعد 2</label>
                        <input type="text" name="mini_about_2" class="form-control" value="{{ old('mini_about_2', $service->mini_about_2) }}" required>
                    </div>

                    <hr>
                    <!-- Mini Set 3 -->
                    <h5>قبل وبعد 3</h5>
                    <div class="form-group">
                        <label>صورة قبل وبعد 3 (170x170)</label>
                        <input type="file" name="mini_image_3" class="form-control">
                        @if ($service->mini_image_3)
                            <img src="{{ asset('storage/' . $service->mini_image_3) }}" alt="Mini Image 3" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>عنوان قبل وبعد 3</label>
                        <input type="text" name="mini_title_3" class="form-control" value="{{ old('mini_title_3', $service->mini_title_3) }}" required>
                    </div>

                    <div class="form-group">
                        <label>صورة عنوان قبل وبعد 3 (470x620)</label>
                        <input type="file" name="mini_title_image_3" class="form-control">
                        @if ($service->mini_title_image_3)
                            <img src="{{ asset('storage/' . $service->mini_title_image_3) }}" alt="Mini Title Image 3" width="50" class="mt-2">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>شرح تفصيلي قبل وبعد 3</label>
                        <textarea name="mini_description_3" class="form-control" required>{{ old('mini_description_3', $service->mini_description_3) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>عنوان الشرح قبل وبعد 3</label>
                        <input type="text" name="mini_about_3" class="form-control" value="{{ old('mini_about_3', $service->mini_about_3) }}" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">تحديث الخدمة</button>
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
