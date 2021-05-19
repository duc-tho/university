<script src="{{ asset('dist/js/admin.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Init bootstrap custom file input
        bsCustomFileInput.init();

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            placeholder: "Nhấp vào để chọn các mục cần thiết!",
            theme: 'bootstrap4'
        });

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox();

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    });
</script>

{{-- Set default Jquery Validate --}}
<script type="text/javascript">
    $(document).ready(function() {
        $.validator.setDefaults({
            //
            onfocusout: function (e) {
                this.element(e);
            },
            //
            onkeyup: function (element, event) {
                $(element).valid();
            },
            //
            highlight: function (element) {
                $(element).closest('.form-control').addClass('is-invalid');
            },
            //
            unhighlight: function (element) {
                $(element).closest('.form-control').removeClass('is-invalid');
                $(element).closest('.form-control').addClass('is-valid');
            },
            //
            errorElement: 'div',
            //
            errorClass: 'invalid-feedback',
            //
            errorPlacement: function (error, element) {
                if (element.parent('.input-group-prepend').length) {
                    $(element).siblings(".invalid-feedback").append(error);
                } else {
                    error.insertAfter(element);
                }
            },
        });
    });
</script>

<script>
    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })

    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>

{{-- Script upload ảnh --}}
<script type="text/javascript">
    $(document).ready(function() {
        // Chang Image add product
        function changeImg(input) {

            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                //Sự kiện file đã được load vào website
                reader.onload = function (e) {

                    //Thay đổi đường dẫn ảnh
                    $($(input).parent().parent()[0].querySelector("img[data-name='preview-image']")).attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>

{{-- init tiny mce --}}
<script type="text/javascript">
    $(document).ready(function() {
        tinymce.baseURL = "{{ asset('plugins/tinymce') }}";
        tinymce.init({
            selector: "textarea[data-name='tinymce']",
            language: 'vi',
            height: 400,
            plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help image imagetools',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | image',
            file_picker_callback: function (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                let y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                let type = 'image' === meta.filetype ? 'Images' : 'Files',
                    url = '/laravel-filemanager?editor=tinymce5&type=' + type;

                tinymce.activeEditor.windowManager.openUrl({
                    url: url,
                    title: 'Quản Lý Files',
                    width: x * 0.8,
                    height: y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content.replace('storage', 'dist/upload'));
                    }
                });
            }
        });
    });
</script>
