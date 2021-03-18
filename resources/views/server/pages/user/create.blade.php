@extends('server.index')
@section('title', 'Quản Trị Người Dùng')
@section('page-title', 'Thêm Người Dùng')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.user.show', [$khoa['slug']])" :submitLink="route('admin.user.store', [$khoa['slug']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.select :required="true" :col="6" :fieldName="'faculty_id'" :label="'Khoa'">
                    <option value="" aria-readonly="true">Chọn Khoa</option>
                    @foreach ($faculty_list as $faculty)
                    <option value="{{$faculty->id}}" {{ old('faculty_id') == $faculty->id ? "selected" : '' }}>{{$faculty->name}}</option>
                    @endforeach
                </x-admin.form.select>

                <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="false" :fieldName="'status'" :labelContent="'Đang hoạt động'" />
                <x-admin.form.input :col="3" :type="'phone'" :label="'Số điện thoại'" :required="true" :placeholder="'Số điện thoại của bạn!'" :fieldName="'phone'" />
                <x-admin.form.input :col="3" :type="'text'" :label="'Họ'" :required="true" :placeholder="'Họ của bạn!'" :fieldName="'first_name'" />
                <x-admin.form.input :col="3" :type="'text'" :label="'Tên'" :required="true" :placeholder="'Tên của bạn!'" :fieldName="'last_name'" />
                <x-admin.form.input :col="3" :type="'text'" :label="'Biệt danh'" :required="false" :placeholder="'Nickname của bạn!'" :fieldName="'nickname'" />
                <x-admin.form.input :col="3" :type="'date'" :label="'Sinh nhật'" :required="false" :placeholder="''" :fieldName="'birthday'" />
                <x-admin.form.input :col="6" :type="'text'" :label="'Email'" :required="true" :placeholder="'Email của bạn!'" :fieldName="'email'" />
                <x-admin.form.input :col="3" :type="'password'" :label="'Mật Khẩu'" :required="true" :placeholder="'Mật khẩu của bạn!'" :fieldName="'password'" />
                <x-admin.form.input :col="3" :type="'password'" :label="'Nhập lại mật khẩu'" :required="true" :placeholder="'Nhập lại mật khẩu của bạn!'" :fieldName="'re-password'" />
                <x-admin.form.file :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'avatar'" />

                <x-admin.form.multi-select :col="6" :label="'Vai trò'" :required="false" :fieldName="'role'">
                    @foreach ($roles as $role)
                    <option value="{{$role['id']}}" {{ in_array($role['id'], old('role') ?? []) ? "selected" : '' }}>{{$role['display_name']}}</option>
                    @endforeach
                </x-admin.form.multi-select>
                @if (Auth::user()['isAdmin'] && Auth::user()['id'] != $user['id'])
                <x-admin.form.checkbox :col="3" :label="'Quản trị viên'" :required="false" :fieldName="'isAdmin'" :labelContent="'Administrator'" />
                @endif
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
