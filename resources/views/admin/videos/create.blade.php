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
                                    <h4 class="card-title"><i class="fas fa-plus-circle me-2"></i>Create New Video</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Video Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Video Description</label>
        <textarea name="description" class="form-control" rows="4"></textarea>
    </div>

    <div class="form-group">
        <label>Video Type</label>
        <select name="video_type" id="video_type" class="form-control" required onchange="toggleVideoInput()">
            <option value="">Select Type</option>
            <option value="url">Video URL</option>
            <option value="file">Upload Video</option>
        </select>
    </div>

    <div class="form-group" id="video_url_input" style="display: none;">
        <label>Video URL (YouTube, Vimeo, etc.)</label>
        <input type="url" name="video_path" class="form-control">
    </div>

    <div class="form-group" id="video_file_input" style="display: none;">
        <label>Upload Video File</label>
        <input type="file" name="video_path" class="form-control" accept="video/*">
    </div>

    <div class="form-group">
        <label>Video Image (Thumbnail)</label>
        <input type="file" name="video_img" class="form-control" accept="image/*">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Create Video</button>
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
<script>
    function toggleVideoInput() {
        var type = document.getElementById('video_type').value;
        document.getElementById('video_url_input').style.display = (type === 'url') ? 'block' : 'none';
        document.getElementById('video_file_input').style.display = (type === 'file') ? 'block' : 'none';
    }
</script>

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

    <script>
        function toggleVideoInput() {
            var videoType = document.getElementById('video_type').value;
            var urlInput = document.getElementById('video_url_input');
            var fileInput = document.getElementById('video_file_input');

            if (videoType === 'url') {
                urlInput.style.display = 'block';
                fileInput.style.display = 'none';
            } else if (videoType === 'file') {
                urlInput.style.display = 'none';
                fileInput.style.display = 'block';
            } else {
                urlInput.style.display = 'none';
                fileInput.style.display = 'none';
            }
        }
    </script>

</body>

</html>
