@extends('server.index')
@section('title', 'Quản Trị Danh Mục')
@section('page-title', 'Thêm Danh Mục')
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
                                    <a href="{{route('Category')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
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
                                        <label>Thuộc Danh Mục Con: </label>
                                        <select required name="faculty_id" class="form-control">
                                            <option value="">Chọn Danh Mục</option>
                                            @foreach ($category_list as $item)
                                            @if ($item->parent_id == 0 )
                                                <option value="{{$item->id}}" style="color: red; font-weight: bold">{{$item->title}}
                                                    @foreach($category_list as $item2)
                                                        @if($item->id == $item2->parent_id)
                                                            <option value="{{$item->id}}">{{$item2->title}}</option>
                                                        @endif
                                                    @endforeach
                                                </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Từ Khóa : </label>
                                        <input required type="text" id="keywords" name="keywords"  value="{{old('keywords')}}"  class="form-control" placeholder="Nhập Meta Keywords...">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Mô tả : </label>
                                        <input required type="text" id="descriptions" name="descriptions"  value="{{old('descriptions')}}"  class="form-control" placeholder="Nhập Meta Descriptions...">
                                    </div>

                                    <div class="form-group">
                                        <label>Tên Layout : </label>
                                        <input required type="text" id="layoutname" name="layout_name" value="{{old('layout_name')}}"  class="form-control" placeholder="Nhập tên layout...">
                                    </div>

                                    <div class="form-group">
                                        <label>Trang Layout : </label>
                                        <input required type="text" id="layoutpage" name="layout_page" value="{{old('layout_page')}}"  class="form-control" placeholder="Nhập trang layout...">
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select required name="status" class="form-control">
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Người Tạo : </label>
                                        <input required type="text" id="created_by" name="created_by" value="{{old('created_by')}}" class="form-control" placeholder="Nhập trang layout...">
                                    </div>

                                    <div class="form-group">
                                        <label>Người Đăng : </label>
                                        <input required type="text" id="updated_by" name="updated_by"  value="{{old('updated_by')}}" class="form-control" placeholder="Nhập trang layout...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tóm Lược Giới Thiệu: </label>
                                        <textarea required class="ckeditor" required name="summary" id="summary" >{{ old('summary') }}</textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('summary', {
                                                    language: 'vi',
                                                    filebrowserImageBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Images',
                                                    filebrowserFlashBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Flash',
                                                    filebrowserImageUploadUrl: '../../plugins/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl: '../../plugins/editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung Giới Thiệu: </label>
                                        <textarea required class="ckeditor" required name="introdution" id="introdution" >{{ old('introdution') }}</textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('introdution', {
                                                    language: 'vi',
                                                    filebrowserImageBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Images',
                                                    filebrowserFlashBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Flash',
                                                    filebrowserImageUploadUrl: '../../plugins/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl: '../../plugins/editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh Khoa :</label>
                                        <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)" ">
                                        <img id="image" class="thumbnail" width="200px" src="{{asset('/dist/img/imgdefault.png') }}">
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
@stop
