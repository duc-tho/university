@extends('server.index')
@section('title', 'Quản Trị Logo Hợp Tác')
@section('page-title', 'Thêm Giới Logo Hợp Tác')
@section('page-content')
    <!--/.row-->
    <div class="row">
        <div class="col-sm-12 px-3">
            <x-admin.form.form method="POST" :cancelLink="route('admin.collab.show', [$khoa['slug']])"
                :submitLink="route('admin.collab.store', [$khoa['slug']])">
                <div class="row">
                    <x-admin.form.alert :col="12" class="bg-olive color-palette">
                        <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                    </x-admin.form.alert>

                    <x-admin.form.input :col="3" :type="'text'" :label="'Tiêu Đề Logo'" :required="true" :placeholder="'Tiêu Đề Logo'" :fieldName="'title'" />
                    <x-admin.form.input :col="3" :type="'text'" :label="'Link'" :required="true" :placeholder="'Link'" :fieldName="'link'" />
                    <x-admin.form.input :col="3" :type="'number'" :label="'Display Order'" :required="true" :placeholder="'Display Order'" :fieldName="'display_order'" :value="0" />
                    <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />
                    <x-admin.form.file :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'image_url'" />


                </div>
            </x-admin.form.form>
        </div>
    </div>
    </div>

    {{-- <script>
        let url = document.querySelector('input[base_url]').attributes['base_url'].value;
        let faculty = document.getElementById('faculty_id');
        let category = document.getElementById('parent_id');
        faculty.addEventListener('change', () => {
            category.innerHTML = '<option value="" aria-readonly="true">Chọn Danh Mục</option>';
            if (!faculty.value) return;
            getCategoryByFaculty(faculty.value, url).then(html => category.innerHTML = html);
        });
    </script> --}}

    <script>
        $('input#title').keyup(function(event) {
            /* Act on the event */
            var title, slug;
            //Lấy text từ thẻ input title
            title = $(this).val();
            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
                '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            $('input#slug').val(slug);
        });

    </script>
@endsection