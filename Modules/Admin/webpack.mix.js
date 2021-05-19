const dotenvExpand = require('dotenv-expand');
const path = require('path');

dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

const webpack = require("webpack");
const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix
    .scripts([
        __dirname + '/Resources/assets/plugins/tinymce/tinymce.min.js',
        __dirname + '/Resources/assets/plugins/jquery/jquery.min.js',
        __dirname + '/Resources/assets/plugins/bootstrap/js/bootstrap.bundle.min.js',
        __dirname + '/Resources/assets/plugins/sweetalert2/sweetalert2.min.js',
        __dirname + '/Resources/assets/plugins/toastr/toastr.min.js',
        __dirname + '/Resources/assets/plugins/select2/js/select2.full.min.js',
        __dirname + '/Resources/assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js',
        __dirname + '/Resources/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js',
        __dirname + '/Resources/assets/plugins/moment/moment.min.js',
        __dirname + '/Resources/assets/plugins/inputmask/jquery.inputmask.min.js',
        __dirname + '/Resources/assets/plugins/daterangepicker/daterangepicker.js',
        __dirname + '/Resources/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
        __dirname + '/Resources/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        __dirname + '/Resources/assets/plugins/jquery-validation/jquery.validate.min.js',
        __dirname + '/Resources/assets/plugins/jquery-validation/additional-methods.min.js',
        __dirname + '/Resources/assets/plugins/datatables/jquery.dataTables.min.js',
        __dirname + '/Resources/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
        __dirname + '/Resources/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js',
        __dirname + '/Resources/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
        __dirname + '/Resources/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js',
        __dirname + '/Resources/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
        __dirname + '/Resources/assets/plugins/jszip/jszip.min.js',
        __dirname + '/Resources/assets/plugins/pdfmake/pdfmake.min.js',
        __dirname + '/Resources/assets/plugins/pdfmake/vfs_fonts.js',
        __dirname + '/Resources/assets/plugins/datatables-buttons/js/buttons.html5.min.js',
        __dirname + '/Resources/assets/plugins/datatables-buttons/js/buttons.print.min.js',
        __dirname + '/Resources/assets/plugins/datatables-buttons/js/buttons.colVis.min.js',
        __dirname + '/Resources/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        __dirname + '/Resources/assets/js/adminlte.min.js',
    ], '../../public/dist/js/admin.js')
    .styles([
        __dirname + '/Resources/assets/plugins/fontawesome-free/css/all.min.css',
        __dirname + '/Resources/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
        __dirname + '/Resources/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
        __dirname + '/Resources/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
        __dirname + '/Resources/assets/plugins/daterangepicker/daterangepicker.css',
        __dirname + '/Resources/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        __dirname + '/Resources/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
        __dirname + '/Resources/assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css',
        __dirname + '/Resources/assets/plugins/select2/css/select2.min.css',
        __dirname + '/Resources/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
        __dirname + '/Resources/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
        __dirname + '/Resources/assets/plugins/toastr/toastr.min.css',
        __dirname + '/Resources/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        __dirname + '/Resources/assets/css/adminlte.min.css',
        __dirname + '/Resources/assets/plugins/summernote/summernote-bs4.min.css',
        __dirname + '/Resources/assets/css/custom-style.css',
        __dirname + '/Resources/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    ], '../../public/dist/css/admin.css');



if (mix.inProduction()) {
    mix.version();
}
