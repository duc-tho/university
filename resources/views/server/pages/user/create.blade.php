@extends('server.index')
@section('title', 'Quản Trị Người Dùng')
@section('page-title', 'Thêm Người Dùng')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 ">
        <form id="form" method="POST" enctype="multipart/form-data" role="form" action="{{ route('admin.user.create', [$khoa['slug']]) }}">
            @csrf
            <div class="card card-primary card-outline">
                <div class="card-header p-2">
                    <button class="btn btn-info btn-sm" type="submit" name="submit"><i class="fas fa-save"></i> Thêm</button>
                    <a href="{{route('admin.user.show', [$khoa['slug']])}}" class="btn btn-danger btn-sm"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="alert bg-olive color-palette" role="alert">
                                <span><b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!</span>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 px-3">
                            <label for="faculty_id">Khoa<span class="text-danger">*</span></label>
                            <select class="form-control custom-select @error('faculty_id') is-invalid @enderror" name="faculty_id" id="faculty_id">
                                <option value="" aria-readonly="true">Chọn Khoa</option>
                                @foreach ($faculty_list as $faculty)
                                <option value="{{$faculty->id}}" {{ old('faculty_id') == $faculty->id ? "selected" : '' }}>{{$faculty->name}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('faculty_id')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-check col-sm-3">
                            <label class="w-100" for="status">Trạng thái</label>
                            <div class="custom-control custom-switch form-control @error('status') is-invalid @enderror">
                                <input type="checkbox" id="status" class="custom-control-input" name="status" {{ old('status') ? "checked" : ""  }}>
                                <label class="custom-control-label ml-3" for="status" style="cursor: pointer;">Đang hoạt động</label>
                                <div class="invalid-feedback">
                                    @error('status')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3 px-3">
                            <label class="w-100" for="phone">Số điện thoại<span class="text-danger">*</span></label>
                            <div class="w-100">
                                <input type="phone" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Số điện thoại của bạn!" value="{{ old('phone') ?? ""  }}">
                                <div class="invalid-feedback">
                                    @error('phone')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3 px-3">
                            <label class="w-100" for="first_name">Họ<span class="text-danger">*</span></label>
                            <div class="w-100">
                                <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="Họ của bạn!" value="{{ old('first_name') ?? ""  }}">
                                <div class="invalid-feedback">
                                    @error('first_name')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3 px-3">
                            <label class="w-100" for="last_name">Tên<span class="text-danger">*</span></label>
                            <div class="w-100">
                                <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Tên của bạn!" value="{{ old('last_name') ?? ""  }}">
                                <div class="invalid-feedback">
                                    @error('last_name')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3 px-3">
                            <label class="w-100" for="nickname">Biệt danh<span class="text-danger">*</span></label>
                            <div class="w-100">
                                <input type="text" id="nickname" name="nickname" class="form-control @error('nickname') is-invalid @enderror" placeholder="Nickname của bạn!" value="{{ old('nickname') ?? ""  }}">
                                <div class="invalid-feedback">
                                    @error('nickname')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3 px-3">
                            <label class="w-100" for="birthday">Sinh nhật</label>
                            <div class="w-100">
                                <input type="date" id="birthday" name="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') ?? ""  }}">
                                <div class="invalid-feedback">
                                    @error('birthday')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6 px-3">
                            <label class="w-100" for="email">Email<span class="text-danger">*</span></label>
                            <div class="w-100">
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email của bạn!" value="{{ old('email') ?? ""  }}">
                                <div class="invalid-feedback">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3 px-3">
                            <label class="w-100" for="password">Mật khẩu<span class="text-danger">*</span></label>
                            <div class="w-100">
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mật khẩu của bạn!">
                                <div class="invalid-feedback">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3 px-3">
                            <label class="w-100" for="password">Nhập lại mật khẩu<span class="text-danger">*</span></label>
                            <div class="w-100">
                                <input type="password" id="re-password" name="re-password" class="form-control @error('re-password') is-invalid @enderror" placeholder="Nhập lại mật khẩu của bạn!">
                                <div class="invalid-feedback">
                                    @error('re-password')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3 px-3">
                            <label class="w-100" for="avatar">Ảnh đại diện</label>
                            <div class="w-100 custom-file">
                                <input id="avatar" type="file" name="avatar" class="form-control custom-file-input" onchange="changeImg(this)">
                                <label class="custom-file-label" for="inputImageFile" style="white-space: nowrap; overflow: hidden;">Bấm vào để chọn ảnh</label>
                                <div class="invalid-feedback">
                                    @error('avatar')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <label for="avatar" style="width: 100% !important;">
                                <img id="image" class="thumbnail" width="100%" src="{{asset('/dist/img/imgdefault.png') }}">
                            </label>
                        </div>
                        <div class="form-group col-sm-6 px-3">
                            <label for="faculty_id">Vai trò</label>
                            <select class="select2bs4 form-control custom-select @error('role') is-invalid @enderror" name="role[]" multiple="multiple" id="role">
                                @foreach ($roles as $role)
                                <option value="{{$role['id']}}" {{ in_array($role['id'], old('role') ?? []) ? "selected" : '' }}>{{$role['display_name']}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('role')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
<!--/.row-->
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
