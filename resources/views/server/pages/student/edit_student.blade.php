@extends('server.index')
@section('title', 'Quản Trị Sinh Viên')
@section('page-title', 'Sửa Sinh Viên')
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
                                    <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-save"></i> Lưu</button>
                                    <a href="{{route('Student')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Thuộc Khoa : </label>
                                        <select required name="faculty_id" class="form-control">
                                            <option value="">Chọn Khoa</option>
                                            @foreach ($list_faculty as $faculty)
                                                <option value="{{$faculty->id}}" @if($student->faculty_id == $faculty->id) selected @endif >{{$faculty->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tên Sinh Viên : </label>
                                        <input required type="text" id="name" name="name"  value="{{$student->name}}" class="form-control" placeholder="Nhập Tên Khoa...">
                                    </div>

                                    <div class="form-group">
                                        <label>Người Tạo : </label>
                                        <input required type="text" id="created_by" name="created_by" value="{{$student->created_by}}" class="form-control" placeholder="Nhập người tạo...">
                                    </div>

                                    <div class="form-group">
                                        <label>Người Đăng : </label>
                                        <input required type="text" id="updated_by" name="updated_by" value="{{$student->updated_by}}" class="form-control" placeholder="Nhập người đăng...">
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select required name="status" class="form-control">
                                            <option value="1" @if($student->status==1) selected @endif>Bật</option>
                                            <option value="0" @if($student->status==0) selected @endif>Tắt</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Ảnh Khoa :</label>
                                        <input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="image" class="thumbnail" width="200px" src="{{asset($student->image)}}">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tóm Lược Giới Thiệu: </label>
                                        <textarea required class="ckeditor" required name="intro">{{$student->intro}}</textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('intro', {
                                                    language: 'vi',
                                                    filebrowserImageBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Images',
                                                    filebrowserFlashBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Flash',
                                                    filebrowserImageUploadUrl: '../../plugins/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl: '../../plugins/editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                });
                                        </script>
                                    </div>

                                    <div class="form-group">
                                        <label>Đánh Giá: </label>
                                        <textarea required class="ckeditor" required name="evaluate">{{$student->evaluate}}</textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('evaluate', {
                                                    language: 'vi',
                                                    filebrowserImageBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Images',
                                                    filebrowserFlashBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Flash',
                                                    filebrowserImageUploadUrl: '../../plugins/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl: '../../plugins/editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                });
                                        </script>
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
