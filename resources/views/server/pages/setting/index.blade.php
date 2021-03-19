@extends('server.index')
@section('title', 'Cài đặt thông tin khoa')
@section('page-title', 'Cài đặt thông tin khoa')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.setting.show', [$khoa['slug']])" :submitLink="route('admin.setting.update', [$khoa['slug']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                @foreach ($settings as $setting)

                @switch($setting['type'])
                @case('text')
                <x-admin.form.input :value="$setting['value']" :col="6" :type="'text'" :label="$setting['display_name']" :required="true" :placeholder="$setting['display_name']" :fieldName="$setting['name']" />
                @break
                @case('image')
                <x-admin.form.file :col="3" :label="$setting['display_name']" :required="true" :fieldName="$setting['name']" :previewSrc="$setting['value']" />
                @break
                @default

                @endswitch
                @endforeach
            </div>
        </x-admin.form.form>
    </div>
</div>
</div>
<script>
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
</script>
@endsection
