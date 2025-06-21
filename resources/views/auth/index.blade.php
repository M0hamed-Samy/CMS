<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> المقالات</title>

    <!-- Favicon -->
    <link rel="icon" href="../../admin/assets/img/brand/favicon.png" type="image/x-icon" />

    <!-- Icons css -->
    <link href="../../admin/assets/css/icons.css" rel="stylesheet">

    <!-- Internal Data table css -->
    <link href="../../admin/assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../admin/assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="../../admin/assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../admin/assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../../admin/assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../../admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="../../admin/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="../../admin/assets/css-rtl/sidemenu.css">

    <!--  Custom Scroll bar-->
    <link href="../../admin/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!--- Style css-->
    <link href="../../admin/assets/css-rtl/style.css" rel="stylesheet">
    <link href="../../admin/assets/css-rtl/style-dark.css" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="../../admin/assets/css-rtl/skin-modes.css" rel="stylesheet" />

    <!--- Animations css-->
    <link href="../../admin/assets/css/animate.css" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="../../admin/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar -->
        @include('admin.layouts.main-sidebar')
        <!-- main-sidebar -->

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- main-header opened -->
            @include('admin.layouts.main-header')
            <!-- /main-header -->

            <!-- container opened -->
            <div class="container-fluid">



                <!-- row opened -->
                <!-- row opened -->
                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn
                                        more</a></p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">عنوان الفيديو</th>
                                                <th class="wd-30p border-bottom-0">الشرح التفصيلي</th>
                                                <th class="wd-15p border-bottom-0">معاينة الفيديو</th>
                                                <th class="wd-15p border-bottom-0">نوع الفيديو</th>
                                                <th class="wd-15p border-bottom-0">الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($videos as $video)
                                                <tr>
                                                    <td>{{ $video->title }}</td>
                                                    <td style="max-width: 250px; word-break: break-word;">
                                                        {{ Str::limit($video->description, 150) }}</td>

                                                    <td>
                                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Icon"
                                                            width="70" height="70"
                                                            style="object-fit:cover; border-radius:5px;">
                                                    </td>

                                                    <td>
                                                            @if ($video->video_type == 'file')
                                                                <video width="150" height="100" controls>
                                                                    <source
                                                                        src="{{ asset('storage/' . $video->video_path) }}"
                                                                        type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                            @else
                                                                <iframe width="150" height="100"
                                                                    src="{{ $video->video_path }}" frameborder="0"
                                                                    allowfullscreen></iframe>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            {{ $video->video_type == 'file' ? 'فيديو مرفوع' : 'رابط فيديو' }}
                                                        </td>

                                                    <td>
                                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                            class="btn btn-sm btn-warning mb-1">تعديل</a>

                                                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                                            method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /row -->
            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->





        <!-- Footer opened -->
        @include('admin.layouts.footer')
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="../../admin/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Bundle js -->
    <script src="../../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Ionicons js -->
    <script src="../../admin/assets/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="../../admin/assets/plugins/moment/moment.js"></script>

    <!-- P-scroll js -->
    <script src="../../admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../admin/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- Internal Data tables -->
    <script src="../../admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/jquery.dataTables.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/pdfmake.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/vfs_fonts.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
    <script src="../../admin/assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>

    <!--Internal  Datatable js -->
    <script src="../../admin/assets/js/table-data.js"></script>

    <!-- Rating js-->
    <script src="../../admin/assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="../../admin/assets/plugins/rating/jquery.barrating.js"></script>

    <!-- Custom Scroll bar Js-->
    <script src="../../admin/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Left-menu js-->
    <script src="../../admin/assets/plugins/side-menu/sidemenu.js"></script>

    <!-- Right-sidebar js -->
    <script src="../../admin/assets/plugins/sidebar/sidebar-rtl.js"></script>
    <script src="../../admin/assets/plugins/sidebar/sidebar-custom.js"></script>

    <!-- Sticky js -->
    <script src="../../admin/assets/js/sticky.js"></script>
    <script src="../../admin/assets/js/modal-popup.js"></script>

    <!-- eva-icons js -->
    <script src="../../admin/assets/js/eva-icons.min.js"></script>

    <!-- custom js -->
    <script src="../../admin/assets/js/custom.js"></script>

</body>

</html>
