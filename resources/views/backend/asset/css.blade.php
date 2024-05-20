<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet"
    href="{{ asset('asset/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/jqvmap/jqvmap.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('asset/backend/dist/css/adminlte.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/daterangepicker/daterangepicker.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/summernote/summernote-bs4.min.css') }}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('/asset/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet"
    href="{{ asset('asset/backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet"
    href="{{ asset('asset/backend/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
<!-- BS Stepper -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/bs-stepper/css/bs-stepper.min.css') }}">
<!-- dropzonejs -->
<link rel="stylesheet" href="{{ asset('asset/backend/plugins/dropzone/min/dropzone.min.css') }}">

<link rel="stylesheet" href="{{ asset('asset/backend/custom/media-manager.css') }}">


<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">


<!--Toaster CDN Styles-->
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


<style>
    .file-area label {
        font-weight: 500;
        display: block;
        margin: 4px 0;
        text-transform: uppercase;
        font-size: 13px;
        overflow: hidden;
    }

    .file-area .file-dummy {
        width: 100%;
        padding: 30px;
        background: rgba(255, 255, 255, 0.2);
        border: 2px dashed rgba(255, 255, 255, 0.2);
        text-align: center;
        transition: background 0.3s ease-in-out;
    }

    .file-area input[type=file] {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        cursor: pointer;
    }

    .file-area .file-dummy .success {
        display: none;
    }

    .file-area input[type=file]:valid+.file-dummy .default {
        display: none;
    }

    .file-area input[type=file]:valid+.file-dummy .success {
        display: inline-block;
    }

    .file-area input[type=file]:valid+.file-dummy {
        border-color: rgba(0, 255, 0, 0.4);
        background-color: rgba(0, 255, 0, 0.3);
    }


    .document {
        background-color: #fff;
        border-radius: 3px;
        border: 1px solid #dce2e9;
    }

    .document .document-body {
        height: 130px;
        text-align: center;
        border-radius: 3px 3px 0 0;
        background-color: #fdfdfe;
    }

    .document .document-body i {
        font-size: 45px;
        line-height: 120px;
    }

    .document .document-body img {
        width: 100%;
        height: 100%;
    }

    .document .document-footer {
        border-top: 1px solid #ebf1f5;
        height: 46px;
        ;
        padding: 5px 12px;
        border-radius: 0 0 2px 2px;
        position: relative;
    }

    .document .document-footer .document-name {
        display: block;
        margin-bottom: 0;
        font-size: 15px;
        font-weight: 600;
        width: 100%;
        line-height: normal;
        overflow-x: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        color: #fff;
    }

    .document .document-footer .document-description {
        display: block;
        margin-top: -1px;
        font-size: 11px;
        font-weight: 600;
        color: #fff;
        width: 100%;
        line-height: normal;
        overflow-x: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .document .file-download {
        font-size: 32px;
        color: #fff;
        position: absolute;
        right: 10px;
    }

    .document.danger .document-footer {
        background-color: #b52828;
    }

    tbody td {
        padding: 0px 10px !important;
    }

    .table tr:nth-child(2n) {
        background: #f2f2f2;
    }

    .select2-selection--single {
        padding: 3px 0px !important;
        height: 32px !important;
        border: 1px solid #ced4da !important;
    }

    .nav-item ul a {
        padding-left: 45px;
        font-size: 15px;
    }

    .file-area input[type=file] {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        cursor: pointer;
    }

    .link {
        cursor: pointer;
    }

    .memo-btn {
        width: 200px;
        height: 32px;
        padding: 0px;
    }
</style>
