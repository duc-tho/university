@extends('server.index')
@section('title', 'Quản Trị Khoa')
@section('page-title', 'Sửa '.$faculty['name'])
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.faculty.show', [$khoa['slug']])" :submitLink="route('admin.faculty.update', [$khoa['slug'], $faculty['id']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.input :data="$faculty" :col="3" :type="'text'" :label="'Tên Khoa'" :required="true" :placeholder="'Nhập tên khoa'" :fieldName="'name'" />

                <x-admin.form.input :data="$faculty" :col="3" :type="'text'" :label="'Slug'" :required="true" :placeholder="'Slug....'" :fieldName="'slug'" />

                <x-admin.form.input :data="$faculty" :col="3" :type="'text'" :label="'Meta Từ Khóa'" :required="true" :placeholder="'Meta Keyword'" :fieldName="'meta_keywords'" />

                <x-admin.form.input :data="$faculty" :col="3" :type="'text'" :label="'Meta Mô Tả'" :required="true" :placeholder="'Meta Descriptions'" :fieldName="'meta_descriptions'" />

                <x-admin.form.input :data="$faculty" :col="3" :type="'text'" :label="'Tên Layout'" :required="true" :placeholder="'Layout Name'" :fieldName="'layout_name'" />

                <x-admin.form.input :data="$faculty" :col="3" :type="'text'" :label="'Trang Layout'" :required="false" :placeholder="'Layout Page'" :fieldName="'layout_page'" />

                <x-admin.form.checkbox :data="$faculty" :col="3" :label="'Trạng thái'" :required="false" :fieldName="'status'" :labelContent="'Đang hoạt động'" />

                <x-admin.form.input :data="$faculty" :col="3" :type="'text'" :label="'Người Tạo'" :required="true" :placeholder="'Người Tạo'" :fieldName="'created_by'" />

                <x-admin.form.textarea-mce :data="$faculty" :col="6" :label="'Nội Dung Giới Thiệu'" :required="true" :fieldName="'intro'" />

                <x-admin.form.textarea-mce :data="$faculty" :col="6" :label="'Giới Thiệu Tóm Tắt '" :required="true" :fieldName="'intro_summary'" />

                <x-admin.form.input :data="$faculty" :col="3" :type="'text'" :label="'Người Đăng'" :required="true" :placeholder="'Người Đăng'" :fieldName="'updated_by'" />

                <x-admin.form.file :data="$faculty" :col="3" :label="'Ảnh khoa'" :required="false" :fieldName="'image'" />

            </div>
        </x-admin.form.form>
    </div>
</div>
</div>
{{-- <script>
    $(document).ready(function() {
    $("#form").validate({
		rules: {
			'faculty_id': {
                required: true
            },
            //
            'phone': {
                required: true,
                number: true,
                maxlength: 12
            },
            //
            'first_name': {
                required: true,
                maxlength: 20
            },
            //
            'last_name': {
                required: true,
                maxlength: 20
            },
            //
            'nickname': {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            //
            'email': {
                required: true,
                email: true
            },
            //
            'password': {
                required: true,
                minlength: 8
            },
            //
            're-password': {
                required: true,
                equalTo: '#password'
            }
		},
        //
        messages: {
			'faculty_id': {
                required: "Chưa chọn khoa nè!"
            },
            //
            'phone': {
                required: 'Chưa nhập số điện thoại nè!',
                number: 'Số điện thoại sao lại có chữ?',
                maxlength: 'Số điện thoại tối đa là 12 chữ số!'
            },
            //
            'first_name': {
                required: 'Chưa nhập họ nè!',
                maxlength: 'Họ dài quá rồi!',
            },
            //
            'last_name': {
                required: 'Chưa nhập tên nè!',
                maxlength: 'Tên dài quá rồi!',
            },
            //
            'nickname': {
                required: 'Chưa nhập biệt danh nè!',
                minlength: 'Biệt danh ngắn quá!',
                maxlength: 'Biệt danh dài quá!',
            },
            //
            'email': {
                required: 'Chưa nhập email nè!',
                email: "Email chưa đúng!"
            },
            //
            'password': {
                required:'Chưa nhập mật khẩu nè!',
                minlength: 'Mật khẩu phải ít nhất 8 ký tự nha!',
            },
            //
            're-password': {
                required: 'Chưa nhập lại mật khẩu nè!',
                equalTo: 'Mật khẩu nhập lại chưa khớp!'
            }
        }
	});
});
</script> --}}
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
