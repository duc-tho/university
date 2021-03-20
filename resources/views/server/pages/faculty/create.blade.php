
@extends('server.index')
@section('title', 'Quản Trị Khoa')
@section('page-title', 'Thêm Khoa')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.faculty.show', [$khoa['slug']])" :submitLink="route('admin.faculty.store', [$khoa['slug']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.input :col="3" :type="'text'" :label="'Tên Khoa'" :required="true" :placeholder="'Nhập tên khoa'" :fieldName="'name'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Slug'" :required="true" :placeholder="'Slug....'" :fieldName="'slug'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Meta Từ Khóa'" :required="true" :placeholder="'Meta Keyword'" :fieldName="'meta_keywords'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Meta Mô Tả'" :required="true" :placeholder="'Meta Descriptions'" :fieldName="'meta_descriptions'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Tên Layout'" :required="true" :placeholder="'Layout Name'" :fieldName="'layout_name'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Trang Layout'" :required="false" :placeholder="'Layout Page'" :fieldName="'layout_page'" />

                <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="false" :fieldName="'status'" :labelContent="'Đang hoạt động'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Người Tạo'" :required="true" :placeholder="'Người Tạo'" :fieldName="'created_by'" />


                <x-admin.form.textarea-mce  :col="6" :label="'Nội Dung Giới Thiệu'" :required="true" :fieldName="'intro'" />

                <x-admin.form.textarea-mce  :col="6" :label="'Tóm Tắt Giới Thiệu'" :required="true" :fieldName="'intro'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Người Đăng'" :required="true" :placeholder="'Người Đăng'" :fieldName="'updated_by'" />

                <x-admin.form.file :col="3" :label="'Ảnh khoa'" :required="false" :fieldName="'image'" />

            </div>
        </x-admin.form.form>
    </div>
</div>
</div>

<script>
    $('input#name').keyup(function(event) {
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
