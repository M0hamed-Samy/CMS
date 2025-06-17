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
    <title> Valex - Premium dashboard ui bootstrap rwd admin html5 template </title>

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

    

</head>

<body class="main-body app sidebar-mini">

    <div class="page">

        @include('admin.layouts.main-sidebar')

        <div class="main-content app-content">

            @include('admin.layouts.main-header')

            <div class="container-fluid">
                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header">
                                <h4 class="card-title"><i class="fas fa-plus-circle me-2"></i>Create New Service</h4>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('admin.services.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>العنوان الرئيسي</label>
                                        <input type="text" name="main_title" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>الايقونة (512x512)</label>
                                        <input type="file" name="icon" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>الصورة الرئيسية (770x450)</label>
                                        <input type="file" name="main_image" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>عنوان الشرح</label>
                                        <textarea name="main_about" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>شرح تفصيلي</label>
                                        <textarea name="main_description" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>صورة العنوان الثاني</label>
                                        <input type="file" name="secondary_image" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>العنوان الثاني</label>
                                        <input type="text" name="secondary_title" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>الشرح التفصيلي الثاني</label>
                                        <textarea name="secondary_description" class="form-control" required></textarea>
                                    </div>

                                    {{-- Before & After 1 --}}
                                    <div class="form-group">
                                        <label>صورة قبل وبعد 1 (170x170)</label>
                                        <input type="file" name="mini_image_1" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>عنوان قبل وبعد 1</label>
                                        <input type="text" name="mini_title_1" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>صورة عنوان قبل وبعد 1 (470x620)</label>
                                        <input type="file" name="mini_title_image_1" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>شرح تفصيلي قبل وبعد 1</label>
                                        <textarea name="mini_description_1" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>عنوان الشرح قبل وبعد 1</label>
                                        <input type="text" name="mini_about_1" class="form-control"
                                            required>
                                    </div>

                                    {{-- Before & After 2 --}}
                                    <div class="form-group">
                                        <label>صورة قبل وبعد 2 (170x170)</label>
                                        <input type="file" name="mini_image_2" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>عنوان قبل وبعد 2</label>
                                        <input type="text" name="mini_title_2" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>صورة عنوان قبل وبعد 2 (470x620)</label>
                                        <input type="file" name="mini_title_image_2" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label>شرح تفصيلي قبل وبعد 2</label>
                                        <textarea name="mini_description_2" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>عنوان الشرح قبل وبعد 2</label>
                                        <input type="text" name="mini_about_2" class="form-control"
                                            required>
                                    </div>

                                    {{-- Before & After 3 --}}
                                    <div class="form-group">
                                        <label>صورة قبل وبعد 3 (170x170)</label>
                                        <input type="file" name="mini_image_3" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>عنوان قبل وبعد 3</label>
                                        <input type="text" name="mini_title_3" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>صورة عنوان قبل وبعد 3 (470x620)</label>
                                        <input type="file" name="mini_title_image_3" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label>شرح تفصيلي قبل وبعد 3</label>
                                        <textarea name="mini_description_3" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>عنوان الشرح قبل وبعد 3</label>
                                        <input type="text" name="mini_about_3" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Create Service</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        @include('admin.layouts.footer')

    </div>

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
