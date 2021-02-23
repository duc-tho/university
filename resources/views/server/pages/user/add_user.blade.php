@extends('server.index')
@section('title', 'Quản Trị Người Dùng')
@section('page-title', 'Thêm Người Dùng')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 ">
        <div class="panel panel-primary">
            <div class="panel-body">
                @include('errors.note')
                <form method="post" enctype="multipart/form-data" role="form" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-save"></i> Thêm</button>
                                    <a href="{{route('User')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Thuộc Khoa : </label>
                                        <select required name="faculty_id" class="form-control">
                                            <option value="">Chọn Khoa</option>
                                            @foreach ($facultylist as $faculty)
                                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tên Tài Khoản : </label>
                                        <input required type="text" id="nickname" name="nickname" value="{{old('nickname')}}" class="form-control" placeholder="Nhập Tên Tài Khoản...">
                                    </div>

                                    <div class="form-group">
                                        <label>Họ : </label>
                                        <input required type="text" id="first_name" name="first_name" value="{{old('first_name')}}" class="form-control" placeholder="Nhập Họ Người Dùng...">
                                    </div>

                                    <div class="form-group">
                                        <label>Tên : </label>
                                        <input required type="text" id="last_name" name="last_name" value="{{old('last_name')}}" class="form-control" placeholder="Nhập Tên Người Dùng...">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày Sinh : </label>
                                        <input required type="date" id="birthday" name="birthday" value="{{old('birthday')}}" class="form-control" placeholder="Nhập Ngày Sinh...">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Điện Thoại: </label>
                                        <input required type="number" id="phone" name="phone"  value="{{old('phone')}}" class="form-control" placeholder="Nhập Số Điện Thoại...">
                                    </div>
                                    <div class="form-group">
                                        <label>Email : </label>
                                        <input required type="email" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Nhập Email...">
                                    </div>

                                    <div class="form-group">
                                        <label>Mật Khẩu : </label>
                                        <input required type="password" id="password" name="password" class="form-control" placeholder="Nhập Mật Khẩu...">
                                    </div>
                                    <div class="form-group">
                                        <label>Xác Nhận Mật Khẩu: </label>
                                        <input required type="password" id="passwordAgain" name="passwordAgain" class="form-control" placeholder="Xác Nhận Mật Khẩu...">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng Thái :</label>
                                        <select required name="status" class="form-control">
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
</div>
<script>
    CKEDITOR.editorConfig = function (config) {
        config.enterMode = CKEDITOR.ENTER_BR;
        config.autoParagraph = false;
        config.fillEmptyBlocks = false;
    };
</script>

@stop
