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
                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>عنوان المقال</label>
                            <textarea name="title" class="form-control">{{ old('title', $blog->title) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>تفاصيل المقال</label>
                            <input type="text" name="content" class="form-control"
                                value="{{ old('content', $blog->content) }}">
                        </div>



                        <div class="form-group">
                            <label>خاتمة المقال</label>
                            <textarea name="brief" class="form-control">{{ old('brief', $blog->brief) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>الصورة الرئيسية للمقال</label>
                            <input type="file" name="image" class="form-control">
                            @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Secondary Image" width="50"
                                    class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>اسم المؤلف</label>
                            <input type="text" name="author_name" class="form-control"
                                value="{{ old('author_name', $blog->author_name) }}">
                        </div>


                        <hr>
                        <!-- Mini Set 1 -->
                        <h5>Additional Image 1</h5>
                        <div class="form-group">
                            <label>Additional Image 1(170x170)</label>
                            <input type="file" name="image1" class="form-control">
                            @if ($blog->image1)
                                <img src="{{ asset('storage/' . $blog->image1) }}" alt="Mini Image 1" width="50"
                                    class="mt-2">
                            @endif
                        </div>
                        <h5>قبل وبعد 1</h5>

                        <div class="form-group">
                            <label>Additional Image 1</label>
                            <input type="file" name="image2" class="form-control">
                            @if ($blog->image2)
                                <img src="{{ asset('storage/' . $blog->image2) }}" alt="Mini Image 1" width="50"
                                    class="mt-2">
                            @endif
                        </div>
                        <h5>قبل وبعد2 </h5>
                        <div class="form-group">
                            <label>Additional Image 1</label>
                            <input type="file" name="image5" class="form-control">
                            @if ($blog->image5)
                                <img src="{{ asset('storage/' . $blog->image5) }}" alt="Mini Image 1" width="50"
                                    class="mt-2">
                            @endif
                        </div>
                        <h5>قبل وبعد 3</h5>
                        <div class="form-group">
                            <label>Additional Image 1</label>
                            <input type="file" name="image4" class="form-control">
                            @if ($blog->image4)
                                <img src="{{ asset('storage/' . $blog->image4) }}" alt="Mini Image 1" width="50"
                                    class="mt-2">
                            @endif
                        </div>
                        <h5>قبل وبعد 4</h5>
                        <div class="form-group">
                            <label>Additional Image 1</label>
                            <input type="file" name="image3" class="form-control">
                            @if ($blog->image3)
                                <img src="{{ asset('storage/' . $blog->image3) }}" alt="Mini Image 1" width="50"
                                    class="mt-2">
                            @endif
                        </div>
                        <h5>قبل وبعد 5</h5>


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
